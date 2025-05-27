<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function add(Request $request)
    {
        $item = $request->only(['product_id', 'size', 'color', 'quantity']);

        $cart = session()->get('cart', []);

        // Generate a unique key per variant (to avoid duplicates)
        $key = $item['product_id'] . '_' . $item['size'] . '_' . $item['color'];

        if (isset($cart[$key]))
        {
            $cart[$key]['quantity'] += $item['quantity']; // Add quantity if already exists
        } else
        {
            $cart[$key] = $item;
        }

        session()->put('cart', $cart);

        return response()->json(['message' => 'Item added to cart', 'count' => collect($cart)->sum('quantity')]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.cart');
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
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
