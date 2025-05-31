<?php

namespace App\Console\Commands;
//  app/Console/Commands/UpdateExchangeRates.php

use App\Models\Currency;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateExchangeRates extends Command
{
    protected $signature = 'currency:update-rates';
    protected $description = 'Update exchange rates to NGN using ExchangeRate API';

    public function handle()
    {
        $apiKey = env('EXCHANGE_RATE_API_KEY');
        if (!$apiKey)
        {
            $this->error('EXCHANGE_RATE_API_KEY is not set.');
            return 1;
        }

        $currencies = Currency::where('code', '!=', 'NGN')->get();

        if ($currencies->isEmpty())
        {
            $this->warn('No currencies found to update.');
            return 0;
        }

        foreach ($currencies as $currency)
        {
            $url = "https://v6.exchangerate-api.com/v6/{$apiKey}/pair/{$currency->code}/NGN";

            $response = Http::get($url);

            if (!$response->successful())
            {
                $this->error("Failed to fetch rate for {$currency->code}");
                continue;
            }

            $data = $response->json();

            if (isset($data['conversion_rate']))
            {
                $rate = $data['conversion_rate'];
                $currency->update(['rate_to_naira' => $rate]);
                $this->info("Updated {$currency->code} to NGN = $rate");
            } else
            {
                $this->error("No conversion_rate in API response for {$currency->code}");
            }
        }

        return 0;
    }

}
