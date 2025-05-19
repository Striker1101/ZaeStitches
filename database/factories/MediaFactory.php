<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileName = $this->faker->word . '.jpg';
        return [
            'name' => $fileName,
            'url' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'type' => $this->faker->randomElement(['blog', 'product', 'both']),
            'mime_type' => 'image/jpeg',
            'size' => $this->faker->randomElement(['500KB', '1MB', '2MB']),
            'extension' => 'jpg',
        ];
    }
}
