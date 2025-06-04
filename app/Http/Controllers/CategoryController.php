<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::latest()->paginate(10);
        return view('dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try
        {
            $validated = $request->validated();

            // Handle image upload
            if ($request->hasFile('image'))
            {
                $path = $request->file('image')->store('category', 'public'); // saves to storage/app/public/brands
                $validated['image'] = '/storage/' . $path;
            }

            // Create Category
            $category = Category::create($request->validated());
            return redirect()->route('dashboard.category.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e)
        {
            return redirect()->back()->withInput()->with('error', 'Failed to create Category: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try
        {
            $validatedData = $request->validated();

            // If a new image is uploaded
            if ($request->hasFile('image'))
            {
                // Delete old image if it exists
                if ($category->image)
                {
                    $oldPath = str_replace('/storage/', '', $category->image);
                    if (Storage::disk('public')->exists($oldPath))
                    {
                        Storage::disk('public')->delete($oldPath);
                    }
                }

                // Store new image
                $path = $request->file('image')->store('category', 'public');
                $validatedData['image'] = '/storage/' . $path;
            }

            // Update category
            $category->update($validatedData);

            return redirect()
                ->route('dashboard.category.index')
                ->with('success', 'Category updated successfully.');
        } catch (\Exception $e)
        {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update category: ' . $e->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try
        {
            // Delete image if it exists
            if ($category->image)
            {
                $imagePath = str_replace('/storage/', '', $category->image); // convert to storage path
                if (Storage::disk('public')->exists($imagePath))
                {
                    Storage::disk('public')->delete($imagePath);
                }
            }

            // Delete the category record
            $category->delete();

            return redirect()
                ->route('dashboard.category.index')
                ->with('success', 'Category deleted successfully.');
        } catch (\Exception $e)
        {
            return redirect()
                ->back()
                ->with('error', 'Failed to delete category: ' . $e->getMessage());
        }
    }
}
