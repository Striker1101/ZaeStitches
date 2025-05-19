<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Product::factory(10)->create()->each(function ($product) {
            foreach (range(1, 3) as $i)
            {
                \App\Models\ProductVariant::factory()->create([
                    'product_id' => $product->id,
                    'color_id' => \App\Models\Color::inRandomOrder()->first()->id,
                    'size_id' => \App\Models\Size::inRandomOrder()->first()->id,
                ]);
            }
        });
    }
}
