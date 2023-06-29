<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Work;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdminWorksControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @group AdminWorks
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
     * @group AdminWorks
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
     * @group AdminWorks
     * @return void
     */
    public function test_show_method_in_Photograph_works_show_in_table(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $work = Work::find(1);

        $response = $this->get(route('admin.photographs.show', $work->photograph));

        $response->assertOk();
        $response->assertViewIs('admin.photographs.show');
        $response->assertSeeText($work->description);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_index_method_works_show_in_table_without_auth(): void
    {
        $work = Work::find(1);

        $response = $this->get(route('admin.photographs.show', $work->photograph));
        $response->assertStatus(302);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_create_method_work(): void
    {
        $user = User::find(5);
        Auth::login($user);

        $response = $this->get(route('admin.works.create'));

        $response->assertOk();
        $response->assertViewIs('admin.works.create');
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_create_method_work_without_auth(): void
    {
        $response = $this->get(route('admin.works.create'));

        $response->assertStatus(302);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_store_method_save_the_new_work(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'picture' => $file,
            'photograph_id' => 1,
            'description' => 'hello world hello world hello world hello world',
            'rating' => '1'
        ];

        $response = $this->post(route('admin.works.store'), $request);
        $response->assertStatus(302);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_store_method_save_the_new_work_without_auth(): void
    {
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'picture' => $file,
            'photograph_id' => 1,
            'description' => 'hello world hello world hello world hello world',
            'rating' => '1'
        ];

        $response = $this->post(route('admin.works.store'), $request);

        $response->assertStatus(302);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_store_method_dont_save_the_new_work(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'picture' => $file,
            'photograph_id' => 1,
            'description' => '',
            'rating' => '1'
        ];

        $response = $this->post(route('admin.works.store'), $request);

        $response->assertSessionHasErrors([
            'description' => 'Поле Описание обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_store_method_dont_save_the_new_work_error_in_picture(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'picture' => '',
            'photograph_id' => 1,
            'description' => 'hello world hello world hello world hello world',
            'rating' => '1'
        ];

        $response = $this->post(route('admin.works.store'), $request);

        $response->assertSessionHasErrors([
            'picture' => 'Поле picture обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_store_method_dont_save_the_new_work_error_in_rating(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $request = [
            'picture' => $file,
            'photograph_id' => 1,
            'description' => 'hello world hello world hello world hello world',
            'rating' => ''
        ];

        $response = $this->post(route('admin.works.store'), $request);

        $response->assertSessionHasErrors([
            'rating' => 'Поле rating обязательно для заполнения.',
        ]);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_show_method_displays_the_correct_work(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $work = Work::find(3);

        $response = $this->get(route('admin.works.show', $work));

        $response->assertOk();
        $response->assertViewIs('admin.works.show');
        $response->assertViewHas('work', $work);
        $response->assertSeeText($work->description);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_show_method_displays_the_correct_work_without_auth(): void
    {
        $work = Work::find(3);
        $response = $this->get(route('admin.works.show', $work));
        $response->assertStatus(302);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_edit_method(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $work = work::find(2);

        $response = $this->get(route('admin.works.edit', $work));

        $response->assertOk();
        $response->assertViewIs('admin.works.edit');
        $response->assertViewHas('work', $work);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_edit_method_without_auth(): void
    {
        $work = work::find(2);
        $response = $this->get(route('admin.works.edit', $work));
        $response->assertStatus(302);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_update_method_updates_the_work_information(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $work = Work::find(3);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $updateRequest = [
            'picture' => $file,
            'photograph_id' => 1,
            'description' => 'hello world hello world hello world hello world',
            'rating' => '1'
        ];

        $response = $this->put(route('admin.works.update', $work), $updateRequest);
        $response->assertRedirect(route('admin.works.show', $work));
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_update_method_updates_the_work_information_without_auth(): void
    {
        $work = work::find(2);
        $file = UploadedFile::fake()->image('test_image.jpg');
        $updateRequest = [
            'picture' => $file,
            'photograph_id' => 1,
            'description' => 'hello world hello world hello world hello world',
            'rating' => '1'
        ];

        $response = $this->put(route('admin.works.update', $work), $updateRequest);
        $response->assertStatus(302);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_destroy_method(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $work = work::find(2);
        $photograph = $work->photograph;

        $response = $this->delete(route('admin.works.destroy', $work));

        $response->assertRedirect(route('admin.photographs.show', compact('photograph')));
        $this->assertDatabaseMissing('works', ['id' => $work->id]);
    }

    /**
     * @group AdminWorks
     * @return void
     */
    public function test_destroy_method_without_auth(): void
    {
        $work = work::find(2);
        $response = $this->delete(route('admin.works.destroy', $work));
        $response->assertStatus(302);
    }
}
