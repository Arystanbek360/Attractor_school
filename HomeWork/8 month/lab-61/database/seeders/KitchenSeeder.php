<?php

namespace Database\Seeders;

use App\Models\Kitchen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KitchenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Русская'],
            ['name' => 'Китайская'],
            ['name' => 'Казахская'],
        ];

        foreach ($categories as $category) {
            Kitchen::create($category);
        }
    }
}
