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
        User::factory(5)->create();

        $roles = Role::all();
        User::all()->each(function (User $user) use ($roles): void {
            $user
                ->roles()
                ->attach(
                    $roles
                        ->where('id', 2)
                        ->pluck('id')
                        ->toArray()
                );
        });

        User::factory(1)->create();
        User::find(5)
            ->roles()
            ->attach(
                $roles
                    ->where('id', 3)
                    ->pluck('id')
                    ->toArray()
            );
    }
}
