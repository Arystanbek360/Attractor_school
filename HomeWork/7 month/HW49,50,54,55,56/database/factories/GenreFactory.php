<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genre = ['Детективы', 'Фантастика', 'Фэнтези', 'Учебники', 'Романы'];
        return [
            'name' => fake()->unique()->randomElement($genre),
            'description' => fake()->text(500)
        ];
    }
}
