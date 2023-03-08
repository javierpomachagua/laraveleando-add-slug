<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(40),
            'description' => fake()->text(100),
            'content' => fake()->text(300),
            'image_path' => fake()->imageUrl,
            'slug' => null,
            'published_at' => fake()->dateTimeThisYear
        ];
    }
}
