<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //default setting
        // if (!session()->has('currency_code'))
        // {
        //     $naira = \App\Models\Currency::where('code', 'NGN')->first();

        //     session([
        //         'currency_code' => $naira->code,
        //         'currency_symbol' => $naira->symbol,
        //         'currency_rate' => $naira->rate_to_naira,
        //     ]);
        // }
    }
}
