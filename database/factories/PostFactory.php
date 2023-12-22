<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
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
            'category_id' => fake()->numberBetween(1, 5),
            'user_id' => fake()->numberBetween(1, 3),
            'title' => fake()->sentence,
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(10)).'</p>',
            'slug' => fake()->slug,
            'excerpt' => '<p>'.implode('</p><p>', fake()->paragraphs(2)).'</p>',
        ];
    }
}
