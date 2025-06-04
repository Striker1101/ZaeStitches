<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'code' => strtoupper($this->faker->unique()->currencyCode),
            'name' => $this->faker->country . ' Currency',
            'symbol' => $this->faker->randomElement(['₦', '₵', '$', '€']),
            'rate_to_naira' => $this->faker->randomFloat(4, 0.1, 1500),
            'country_code' => $this->faker->countryCode,
            'shipping_amount' => $this->faker->randomFloat(4, 0.1, 1500),
        ];
    }
}
