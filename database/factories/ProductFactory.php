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
            'brand_id' => Brand::factory(),
            'weight' => $this->faker->randomElement(['1kg', '500g', '2kg']),
            'dimension' => $this->faker->randomElement(['10x10x5', '20x15x10']),
            'featured_image' => $this->faker->imageUrl(800, 600, 'fashion', true),
            'material' => $this->faker->randomElement(['Cotton', 'Leather', 'Denim', 'Wool']),
            'status' => 'active',
        ];
    }
}
