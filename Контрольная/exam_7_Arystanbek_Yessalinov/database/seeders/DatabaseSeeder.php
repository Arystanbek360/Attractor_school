<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CabinetsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
