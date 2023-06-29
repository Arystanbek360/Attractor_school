<?php

namespace App\Http\Controllers;

use App\Http\Form\UserForm;
use App\Http\Requests\SessionRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SessionController extends AuthController
{
    /**
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function create(Request $request): View|RedirectResponse
    {
        if ($request->session()->has('user_id')) {
            return redirect()->route('home')->with('error', 'You are already login!');
        }

        return view('sessions.create');
    }

    /**
     * @param SessionRequest $request
     * @return RedirectResponse
     */
    public function store(SessionRequest $request): RedirectResponse
    {
        $user = User::where('email', $request->get('email'))->firstOrFail();
        if ($this->checkAuth($user, $request->get('password'))) {
            $this->logIn($user);
            return redirect()->route('home')->with('success', 'You are register success!');
        }

        return back()->with('error', 'Incorrect email or password');
    }

    public function destroy(): RedirectResponse
    {
        $this->logOut();
        return redirect()->route('sessions.login')->with('success', 'You are logout success!');
    }
}
