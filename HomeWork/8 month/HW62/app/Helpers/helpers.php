<?php

function auth_user(): ?\App\Models\User
{
    return session()->has('user_id')
        ? \App\Models\User::find(session()->get('user_id'))
        : null;
}
