<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View|RedirectResponse
    {
        if (auth_user()) {
            return redirect(route('notes.index'));
        }
        return view('index');
    }
}
