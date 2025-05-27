<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Currency;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $currencies = Currency::latest()->paginate(10);
        return view('dashboard.currency.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request)
    {
        //
        $currency = Currency::create($request->validated());
        return redirect()->route('dashboard.currency.index')->with('success', 'Currency posted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency)
    {
        //
        return view('dashboard.currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        $validatedData = $request->validated();
        $currency->update($validatedData);

        return redirect()
            ->route('dashboard.currency.index')
            ->with('success', 'Currency updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        //
        $currency->delete();

        return redirect()->route('dashboard.currency.index')->with('success', 'Currency deleted successfully.');
    }
}
