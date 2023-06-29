<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @group Admin
     * @return void
     */
    public function test_Auth_method_with_admin(): void
    {
        $user = User::factory()->create();
        $user->active = true;
        $user->is_admin = true;
        Auth::login($user);
        $users = User::all();

        $response = $this->get(route('admin.index', compact('users')));
        $response->assertOk();
    }

    /**
     * @group Admin
     * @return void
     */
    public function test_Auth_method_without_active(): void
    {
        $user = User::factory()->create();
        $user->is_admin = true;
        Auth::login($user);
        $users = User::all();

        $response = $this->get(route('admin.index', compact('users')));
        $response->assertOk();
    }

    /**
     * @group Admin
     * @return void
     */
    public function test_Auth_method_without_admin(): void
    {
        $user = User::factory()->create();
        $user->active = true;
        Auth::login($user);
        $users = User::all();

        $response = $this->get(route('admin.index', compact('users')));
        $response->assertStatus(403);
    }

    /**
     * @group Admin
     * @return void
     */
    public function test_switchActive_method(): void
    {
        $admin = User::factory()->create();
        $admin->is_admin = true;
        Auth::login($admin);
        $user = User::factory()->create();
        $users = User::paginate(10);

        $response = $this->get(route('switchActive', compact('user')));
        $this->assertEquals("Активен", $user->fresh()->active);
        $response->assertRedirect(route('admin.index', compact('users')));
        $response->assertSessionHas('status', "Пользователь {$user->name} успешно активирован!");
    }

    /**
     * @group Admin
     * @return void
     */
    public function test_switchActive_method_without_admin(): void
    {
        $admin = User::factory()->create();
        Auth::login($admin);
        $user = User::factory()->create();
        $users = User::paginate(10);

        $response = $this->get(route('switchActive', compact('user')));
        $response->assertStatus(403);
    }
}
