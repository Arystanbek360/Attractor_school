<?php

namespace Database\Seeders;

use App\Models\InstitutionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Ресторан'],
            ['name' => 'Кафе'],
            ['name' => 'Кофейня'],
            ['name' => 'Бар'],
            ['name' => 'антикафе'],
            ['name' => 'клуб'],
            ['name' => 'лаундж'],
        ];

        foreach ($categories as $category) {
            InstitutionCategory::create($category);
        }
    }
}
