<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\PaymentTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['user'])->latest()->paginate(10);
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
                'payment_method' => "FlutterWave",
                'order_number' => $order_number,
                'status' => 'paid',
                'total_amount' => $data['total_amount'],
                'country_code' => $data['country_code'],
                'carts_ids' => $data['carts_ids'],
                'shipping_details' => $data['shipping_details'],
            ]);

            return response()->json([
                'message' => 'Order and payment transaction created successfully',
                'order' => $order,
            ], 201);
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
}
