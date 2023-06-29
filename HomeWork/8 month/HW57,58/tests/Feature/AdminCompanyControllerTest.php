<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Photograph;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminCompanyControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @group AdminCompany
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
     * @group AdminCompany
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
     * @group AdminCompany
     * @return void
     */
    public function test_index_method_photographs_show_in_table(): void
    {
        $company = Company::first();
        $user = User::find(5);
        Auth::login($user);

        $response = $this->get(route('admin.company.index'));
        $response->assertOk();
        $response->assertViewHasAll([
            'company' => $company
        ]);
    }

    /**
     * @group AdminCompany
     * @return void
     */
    public function test_index_method_photographs_show_in_table_without_auth(): void
    {
        $company = Company::first();

        $response = $this->get(route('admin.company.index'));
        $response->assertStatus(302);
    }

    /**
     * @group AdminCompany
     * @return void
     */
    public function test_edit_method(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $company = Company::first();

        $response = $this->get(route('admin.company.edit', $company));

        $response->assertOk();
        $response->assertViewIs('admin.companies.edit');
        $response->assertViewHas('company', $company);
    }

    /**
     * @group AdminCompany
     * @return void
     */
    public function test_edit_method_without_auth(): void
    {
        $company = Company::first();

        $response = $this->get(route('admin.company.edit', $company));

        $response->assertStatus(302);
    }

    /**
     * @group AdminCompany
     * @return void
     */
    public function test_update_method_updates_the_photograph_information(): void
    {
        $user = User::find(5);
        Auth::login($user);
        $company = Company::first();
        $updateRequest = [
            'name' => 'New Company',
            'number' => '1234152125',
            'address' => 'Hello world str 51',
            'email' => 'example@example.com'
        ];

        $response = $this->put(route('admin.company.update', $company), $updateRequest);
        $response->assertRedirect(route('admin.company.index', compact('company')));
    }

    /**
     * @group AdminCompany
     * @return void
     */
    public function test_update_method_updates_the_photograph_information_without_auth(): void
    {
        $company = Company::first();
        $updateRequest = [
            'name' => 'New Company',
            'number' => '1234152125',
            'address' => 'Hello world str 51',
            'email' => 'example@example.com'
        ];

        $response = $this->put(route('admin.company.update', $company), $updateRequest);
        $response->assertStatus(302);
    }

}
