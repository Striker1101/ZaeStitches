<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brands = Brand::latest()->paginate(10);
        return view('dashboard.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        try
        {
            $validated = $request->validated();

            // Handle logo upload
            if ($request->hasFile('logo'))
            {
                $path = $request->file('logo')->store('brands', 'public'); // saves to storage/app/public/brands
                $validated['logo'] = '/storage/' . $path;
            }

            // Create brand
            $brand = Brand::create($validated);

            return redirect()->route('dashboard.brand.index')->with('success', 'Brand created successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Failed to create brand: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        // Append full logo URL if logo exists
        if ($brand->logo)
        {
            $brand->logo_url = asset('storage/' . $brand->logo);
        } else
        {
            $brand->logo_url = null;
        }

        return response()->json([
            'id' => $brand->id,
            'name' => $brand->name,
            'slug' => $brand->slug,
            'description' => $brand->description,
            'logo_url' => $brand->logo_url,
            'created_at' => $brand->created_at,
            'updated_at' => $brand->updated_at,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
        return view('dashboard.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        try
        {
            $validatedData = $request->validated();

            // If a new logo is uploaded
            if ($request->hasFile('logo'))
            {
                // Delete old logo if exists
                if ($brand->logo && Storage::disk('public')->exists($brand->logo))
                {
                    Storage::disk('public')->delete($brand->logo);
                }

                // Store new logo
                $path = $request->file('logo')->store('brands', 'public');
                $validatedData['logo'] = '/storage/' . $path;
            }

            $brand->update($validatedData);

            return redirect()
                ->route('dashboard.brand.index')
                ->with('success', 'Brand updated successfully.');
        } catch (\Exception $e)
        {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update brand: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();

        return redirect()->route('dashboard.brand.index')->with('success', 'Brand deleted successfully.');
    }
}
