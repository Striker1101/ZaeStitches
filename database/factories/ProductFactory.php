<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Brand;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $title = $this->faker->words(3, true);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'discount_price' => $this->faker->randomFloat(2, 10, 500),
            'rating' => $this->faker->randomFloat(2, 0, 5),
            'brand_id' => Brand::factory(),
            'is_latest' => $this->faker->randomElement([false, true]),
            'is_popular' => $this->faker->randomElement([false, true]),
            'weight' => $this->faker->randomElement(['1kg', '500g', '2kg']),
            'dimension' => $this->faker->randomElement(['10x10x5', '20x15x10']),
            'featured_image' => 'https://demos.reytheme.com/london/wp-content/uploads/sites/8/2019/03/11-600x800.jpg',
            'material' => $this->faker->randomElement(['Cotton', 'Leather', 'Denim', 'Wool']),
            'status' => 'active',
        ];
    }
}
