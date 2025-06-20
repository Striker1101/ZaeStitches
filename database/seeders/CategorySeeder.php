<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'T-Shirts', 'slug' => 't-shirts', 'description' => 'Casual and comfortable T-shirts for men and women', 'type' => 'product'],
            ['name' => 'Jeans', 'slug' => 'jeans', 'description' => 'Denim jeans in various fits and styles', 'type' => 'both'],
            ['name' => 'Jackets', 'slug' => 'jackets', 'description' => 'Stylish and warm jackets for all seasons', 'type' => 'blog'],
            ['name' => 'Dresses', 'slug' => 'dresses', 'description' => 'Elegant dresses for all occasions', 'type' => 'product'],
            ['name' => 'Hoodies', 'slug' => 'hoodies', 'description' => 'Comfortable hoodies for casual wear', 'type' => 'both'],
            ['name' => 'Shoes', 'slug' => 'shoes', 'description' => 'Sneakers, boots, and formal shoes', 'type' => 'blog'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'description' => 'Belts, hats, scarves, and more', 'type' => 'product'],
        ];

        foreach ($categories as $cat)
        {
            Category::create($cat);
        }
    }
}
