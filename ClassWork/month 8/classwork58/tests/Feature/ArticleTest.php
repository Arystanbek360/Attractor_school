<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @group articles
     */
    public function test_list_articles(): void
    {
        $article = Article::first();

        $response = $this->get('/articles');

        $response->assertStatus(200);
        $response->assertViewHas('articles');
        $response->assertSeeText($article->title);
    }

    /**
     * @group articles
     */
    public function test_redirect_if_not_auth(): void
    {
        $response = $this->get('/articles/1');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    /**
     * @group articles
     */
    public function test_show_article(): void
    {
        $user = User::first();
        $this->actingAs($user);
        $article = Article::find(1);

        $response = $this->get('/articles/1');
        $response->assertStatus(200);
        $response->assertSeeText($article->title);
    }

    /**
     * @group articles
     */
    public function test_delete_forbidden(): void
    {
        $article = Article::find(1);
        $user = User::where('id', '!=', $article->user_id)->first();
        $this->actingAs($user);

        $response = $this->delete('/articles/1');
        $response->assertForbidden();
    }
}
