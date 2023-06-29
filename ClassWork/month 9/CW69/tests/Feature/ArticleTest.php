<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_success_show_article_list(): void
    {
        $user = User::factory()->create();
        $articles = Article::factory(20)->create(['user_id' => $user]);

        $request = $this->get(route('articles.index'));
        $response = json_decode($request->getContent());
        $request->assertOK();
        $this->assertTrue($response->meta->total === 20);
        $this->assertTrue(count($response->data) === $response->meta->per_page);
        $this->assertTrue($response->data[0]->id === $articles[0]->id);
    }

    public function test_success_article_show(): void
    {
        $user = User::factory()->create();
        $article = Article::factory()->create(['user_id' => $user->id]);

        $request = $this->get(route('articles.show', $article));
        $response = json_decode($request->getContent());
        $request->assertOk();
        $request->assertSeeText($article->title);
        $this->assertTrue($response->data->id === $article->id);
    }

    /**
     * A basic feature test example.
     */
    public function test_success_create_article(): void
    {
        $user = User::factory()->create();
        $data = [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'user_id' => $user->id
        ];

        $request = $this->postJson(route('articles.store'), $data);
        $response = json_decode($request->getContent());
        $request->assertCreated();
        $this->assertDatabaseHas('articles', ['id' => $response->data->id]);
    }

    public function test_success_update_article(): void
    {
        $user    = User::factory()->create();
        $article = Article::factory()->create(['user_id' => $user->id]);
        $data = [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'user_id' => $user->id
        ];

        $articleAssertData = $data;
        $articleAssertData['id'] = $article->id;

        $request = $this->putJson(route('articles.update', $article), $data);
        $request->assertOK();
        $this->assertDatabaseHas('articles', $articleAssertData);
    }

    public function test_article_success_delete(): void
    {
        $user = User::factory()->create();
        $article = Article::factory()->create(['user_id' => $user->id]);
        $response = $this->delete(route('articles.destroy', $article));
        $response->assertStatus(204);
        $this->assertDatabaseMissing('articles', ['id' => $article->id]);
    }
}
