<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * @return View
     */
    public function about(): view
    {
        return view('pages.about');
    }

    /**
     * @return View
     */
    public function contacts(): view
    {
        return view('pages.contacts');
    }

}
