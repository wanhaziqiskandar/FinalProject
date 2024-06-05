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
            'title' => fake() -> catchPhrase(),
            'author' => fake() -> name(),
            'publisher' => fake() -> company(),
            'year' => fake()->year(),
            'category' => fake()->randomElement($array = ['Novel', 'Religion', 'Academic', 'Children', 'General Reading']),
            'available' => 'Yes'
        ];
    }
}
