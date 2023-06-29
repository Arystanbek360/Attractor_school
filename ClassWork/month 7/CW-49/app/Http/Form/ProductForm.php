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
        $data = $request->all();
        $file = $request->file('picture');

        if ($file) {
            $data['picture'] = $file->store('pictures', 'public');
        }

        return Product::create($data);
    }
}
