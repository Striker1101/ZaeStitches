<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
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
            'product_id' => \App\Models\Product::factory(),
            'color_id' => \App\Models\Color::factory(),
            'size_id' => \App\Models\Size::factory(),
            'price' => $this->faker->randomFloat(2, 20, 200),
            'stock' => $this->faker->numberBetween(0, 50),
        ];
    }
}
