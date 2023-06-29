<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->create();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'address' => '4495 Linnie Spring Suite 901 West Rexshire, NY 52879',
            'phone_number' => '+15629943429',
            'is_admin' => true,
            'remember_token' => Str::random(10),
            'password' => bcrypt('adminpass'),
            'active' => true,
        ]);
    }
}
