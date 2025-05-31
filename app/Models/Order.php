<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_method',
        'order_number',
        'status',
        'country_code',
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

}
