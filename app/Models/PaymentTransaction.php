<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentTransactionFactory> */
    use HasFactory;

    protected $fillable = [
        'reference',
        'payable_id',
        'provider',
        'status',
        'amount',
        'currency',
        'gateway_response',
        'paid_at',
        'payable_type'
    ];

    protected $casts = [
        'gateway_response' => 'array',
        'paid_at' => 'datetime',
    ];

    public function payable()
    {
        return $this->morphTo();
    }

}
