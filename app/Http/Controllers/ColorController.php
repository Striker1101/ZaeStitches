<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreColorRequest;
use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateColorRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Models\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $colors =Color::latest()->paginate(10);
        return view('dashboard.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreColorRequest $request)
    {
        //
        $color =Color::create($request->validated());
        return redirect()->route('dashboard.color.index')->with('success', 'Color created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        //
        return view('dashboard.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorRequest $request,Color $color)
    {
        $validatedData = $request->validated();
        $color->update($validatedData);

        return redirect()
            ->route('dashboard.color.index')
            ->with('success', 'Color updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        //
        $color->delete();

        return redirect()->route('dashboard.color.index')->with('success', 'Color deleted successfully.');
    }
}
