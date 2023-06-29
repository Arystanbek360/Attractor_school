<?php

namespace App\Providers;

 use App\Models\Article;
 use App\Models\User;
 use App\Policies\ArticlePolicy;
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
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('update-article', function (User $user, Article $article): bool {
            return $user->id === $article->user_id;
        });

//        Gate::define('update-article', [ArticlePolicy::class, 'update']);
    }
}
