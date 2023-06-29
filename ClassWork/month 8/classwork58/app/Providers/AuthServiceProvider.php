<?php

namespace App\Providers;

 use App\Models\Article;
 use App\Models\Comment;
 use App\Models\User;
 use App\Policies\ArticlePolicy;
 use App\Policies\CommentPolicy;
 use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Article::class => ArticlePolicy::class,
        Comment::class => CommentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('update-article', function (User $user, Article $article): bool {
            return $user->id === $article->user_id;
        });

//        Gate::define('update-article', [ArticlePolicy::class, 'update']);
    }
}
