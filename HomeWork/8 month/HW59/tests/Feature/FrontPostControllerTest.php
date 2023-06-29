<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class FrontPostControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @group FrontPost
     * @return void
     */
    public function test_Auth_method_with_active(): void
    {
        $user = User::factory()->create();
        $user->active = true;
        Auth::login($user);
        $posts = Post::paginate(5);

        $response = $this->get(route('posts.index', compact('posts')));
        $response->assertOk();
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_Auth_method_without_active(): void
    {
        $user = User::factory()->create();
        Auth::login($user);
        $posts = Post::paginate(5);

        $response = $this->get(route('posts.index', compact('posts')));
        $response->assertStatus(302);
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_Auth_method_without_Auth(): void
    {
        $posts = Post::paginate(5);

        $response = $this->get(route('posts.index', compact('posts')));
        $response->assertStatus(302);
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_show_method_with_active(): void
    {
        $user = User::factory()->create();
        $user->active = true;
        Auth::login($user);
        $users = User::all();
        $post = Post::factory()->for($users->random())->create();
        $response = $this->get(route('posts.show', compact('post')));
        $response->assertOk();
        $response->assertViewHas('post');
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_show_method_without_active(): void
    {
        $user = User::factory()->create();
        Auth::login($user);
        $users = User::all();
        $post = Post::factory()->for($users->random())->create();
        $response = $this->get(route('posts.show', compact('post')));
        $response->assertStatus(302);
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_create_method_with_active(): void
    {
        $user = User::factory()->create();
        $user->active = true;
        Auth::login($user);

        $response = $this->get(route('posts.create'));
        $response->assertOk();
        $response->assertViewIs('front.posts.create');
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_create_method_without_active(): void
    {
        $user = User::factory()->create();
        Auth::login($user);
        $response = $this->get(route('posts.create'));
        $response->assertStatus(302);
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_store_method_with_active(): void
    {
        $user = User::factory()->create();
        $user->active = true;
        Auth::login($user);
        $request = [
            'title' => 'Example title',
            'body' => 'Example body lorem ipsum deee vasa pupkun',
            'options' => 'Example options lorem ipsum deee vasa pupkun'
        ];

        $response = $this->get(route('posts.store', $request));
        $response->assertOk();
    }

    /**
     * @group FrontPost
     * @return void
     */
    public function test_store_method_without_active(): void
    {
        $user = User::factory()->create();
        Auth::login($user);
        $response = $this->get(route('posts.store'));
        $response->assertStatus(302);
    }
}
