<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|min:5|max:250',
            'description' => 'min:50|max:2500',
            'price' => 'required|numeric',
            'picture' => 'image',
            'genre' => 'required',
            'author_id' => 'required|numeric|exists:authors,id'
        ];
    }
}
