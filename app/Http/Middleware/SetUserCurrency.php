<?php

namespace App\Http\Middleware;

use App\Models\Currency;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class SetUserCurrency
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        View::share('currency_code', Session::get('currency_code', 'NGN'));
        View::share('currency_symbol', Session::get('currency_symbol', '₦'));
        View::share('currency_rate', Session::get('currency_rate', 1));

        return $next($request);
    }
}
