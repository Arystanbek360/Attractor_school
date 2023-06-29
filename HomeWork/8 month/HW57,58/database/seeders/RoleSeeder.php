<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Участник' => 'Зарегестрированный человек с ограничеными возможностями',
            'Фотограф' => 'Фотограф',
            'Админ' => 'Может редактировать все данные и заниматься наполнением сайта'
        ];

        foreach ($roles as $role => $description) {
            Role::factory()->create([
                'name' => $role,
                'description' => $description
            ]);
        }
    }
}
