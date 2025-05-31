<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Currency;

class ViewCurrency extends Component
{
    public $currencies;

    public function __construct()
    {
        $this->currencies = Currency::all();
    }

    public function render()
    {
        return view('components.view-currency');
    }
}
