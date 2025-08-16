<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\PaymentTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderApproved;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['user'])
            ->latest()
            ->paginate(10);
        return view('dashboard.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'country_code' => 'required|string|max:10',
            'total_amount' => 'required|numeric',
            'carts_ids' => 'nullable',
            'shipping_details' => 'nullable',
        ]);

        return DB::transaction(function () use ($data) {
            $order_number = 'TX-' . time();

            // 2. Create Order with payment_transaction_id set
            $order = Order::create([
                'user_id' => auth()->id(),
                'payment_method' => 'FlutterWave',
                'order_number' => $order_number,
                'status' => 'paid',
                'total_amount' => $data['total_amount'],
                'country_code' => $data['country_code'],
                'carts_ids' => $data['carts_ids'],
                'shipping_details' => $data['shipping_details'],
            ]);

            return response()->json(
                [
                    'message' => 'Order and payment transaction created successfully',
                    'order' => $order,
                ],
                201,
            );
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load('user');

        $cartData = json_decode($order->carts_ids, true) ?? [];

        return view('dashboard.order.show', [
            'order' => $order,
            'carts' => collect($cartData),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function approve(Order $order)
    {
        if ($order->status !== 'paid') {
            return redirect()->back()->with('error', 'Order cannot be approved.');
        }

        $shipping = json_decode($order->shipping_details, true);
        $carts = json_decode($order->carts_ids, true);
        $isCustomsDeclarable = $shipping['country'] == 'NG' ? false : true;
        // Build packages
        $packages = [];
        foreach ($carts as $index => $cart) {
            $packages[] = [
                'weight' => isset($cart['product']['weight']) ? floatval($cart['product']['weight']) : 0.5,
                'dimensions' => [
                    'length' => 30,
                    'width' => 25,
                    'height' => 2,
                ],
                'description' => $cart['product']['title'] ?? 'Unknown Product',
                'referenceNumber' => $index + 1,
            ];
        }

        // Payload to DHL
        $payload = [
            'plannedShippingDateAndTime' => now()->addDay()->format('Y-m-d\TH:i:s') . 'GMT+01:00',
            'productCode' => 'N',
            'pickup' => ['isRequested' => false],
            'outputImageProperties' => [
                'allDocumentsInOneImage' => true,
                'encodingFormat' => 'pdf',
                'imageOptions' => [['templateName' => 'ECOM26_84_A4_001', 'typeCode' => 'label']],
            ],
            'accounts' => [['number' => env('DHL_ACCOUNT_NUMBER'), 'typeCode' => 'shipper']],
            'customerDetails' => [
                'shipperDetails' => [
                    'postalAddress' => [
                        'addressLine1' => config('custom.addressLine1'),
                        'addressLine2' => config('custom.addressLine2'),
                        'addressLine3' => config('custom.addressLine3'),
                        'postalCode' => config('custom.postalCode'),
                        'cityName' => config('custom.cityName'),
                        'countyName' => config('custom.countyName'),
                        'countryCode' => config('custom.countryCode'),
                    ],
                    'contactInformation' => [
                       'fullName' => config('custom.site_name') . ' Store',
                        'companyName' => config('custom.site_name'),
                        'email' => config('custom.email'),
                        'phone' => config('custom.raw_phone'),
                    ],
                    'typeCode' => 'business',
                ],
                'receiverDetails' => [
                    'postalAddress' => [
                        'addressLine1' => $shipping['address'] ?? 'N/A',
                        'addressLine2' => $shipping['city'] ?? 'N/A',
                        'addressLine3' => 'N/A',
                        'postalCode' => $shipping['postal_code'] ?? '000000',
                        'cityName' => $shipping['city'] ?? '',
                        'countyName' => $shipping['state'] ?? '',
                        'countryCode' => $shipping['country'] ?? 'NG',
                    ],
                    'contactInformation' => [
                        'fullName' => $shipping['name'] ?? '',
                        'companyName' => $shipping['name'] ?? '',
                        'email' => $shipping['email'] ?? '',
                        'phone' => $shipping['phone'] ?? '',
                    ],
                    'typeCode' => 'business',
                ],
            ],
            'content' => [
                'packages' => $packages,
                'isCustomsDeclarable' => $isCustomsDeclarable,
                'description' => 'Order from Zeastitches Store',
                'incoterm' => 'DAP',
                'unitOfMeasurement' => 'metric',
            ],
        ];

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Message-Reference' => (string) Str::uuid(),
                'Message-Reference-Date' => now()->toIso8601String(),
                'Authorization' => 'Basic ' . base64_encode(env('DHL_USERNAME') . ':' . env('DHL_PASSWORD')),
            ])
                ->withoutVerifying()
                ->post(env('DHL_BASE_URL') . '/shipments', $payload);

            if ($response->failed()) {
                return redirect()
                    ->back()
                    ->with('error', 'DHL API error: ' . $response->body());
            }

            $data = $response->json();

            // Save tracking info to order
            $order->status = 'shipped';
            $order->tracking_number = $data['shipmentTrackingNumber'] ?? null;
            $order->tracking_url = $data['trackingUrl'] ?? null;
            $order->save();

            // Send mail to customer
            Mail::to($shipping['email'])->send(new OrderApproved($order, $data));

            return redirect()->back()->with('success', 'Order approved, shipment created, and email sent.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Request failed: ' . $e->getMessage());
        }
    }
}
