<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
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
            'token' => Str::uuid(),
            'status' => 'active',
            'product_id' => Product::factory(), // or use an existing product ID
            'quantity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'color' => $this->faker->safeColorName(),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
        ];
    }
}
