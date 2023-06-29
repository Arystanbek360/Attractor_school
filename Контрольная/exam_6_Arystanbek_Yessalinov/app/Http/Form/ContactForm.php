<?php

namespace App\Http\Form;


use App\Models\Contact;
use Illuminate\Http\Request;

class ContactForm extends Form
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
        return Contact::create($data);
    }
}
