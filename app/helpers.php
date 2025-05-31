<?php

use App\Models\Currency;

if (!function_exists('convert_price')) {
    function convert_price($priceInNaira)
    {
        $rate = session('currency_rate', 1);
        return round($priceInNaira / $rate, 2);
    }

    function currency_symbol()
    {
        return session('currency_symbol', '₦');
    }

    function currency_code()
    {
        return session('currency_code', 'NGN');
    }
}
