<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentTransaction>
 */
class PaymentTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reference' => Str::uuid(),
            'provider' => $this->faker->randomElement(['flutterwave', 'paystack']),
            'payable_id' => rand(1, 10), // numeric
            'payable_type' => \App\Models\Order::class, // or null
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'currency' => 'NGN',
            'gateway_response' => ['message' => 'Simulated response'],
            'paid_at' => now(),
        ];
    }
}
