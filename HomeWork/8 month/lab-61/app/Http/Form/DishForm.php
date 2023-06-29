<?php

namespace App\Http\Form;


use App\Models\Dish;
use App\Models\Item;
use Illuminate\Http\Request;

class DishForm extends Form
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

        return Dish::create($data);
    }
}
