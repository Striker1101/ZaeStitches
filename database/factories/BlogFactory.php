<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraphs(3, true),
            'duration' => $this->faker->numberBetween(2, 10),
            'featured_image' => $this->faker->imageUrl(800, 600, 'fashion', true),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'user_id' => User::factory(),
        ];

    }
}
