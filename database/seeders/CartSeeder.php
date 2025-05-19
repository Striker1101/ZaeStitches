<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cart::factory(10)->create()->each(function ($cart) {
            CartItem::factory(rand(1, 3))->create(['cart_id' => $cart->id]);
        });
    }
}
