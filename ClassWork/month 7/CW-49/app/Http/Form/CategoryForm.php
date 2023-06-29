<?php

namespace App\Http\Form;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryForm extends Form
{

    /**
     * @param Request $request
     * @return mixed
     */
    protected function handle(Request $request)
    {
        return Category::create($request->all());
    }
}
