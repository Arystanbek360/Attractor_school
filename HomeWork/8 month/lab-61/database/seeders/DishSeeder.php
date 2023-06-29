<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutions = Institution::all();

        foreach ($institutions as $institution) {
            Dish::factory(35)->create([
                'institution_id' => $institution->id,
                'kitchen_id' => rand(1, 3),
            ]);
        }
    }
}
