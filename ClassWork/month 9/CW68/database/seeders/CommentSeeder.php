<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        Article::all()->each(function (Article $article) use ($users): void {
            $users->each(function (User $user) use ($article): void {
                Comment::factory()->create([
                    'user_id' => $user->id,
                    'article_id' => $article->id
                ]);
            });
        });
    }
}
