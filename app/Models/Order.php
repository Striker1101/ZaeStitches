<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_transaction_id',
        'order_number',
        'status',
        'total_amount',
        'carts_ids',
        'shipping_details',
    ];

    protected $casts = [
        'shipping_details' => 'array',
        'carts_ids' => 'array',
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paymentTransaction()
    {
        return $this->belongsTo(PaymentTransaction::class);
    }

    // If this order is morphable by payment_transactions (polymorphic relation)
    public function transactions()
    {
        return $this->morphMany(PaymentTransaction::class, 'payable');
    }
}
