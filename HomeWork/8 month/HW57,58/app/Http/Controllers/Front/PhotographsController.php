<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Photograph;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PhotographsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $photographs = Photograph::all();
        $company = Company::find(1);

        return view('front.photograph.index', compact('photographs', 'company'));
    }

    /**
     * @param Photograph $photograph
     * @return View
     */
    public function show(Photograph $photograph): View
    {
        $best = DB::table('works')
            ->where('photograph_id', $photograph->id)
            ->orderBy('rating', 'desc')
            ->take(4)
            ->get();
        return view('front.photograph.show', compact('photograph', 'best'));
    }

    /**
     * @return View
     */
    public function about(): View
    {
        $company = Company::find(1);
        return view('front.photograph.about', compact('company'));
    }
}
