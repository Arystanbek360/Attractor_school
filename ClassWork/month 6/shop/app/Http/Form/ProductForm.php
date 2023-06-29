<?php

namespace App\Http\Form;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductForm extends Form
{
    /**
     * @param Request $request
     * @return mixed
     */
    protected function handle(Request $request)
    {
        return Product::create($request->all());
    }
}
