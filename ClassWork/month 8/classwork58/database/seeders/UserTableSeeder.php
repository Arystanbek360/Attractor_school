<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all();

        $admin = new User([
            'password' => Hash::make('password'),
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'country_id' => Country::first()->id
        ]);
        $admin->save();

        /** @var Role $adminRole */
        $adminRole = $roles->where('name', 'Админ')->first();

        $admin->roles()->sync([
            $adminRole->id => [
                'created_at' => new Carbon(),
                'updated_at' => new Carbon(),
            ]
        ]);

        User::factory(10)->create();
        User::where('id', '>', $admin->id)
            ->get()
            ->each(function (User $user) use ($roles): void {
                $rolesId = $roles
                    ->random(rand(1, $roles->count()))
                    ->pluck('id')
                    ->toArray();

                $user
                    ->roles()
                    ->sync([
                        $rolesId[0] => [
                            'created_at' => new Carbon(),
                            'updated_at' => new Carbon(),
                        ]
                    ]);
            });
    }
}
