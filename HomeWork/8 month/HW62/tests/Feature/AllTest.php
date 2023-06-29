<?php

namespace Tests\Feature;

use App\Models\Note;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AllTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     * @group testCase
     */
    public function test_index_blade_without_login(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewIs('index');
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_index_blade_index_with_login(): void
    {
        $user = User::factory()->create();
        session()->put('user_id', $user->id);

        $response = $this->get(route('home'));

        $response->assertStatus(302);
        $response->assertRedirect(route('notes.index'));
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_login(): void
    {
        $user = User::factory()->create();

        $request['email'] = $user->email;
        $request['password'] = Hash::make('password');

        $response = $this->post(route('sessions.store', compact('request')));

        $response->assertStatus(302);
        $response->assertRedirect(route('home'));
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_login_validate(): void
    {
        $user = User::factory()->create(['email' => 'example@mail.ru', 'password' => 'password']);

        $response = $this->post(route('sessions.store'), [
            'email' => '',
            'password' => '',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'email' => 'The email field is required.',
            'password' => 'The password field is required.',
        ]);
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_registration_blade(): void
    {
        $response = $this->get(route('users.register'));

        $response->assertStatus(200);
        $response->assertViewIs('users.register');
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_registration(): void
    {
        $response = $this->post(
            route('users.store'),
            [
                'email' => 'example@mail.ru',
                'password' => 'password',
                'password_confirmation' => 'password',
                'name' => 'VasaPupkin'
            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect(route('notes.index'));
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_registration_validate(): void
    {
        $response = $this->post(
            route('users.store'),
            [
                'email' => 'example@mail.ru',
                'password' => 'password',
                'name' => 'VasaPupkin'
            ]
        );

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'password' => 'The password field confirmation does not match.'
        ]);
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_registration_validate_in_email(): void
    {
        $response = $this->post(
            route('users.store'),
            [
                'password' => 'password',
                'password_confirmation' => 'password',
                'name' => 'VasaPupkin'
            ]
        );

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'email' => 'The email field is required.'
        ]);
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_registration_validate_in_name(): void
    {
        $response = $this->post(
            route('users.store'),
            [
                'email' => 'example@mail.ru',
                'password' => 'password',
                'password_confirmation' => 'password'
            ]
        );

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'name' => 'The name field is required.'
        ]);
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_note_blade_with_login(): void
    {
        $user = User::factory()->create();
        session()->put('user_id', $user->id);

        $response = $this->get(
            route('notes.index'),
        );

        $response->assertStatus(200);
        $response->assertViewIs('notes.index');
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_note_error_validate(): void
    {
        $user = User::factory()->create();
        session()->put('user_id', $user->id);

        $response = $this->post(
            route('notes.store'),
            ['body' => '',]
        );

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'body' => 'The body field is required.'
        ]);
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_note_validate(): void
    {
        $user = User::factory()->create();
        session()->put('user_id', $user->id);

        $response = $this->post(
            route('notes.store'),
            ['body' => 'example text',]
        );

        $response->assertStatus(302);
        $response->assertRedirect(route('notes.index'));
    }

    /**
     * @return void
     * @group testCase
     */
    public function test_note_destroy(): void
    {
        $user = User::factory()->create();
        session()->put('user_id', $user->id);
        $note = Note::factory()->create(['user_id' => $user->id]);

        $response = $this->delete(
            route('notes.destroy', compact('note'))
        );

        $response->assertStatus(302);
        $response->assertRedirect(route('notes.index'));
    }
}
