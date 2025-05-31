<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductVariantRequest;
use App\Http\Requests\UpdateProductVariantRequest;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Size;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $variants = ProductVariant::with(['product', 'size', 'color'])->latest()->paginate(10);
        return view('dashboard.variant.index', compact('variants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $sizes = Size::all();
        $colors = Color::all();
        $products = Product::all();
        return view('dashboard.variant.create', compact('products', 'sizes', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductVariantRequest $request)
    {
        try
        {
            $validated = $request->validated();

            $variant = ProductVariant::create($validated);

            return redirect()->route('dashboard.variant.index')->with('success', 'Variant added successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Failed to add variant: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVariant $productVariant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductVariant $variant)
    {
        //
        $variant->load('product', 'size', 'color');
        $sizes = Size::all();
        $colors = Color::all();
        $products = Product::all();
        return view('dashboard.variant.edit', [
            'variant' => $variant,
            'sizes' => $sizes,
            'colors' => $colors,
            'products' => $products,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductVariantRequest $request, ProductVariant $productVariant)
    {
        try
        {
            $validated = $request->validated();

            $productVariant->update($validated);

            return redirect()->route('dashboard.variant.index')->with('success', 'Variant updated successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Failed to update variant: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductVariant $productVariant)
    {
        //
        $productVariant->delete();

        return redirect()->route('dashboard.variant.index')->with('success', 'Variant deleted successfully.');
    }
}
