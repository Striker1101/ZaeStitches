<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Currency::insert([
            [
                'code' => 'NGN',
                'name' => 'Nigerian Naira',
                'symbol' => '₦',
                'rate_to_naira' => 1.0,
                'country_code' => 'NG',
            ],
            [
                'code' => 'GHS',
                'name' => 'Ghanaian Cedi',
                'symbol' => '₵',
                'rate_to_naira' => 78.0,
                'country_code' => 'GH',
            ],
            [
                'code' => 'USD',
                'name' => 'US Dollar',
                'symbol' => '$',
                'rate_to_naira' => 1350.0,
                'country_code' => 'US',
            ]
        ]);
    }
}
