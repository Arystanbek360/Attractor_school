<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            CategoryTableSeeder::class,
            ProductTableSeeder::class
        ]);

        DB::table('users')->insert([
            'email'    => 'admin@admin.com',
            'password' => Hash::make('1234')
        ]);
    }
}
