<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreColorRequest;
use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateColorRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tags = Tag::latest()->paginate(10);
        return view('dashboard.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        //
        $tag = Tag::create($request->validated());
        return redirect()->route('dashboard.tag.index')->with('success', 'Tag created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
        return view('dashboard.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $validatedData = $request->validated();
        $tag->update($validatedData);

        return redirect()
            ->route('dashboard.tag.index')
            ->with('success', 'Tag updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
        $tag->delete();

        return redirect()->route('dashboard.tag.index')->with('success', 'Tag deleted successfully.');
    }
}
