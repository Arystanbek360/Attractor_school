<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminPagesController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }
}
