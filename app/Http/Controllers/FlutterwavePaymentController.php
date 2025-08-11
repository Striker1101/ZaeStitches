<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class FlutterwavePaymentController extends Controller
{
    public function index()
    {
        return view('flutterwave.payment');
    }

    public function initiatePayment(Request $request)
    {
        // Generate a transaction reference
        $transactionRef = time();

        // Store temp data in session
        session([
            'order_payload' => [
                'payable_type' => 'App\\Models\\Order',
                'provider' => 'flutterwave',
                'amount' => $request->amount,
                'country_code' => $request->country_code ?? 'NGN',
                'status' => 'paid',
                'carts_ids' => $request->carts_ids,
                'shipping_details' => $request->shipping_details,
            ],
        ]);

        // Prepare the data for the Flutterwave API
        $paymentData = [
            'tx_ref' => $transactionRef,
            'amount' => $request->amount,
            'currency' => !empty($request->country_code) ? $request->country_code : 'NGN',
            'redirect_url' => route('flutterwave.callback'),
            'customer' => [
                'email' => $request->email,
                'name' => $request->name,
            ],
            'payment_options' => 'card', // You can add other payment methods here
            'meta' => [
                'consumer_id' => 'unique_consumer_id', // You can use user metadata here
                'consumer_mac' => 'unique_mac_address', // You can use user metadata here
            ],
        ];

        // Redirect the user to the Flutterwave payment page
        $paymentURL = $this->createFlutterwavePaymentLink($paymentData);
        return redirect($paymentURL);
    }

    // Method to create payment link using Guzzle
    private function createFlutterwavePaymentLink(array $data)
    {
         $token = preg_replace('/\s+/', '', config('services.flutterwave.secret_key')); // remove all whitespace

        // dd(bin2hex($token));
        $response = Http::withoutVerifying()->withToken($token)->post('https://api.flutterwave.com/v3/payments', $data)->json();

        return $response['status'] === 'success' ? $response['data']['link'] : back()->with('error', $response['message'] ?? 'Error initiating payment.');
    }

    public function handleCallback(Request $request)
    {
        $transactionID = $request->transaction_id;

        // Verify the payment
        $verificationResponse = $this->verifyPayment($transactionID);

        if ($verificationResponse['status'] === 'success') {
            $order_number = 'TX-' . time();
            $sessionData = session('order_payload');

            Order::create([
                'user_id' => auth()->id(),
                'order_number' => $order_number,
                'status' => 'paid',
                'total_amount' => $sessionData['amount'],
                'country_code' => $sessionData['country_code'],
                'payment_method' => 'flutterwave',
                'carts_ids' => $sessionData['carts_ids'],
                'shipping_details' => $sessionData['shipping_details'],
            ]);
            session()->flush();
            // Payment was successful, handle post-payment actions (e.g., updating database)
            return view('flutterwave.success');
        }

        return view('flutterwave.error');
    }

    // Method to verify payment using Guzzle
    private function verifyPayment($transactionID)
    {
        $client = new Client();
        $url = "https://api.flutterwave.com/v3/transactions/{$transactionID}/verify";

        $response = $client->get($url, [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.flutterwave.secret_key'),
                'Content-Type' => 'application/json',
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
