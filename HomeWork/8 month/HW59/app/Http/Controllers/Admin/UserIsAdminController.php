<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class UserIsAdminController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $users = User::paginate(10);
        return view('admin.index', ['users' => $users]);
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function switchActive(User $user): RedirectResponse
    {
        $user->active = true;
        $user->save();

        $users = User::paginate(10);

        return redirect(route('admin.index', ['users' => $users]))
            ->with('status', "Пользователь {$user->name} успешно активирован!");
    }
}
