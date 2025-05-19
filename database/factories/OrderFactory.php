<?php

namespace Database\Factories;

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
            'user_id' => null, // or User::factory()
            'order_number' => strtoupper(Str::random(10)),
            'status' => 'pending',
            'total_amount' => $this->faker->randomFloat(2, 50, 500),
            'payment_method' => $this->faker->randomElement(['card', 'cash', 'paypal']),
            'shipping_details' => [
                'name' => $this->faker->name(),
                'address' => $this->faker->address(),
                'phone' => $this->faker->phoneNumber(),
            ],
        ];
    }
}
