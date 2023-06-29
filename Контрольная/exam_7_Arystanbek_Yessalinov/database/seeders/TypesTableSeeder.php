<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Мебель', 'Компьютерное оборудование', 'Сетевое оборудование', 'Разное'];
        foreach ($types as $type) {
            Type::factory()->create([
                'name' => $type,
            ]);
        }
    }
}
