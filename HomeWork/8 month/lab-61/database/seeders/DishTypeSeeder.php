<?php

namespace Database\Seeders;

use App\Models\DishType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Супы'],
            ['name' => 'Салаты'],
            ['name' => 'Бургеры'],
            ['name' => 'Десерты'],
            ['name' => 'Гарниры'],
        ];

        foreach ($types as $type) {
            DishType::create($type);
        }
    }
}
