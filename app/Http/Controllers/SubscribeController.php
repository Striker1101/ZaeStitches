<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subscribes = Subscribe::latest()->paginate(10);
        return view('dashboard.subscribe.index', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.subscribe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizeRequest $request)
    {
        //
        $subscribe = Subscribe::create($request->validated());
        return redirect()->route('dashboard.subscribe.index')->with('success', 'Subscribe created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribe $subscribe)
    {
        //
        return view('dashboard.subscribe.edit', compact('subscribe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSizeRequest $request, Subscribe $subscribe)
    {
        $validatedData = $request->validated();
        $subscribe->update($validatedData);

        return redirect()
            ->route('dashboard.subscribe.index')
            ->with('success', 'Subscribe updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribe $subscribe)
    {
        //
        $subscribe->delete();

        return redirect()->route('dashboard.subscribe.index')->with('success', 'Subscribe deleted successfully.');
    }
}
