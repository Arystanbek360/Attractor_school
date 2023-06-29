<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $gender = ['M', 'F'];
        $city = ['Shymkent', 'Astana', 'Almaty', 'Moscow', 'New-York'];
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert(['first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->unique()->safeEmail(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'description' => fake()->text(),
                'gender' => $gender[rand(0, 1)],
                'city' => $city[rand(0, 4)],
                'active' => array_rand([true, false]),
                'url' => fake()->url(),
                'born' => fake()->date()
            ]);
        }
    }
}
