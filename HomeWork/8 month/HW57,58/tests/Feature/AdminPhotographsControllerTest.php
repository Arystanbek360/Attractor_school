<?php

namespace Tests\Feature;

use App\Models\Photograph;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class AdminPhotographsControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_enter_in_adminDashboard_with_Admin(): void
    {
        $user = User::find(5);
        Auth::login($user);

        $response = $this->get(route('admin.dashboard', compact('user')));
        $response->assertOk();
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_enter_in_adminDashboard_without_Admin(): void
    {
        $user = User::find(1);
        Auth::login($user);

        $response = $this->get(route('admin.dashboard', compact('user')));
        $response->assertStatus(403);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_index_method_photographs_show_in_table(): void
    {
        $photographs = Photograph::all();
        $user = User::find(5);
        Auth::login($user);

        $response = $this->get(route('admin.photographs.index'));
        $response->assertOk();
        $response->assertViewHasAll([
            'photographs' => $photographs
        ]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_index_method_photographs_show_in_table_without_auth(): void
    {
        $photographs = Photograph::all();

        $response = $this->get(route('admin.photographs.index'));
        $response->assertStatus(302);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_create_method_photograph(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $response = $this->get(route('admin.photographs.create'));

        $response->assertOk();
        $response->assertViewIs('admin.photographs.create');
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_create_method_photograph_without_auth(): void
    {
        $response = $this->get(route('admin.photographs.create'));

        $response->assertStatus(302);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_save_the_new_photograph(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'Example',
            'user_id' => 2,
            'about' => 'Hello world Hello world Hello world',
            'picture' => $file,
            'experience' => 'Hello world Hello world Hello world',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertRedirect(route('admin.photographs.index'));
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_save_the_new_photograph_without_auth(): void
    {
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'Example',
            'user_id' => 2,
            'about' => 'Hello world Hello world Hello world',
            'picture' => $file,
            'experience' => 'Hello world Hello world Hello world',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertStatus(302);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_dont_save_the_new_photograph_error_in_experience(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'Example',
            'user_id' => 2,
            'about' => 'кек',
            'picture' => $file,
            'experience' => '',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertSessionHasErrors([
            'experience' => 'Поле experience обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_dont_save_the_new_photograph_error_in_about(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'Example',
            'user_id' => 2,
            'about' => '',
            'picture' => $file,
            'experience' => 'hello world hello world hello world',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertSessionHasErrors([
            'about' => 'Поле about обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_dont_save_the_new_photograph_error_in_name(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => '',
            'user_id' => 2,
            'about' => 'hello world hello world hello world',
            'picture' => $file,
            'experience' => 'hello world hello world hello world',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertSessionHasErrors([
            'name' => 'Поле Имя обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_dont_save_the_new_photograph_error_in_number(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'hello world',
            'user_id' => 2,
            'about' => 'hello world hello world hello world',
            'picture' => $file,
            'experience' => 'hello world hello world hello world',
            'number' => '',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertSessionHasErrors([
            'number' => 'Поле number обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_dont_save_the_new_photograph_error_in_email(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'hello world',
            'user_id' => 2,
            'about' => 'hello world hello world hello world',
            'picture' => $file,
            'experience' => 'hello world hello world hello world',
            'number' => '1234567',
            'email' => '',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertSessionHasErrors([
            'email' => 'Поле E-Mail адрес обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_dont_save_the_new_photograph_error_in_address(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'hello world',
            'user_id' => 2,
            'about' => 'hello world hello world hello world',
            'picture' => $file,
            'experience' => 'hello world hello world hello world',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => ''
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertSessionHasErrors([
            'address' => 'Поле Адрес обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_store_method_dont_save_the_new_photograph_without_auth(): void
    {
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'name' => 'Example',
            'user_id' => 2,
            'about' => 'кек',
            'picture' => $file,
            'experience' => '',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->post(route('admin.photographs.store'), $request);

        $response->assertStatus(302);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_show_method_displays_the_correct_photograph(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $photograph = Photograph::find(3);

        $response = $this->get(route('admin.photographs.show', $photograph));

        $response->assertOk();
        $response->assertViewIs('admin.photographs.show');
        $response->assertViewHas('photograph', $photograph);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_show_method_displays_the_correct_photograph_without_auth(): void
    {
        $photograph = Photograph::find(3);

        $response = $this->get(route('admin.photographs.show', $photograph));

        $response->assertStatus(302);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_edit_method(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $photograph = Photograph::find(2);

        $response = $this->get(route('admin.photographs.edit', $photograph));

        $response->assertOk();
        $response->assertViewIs('admin.photographs.edit');
        $response->assertViewHas('photograph', $photograph);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_edit_method_without_auth(): void
    {
        $photograph = Photograph::find(2);

        $response = $this->get(route('admin.photographs.edit', $photograph));

        $response->assertStatus(302);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_update_method_updates_the_photograph_information(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $photograph = Photograph::find(2);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $updateRequest = [
            'name' => 'Example',
            'user_id' => 2,
            'about' => 'Hello world Hello world Hello world',
            'picture' => $file,
            'experience' => 'Hello world Hello world Hello world',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->put(route('admin.photographs.update', $photograph), $updateRequest);
        $response->assertRedirect(route('admin.photographs.show', $photograph));
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_update_method_updates_the_photograph_information_without_auth(): void
    {
        $photograph = Photograph::find(2);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $updateRequest = [
            'name' => 'Example',
            'user_id' => 2,
            'about' => 'Hello world Hello world Hello world',
            'picture' => $file,
            'experience' => 'Hello world Hello world Hello world',
            'number' => '1234567',
            'email' => 'example@mail.ru',
            'address' => 'Hello str. 61a'
        ];

        $response = $this->put(route('admin.photographs.update', $photograph), $updateRequest);
        $response->assertStatus(302);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_destroy_method(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $photograph = Photograph::find(2);

        $response = $this->delete(route('admin.photographs.destroy', $photograph));

        $response->assertRedirect(route('admin.photographs.index'));
        $this->assertDatabaseMissing('photographs', ['id' => $photograph->id]);
    }

    /**
     * @group AdminPhotographs
     * @return void
     */
    public function test_destroy_method_without_auth(): void
    {
        $photograph = Photograph::find(2);

        $response = $this->delete(route('admin.photographs.destroy', $photograph));

        $response->assertStatus(302);
    }
}
