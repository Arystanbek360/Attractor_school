<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class AdminPagesController extends Controller
{
    /**
     * @param User $user
     * @return View
     */
    public function index(User $user): View
    {
        $roles = $user->roles;
        foreach ($roles as $role) {
            if ($role->name == 'Админ') {
                return view('admin.dashboard');
            }
        }
        abort(
            403,
            'Сюда попадет только админ,ну или те у кого есть доступ к базе чтобы в ссылку просто закинуть id и проникнуть)'
        );
    }
}
