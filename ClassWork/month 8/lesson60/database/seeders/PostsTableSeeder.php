<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all();
        for ($i = 0; $i < 50; $i++) {
            \App\Models\Post::factory()->for($users->random())->create();
        }
    }
}
