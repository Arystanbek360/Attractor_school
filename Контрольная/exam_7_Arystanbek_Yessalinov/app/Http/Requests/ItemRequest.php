<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'name' => 'required|min:5|max:40',
            'description' => 'required|max:2500',
            'picture' => 'image',
            'type_id' => 'required',
            'cabinet_id' => 'required|numeric|exists:cabinets,id'
        ];
    }
}
