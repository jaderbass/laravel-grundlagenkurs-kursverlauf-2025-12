<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'             => fake()->words(5, true),
            'author'            => fake()->name($gender = null),
            'isbn'              => fake()->isbn13(),
            'published_year'    => fake()->numberBetween(1900, 2025),
            'category'          => fake()->word(),
        ];
    }
}
