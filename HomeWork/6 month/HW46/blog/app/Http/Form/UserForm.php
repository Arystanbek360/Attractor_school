<?php

namespace App\Http\Form;


use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserForm extends Form
{
    /**
     * @param Request $request
     * @return mixed
     */
    protected function handle(Request $request)
    {
        return User::create($request->all());
    }
}
