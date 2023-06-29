<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:70',
            'description' => '',
            'picture' => 'image',
            'type_id' => 'required|integer',
            'price' => 'required|integer',
            'institution_id' => 'required|integer',
            'kitchen_id' => 'required|integer',
        ];
    }
}
