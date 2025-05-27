<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'content' => $this->faker->paragraph,
            'user_id' => User::factory(),
            'commentable_id' => null, // Set in seeder
            'commentable_type' => null,
            'parent_id' => Product::factory(),
            'type' => $this->faker->randomElement(array: ['product', 'blog']),
        ];
    }
}
