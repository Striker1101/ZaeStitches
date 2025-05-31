<?php

use App\Console\Commands\UpdateCurrencyRates;
use Illuminate\Support\Facades\Schedule;

return function (Schedule $schedule) {
    $schedule->command(UpdateCurrencyRates::class)->everyMinute();
};
