<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Cabinet;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::factory(20)->create();
    }
}
