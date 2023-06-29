<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\Photograph;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class FrontPhotographsControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @group FrontPhotographs
     * @return void
     */
    public function test_index_method_displays_photographs(): void
    {
        $photographs = Photograph::all();

        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertViewIs('front.photograph.index');
        $response->assertViewHasAll([
            'photographs' => $photographs
        ]);
    }

    /**
     * @group FrontPhotographs
     * @return void
     */
    public function test_show_method_displays_photographs(): void
    {
        $photograph = Photograph::find(2);

        $response = $this->get(route('photographs.show', $photograph));

        $response->assertOk();
        $response->assertViewIs('front.photograph.show');
        $response->assertViewHas([
            'photograph' => $photograph
        ]);
    }

    /**
     * @group FrontPhotographs
     * @return void
     */
    public function test_show_method_displays_photograph_and_best_works(): void
    {
        $photograph = Photograph::find(2);
        $best = DB::table('works')
            ->where('photograph_id', $photograph->id)
            ->orderBy('rating', 'desc')
            ->take(4)
            ->get();

        $response = $this->get(route('photographs.show', $photograph));

        $response->assertOk();
        $response->assertViewIs('front.photograph.show');
        $response->assertViewHasAll([
            'photograph' => $photograph,
            'best' => $best
        ]);
    }

    /**
     * @group FrontPhotographs
     * @return void
     */
    public function test_about_method_displays_company_info(): void
    {
        $company = Company::first();

        $response = $this->get(route('front.about'));

        $response->assertOk();
        $response->assertViewIs('front.photograph.about');
        $response->assertViewHas('company', $company);
    }
}
