<?php


use App\Console\Commands\UpdateCurrencyRates;
use Illuminate\Foundation\Console\ScheduleListCommand;
use Illuminate\Support\Facades\Schedule;

Schedule::command(UpdateCurrencyRates::class)->everyMinute();
