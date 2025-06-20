<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCurrencyPreference extends Model
{
    /** @use HasFactory<\Database\Factories\UserCurrencyPreferenceFactory> */
    use HasFactory;
    protected $fillable = ['user_id', 'currency_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
