<?php

namespace App\Providers;

use App\Models\Currency;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;


class CurrencyViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        View::composer('layouts.app', function ($view) {
            $currencies = Currency::all();
            $view->with('currencies', $currencies);
        });
    }
}
