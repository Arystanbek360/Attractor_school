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
        $this->call(GenresTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
