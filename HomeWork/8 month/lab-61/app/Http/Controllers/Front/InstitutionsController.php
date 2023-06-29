<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use Illuminate\View\View;

class InstitutionsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $institutions = Institution::paginate(5);
        return view('front.index', compact('institutions'));
    }

    /**
     * @param Institution $institution
     * @return View
     */
    public function show(Institution $institution): View
    {
        return view('front.show', compact('institution'));
    }
}
