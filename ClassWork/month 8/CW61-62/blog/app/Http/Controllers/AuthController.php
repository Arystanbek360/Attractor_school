<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @param User $user
     * @param string $password
     * @return bool
     */
    protected function checkAuth(User $user, string $password): bool
    {
        return Hash::check($password, $user->password);
    }

    /**
     * @param User $user
     * @return void
     */
    protected function logIn(User $user): void
    {
        session()->put('user_id', $user->id);
    }

    /**
     * @return void
     */
    protected function logOut(): void
    {
        session()->remove('user_id');
        session()->regenerate();
    }
}
