<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /** @use HasFactory<\Database\Factories\CurrencyFactory> */
    use HasFactory;
    protected $fillable = ['code', 'name', 'symbol', 'rate_to_naira', 'country_code'];


    public function users()
    {
        return $this->hasMany(UserCurrencyPreference::class);
    }
}
