<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CabinetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $number = [20, 21, 22];
        $cabinets = ['Кабинет директора', 'Кабинет бухгалтера', 'Серверная'];
        return [
            'number' => fake()->unique()->randomElement($number),
            'name' => fake()->unique()->randomElement($cabinets),
        ];
    }
}
