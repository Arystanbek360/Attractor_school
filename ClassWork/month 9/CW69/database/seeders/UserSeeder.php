<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)
            ->has(
                Article::factory(10)
                    ->hasComments(function (array $attributes, Article $article): array {
                        return ['user_id' => $article->user_id];
                    })
            )
            ->create();
    }
}
