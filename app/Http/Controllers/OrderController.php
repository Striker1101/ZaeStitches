<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['user', 'paymentTransaction'])->latest()->paginate(10);
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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        // Load related user and payment transaction
        $order->load(['user', 'paymentTransaction']);

        // Safely decode carts_ids and ensure it's an array
        $cartIds = is_array($order->carts_ids)
            ? $order->carts_ids
            : (json_decode($order->carts_ids, true) ?? []);


        // Fetch carts with product relationship
        $carts = \App\Models\Cart::with('product')
            ->whereIn('id', $cartIds)
            ->get();

        return view('dashboard.order.show', [
            'order' => $order,
            'carts' => $carts,
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
