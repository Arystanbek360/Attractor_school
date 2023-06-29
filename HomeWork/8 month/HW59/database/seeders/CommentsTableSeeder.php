<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all();
        $posts = \App\Models\Post::all();
        for ($i = 0; $i < 500; $i++) {
            \App\Models\Comment::factory()->for($users->random())->for($posts->random())->create();
        }
    }
}
