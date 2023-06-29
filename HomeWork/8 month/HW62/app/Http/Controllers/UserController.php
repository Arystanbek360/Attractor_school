<?php

namespace App\Http\Controllers;

use App\Http\Form\UserForm;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends AuthController
{
    /**
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function register(Request $request): View|RedirectResponse
    {
        if ($request->session()->has('user_id')) {
            return redirect()->route('home')->with('error', 'You are already registered!');
        }
        return view('users.register');
    }

    /**
     * @param RegisterRequest $request
     * @return RedirectResponse
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        /** @var User $user */
        $user = UserForm::execute($request);
        $this->logIn($user);

        return redirect()->route('notes.index')->with('success', 'You are register success!');
    }
}
