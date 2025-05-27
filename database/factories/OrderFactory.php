<?php

namespace Database\Factories;

use App\Models\PaymentTransaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null, // or use User::factory() if needed
            'payment_transaction_id'=>PaymentTransaction::factory(),
            'order_number' => strtoupper(Str::random(10)),
            'status' => 'pending',
            'total_amount' => $this->faker->randomFloat(2, 50, 500),
            'carts_ids' => json_encode([
                $this->faker->numberBetween(0, 5),
                $this->faker->numberBetween(0, 5),
            ]),
            'shipping_details' => json_encode([
                'name' => $this->faker->name(),
                'address' => $this->faker->address(),
                'phone' => $this->faker->phoneNumber(),
            ]),
        ];
    }
}
