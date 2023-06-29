<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(3)->create();
        $roles = Role::all();
        User::all()->each(function (User $user) use ($roles): void {
            $user
                ->roles()
                ->attach(
                    $roles
                        ->random(rand(1, $roles->count()))
                        ->pluck('id')
                        ->toArray()
                );
        });
//        User::factory(5)->has(Role::factory(6))->create();
    }
}
