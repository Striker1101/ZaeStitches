<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Currency;
use Illuminate\Http\Request;

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

        return redirect()->route('dashboard.currency.index')->with('success', 'Currency updated successfully.');
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

    public function setCurrency(Request $request, $code)
    {
        $currency = Currency::where('code', strtoupper($code))->first();

        if ($currency) {
            session([
                'currency_code' => $currency->code,
                'currency_symbol' => $currency->symbol,
                'currency_rate' => $currency->rate_to_naira,
                'shipping_amount' => $currency->shipping_amount,
            ]);
        }

        return redirect()
            ->back()
            ->with('success', 'Currency switched to ' . $currency->name);
    }

    public function convert(Request $request)
    {
        $totals = $request->input('totals', []);
        $baseTotal = 0;

        foreach ($totals as $price) {
            // Extract symbol
            $symbol = mb_substr(trim($price), 0, 1);

            // Find currency
            $currency = Currency::where('symbol', $symbol)->first();
            if (!$currency) {
                continue;
            }

            // Clean and parse amount
            $amount = floatval(str_replace([',', $symbol], '', $price));

            // Convert to base currency (NGN)
            $baseTotal += $amount * $currency->rate_to_naira;
        }

        // Get rate from session
        $sessionRate = session('currency_rate', 1);
        $sessionCurrency = session('currency_symbol', '₦');
        $activeCurrency = Currency::where('symbol', $sessionCurrency)->first();
        // Final converted value
        $convertedTotal = $baseTotal / $sessionRate;
        $shipping_amount = $activeCurrency->shipping_amount;

        return response()->json([
            'total' => round($convertedTotal, 2),
            'symbol' => $sessionCurrency,
            'country_code' => $activeCurrency->code,
            'shipping_amount' => round($shipping_amount, 2),
            // 'final_total' => round($convertedTotal + $shipping_amount, 2)
            'final_total' => round($convertedTotal + 0, 2),
        ]);
    }
}
