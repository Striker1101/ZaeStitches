<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\Product;
use App\Traits\ProductTransformer;
use Illuminate\Http\Request;

class CartController extends Controller
{

    use ProductTransformer;

    public function add(Request $request)
    {
        $item = $request->only(['product_id', 'size', 'color', 'quantity', 'token', 'currency', 'price']);
        $cart = session()->get('cart', []);

        // Generate key for session cart
        $key = $item['product_id'] . '_' . $item['size'] . '_' . $item['color'];

        // Try to find existing cart record in DB for this user/token + attributes
        $existingCart = Cart::where('product_id', $item['product_id'])
            ->where('size', $item['size'])
            ->where('color', $item['color'])
            ->where('token', $item['token'])
            ->first();

        if ($existingCart)
        {
            // Update quantity in DB
            $existingCart->quantity += $item['quantity'];
            $existingCart->save();

            // Update quantity in session
            if (isset($cart[$key]))
            {
                $cart[$key]['quantity'] += $item['quantity'];
            } else
            {
                // If session missing this key, add it
                $cart[$key] = $item;
            }

            // Add DB id to session item for syncing
            $cart[$key]['id'] = $existingCart->id;
        } else
        {
            // Create new cart record in DB
            $cartModel = new Cart();
            $cartModel->product_id = $item['product_id'];
            $cartModel->size = $item['size'];
            $cartModel->color = $item['color'];
            $cartModel->price = $item['price'] ?? 0;
            $cartModel->currency = $item['currency'];
            $cartModel->quantity = $item['quantity'];
            $cartModel->token = $item['token'];
            $cartModel->user_id = auth()->id();
            $cartModel->save();

            // Add DB id to session item
            $item['id'] = $cartModel->id;
            $cart[$key] = $item;
        }

        session()->put('cart', $cart);

        return response()->json([
            'message' => 'Item added to cart',
            'count' => count($cart)
        ]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $token = $request->query('token');
        $sessionCart = session('cart', []);
        $cartIds = collect($sessionCart)->pluck('id')->unique()->values();

        $popularProducts = Product::with([
            'categories',
            'tags',
            'comments',
            'productVariants',
            'productVariants.size',
            'productVariants.color',
            'brand'
        ])
            ->where('is_popular', true)
            ->latest()
            ->take(10)
            ->get()
            ->map(fn($product) => $this->transformProduct($product));

        if (!$token)
        {
            return view('pages.cart', ['cartItems' => null, 'token' => null, 'popularProducts' => $popularProducts]);
        }

        if ($cartIds->isEmpty())
        {
            return view('pages.cart', ['cartItems' => null, 'token' => $token, 'popularProducts' => $popularProducts]);
        }


        // Now fetch only cart items matching those IDs
        $cartItems = Cart::with('product')
            ->whereIn('id', $cartIds)
            ->get();

        return view('pages.cart', compact('cartItems', 'token', 'popularProducts'));
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
    public function update(Request $request)
    {
        $data = $request->all();

        if (is_array($data) && array_is_list($data))
        {
            // Bulk update
            foreach ($data as $item)
            {
                if (isset($item['id']) && isset($item['quantity']))
                {
                    Cart::where('id', $item['id'])->update([
                        'quantity' => $item['quantity']
                    ]);
                }
            }
            return response()->json(['message' => 'Cart items updated in bulk.']);
        } elseif (is_array($data) && isset($data['id'], $data['quantity']))
        {
            // Single update
            Cart::where('id', $data['id'])->update([
                'quantity' => $data['quantity']
            ]);
            return response()->json(['message' => 'Cart item updated.']);
        }

        return response()->json(['error' => 'Invalid payload.'], 400);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Remove from session cart
        $sessionCart = session('cart', []);
        if (isset($sessionCart[$id]))
        {
            unset($sessionCart[$id]);
            session(['cart' => $sessionCart]);
        }

        // Remove from database cart table
        $cartItem = \App\Models\Cart::find($id);
        if ($cartItem)
        {
            $cartItem->delete();
        }

        return response()->json(['message' => 'Item removed from cart.'], 200);
    }

}
