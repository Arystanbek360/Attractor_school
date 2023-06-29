<?php

namespace App\Http\Controllers;

use App\Http\Form\UserForm;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function index(): view
    {
        $users = User::select('id', 'first_name', 'last_name', 'email', 'url', 'picture')->get();
        return view('users.index', compact('users'));
    }

    /**
     * @return View
     */
    public function create(): view
    {
        return view('users.form');
    }

    /**
     * @param UserRequest $request
     * @return RedirectResponse
     */
    public function store(UserRequest $request): RedirectResponse
    {
        $user = UserForm::execute($request);
        return redirect()->route('show', $user)->with('success', 'Пользователь создан.');
    }

    /**
     * @param User $user
     * @return View
     */
    public function show(User $user): view
    {
        return view('users.show', compact('user'));
    }

    /**
     * @param User $user
     * @return View
     */
    public function edit(User $user): view
    {
        return view('users.form', compact('user'));
    }

    /**
     * @param UserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $user->update($data);
        return redirect()->route('show', $user)->with('success', 'Пользователь обновлен.');
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('index')->with('success', 'Пользователь удален.');
    }
}
