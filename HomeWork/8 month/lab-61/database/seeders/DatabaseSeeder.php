<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'is_admin' => true,
            'remember_token' => Str::random(10),
            'password' => bcrypt('adminpass'),
        ]);

        $this->call(InstitutionCategorySeeder::class);
        $this->call(InstitutionSeeder::class);
        $this->call(KitchenSeeder::class);
        $this->call(DishTypeSeeder::class);
        $this->call(DishSeeder::class);
    }
}
