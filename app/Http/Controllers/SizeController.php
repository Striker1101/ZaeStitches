<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Models\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sizes = Size::latest()->paginate(10);
        return view('dashboard.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizeRequest $request)
    {
        //
        $size = Size::create($request->validated());
        return redirect()->route('dashboard.size.index')->with('success', 'Size created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        //
        return view('dashboard.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSizeRequest $request, Size $size)
    {
        $validatedData = $request->validated();
        $size->update($validatedData);

        return redirect()
            ->route('dashboard.size.index')
            ->with('success', 'Size updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        //
        $size->delete();

        return redirect()->route('dashboard.size.index')->with('success', 'Size deleted successfully.');
    }
}
