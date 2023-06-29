<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotographsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'about' => 'required|string|min:15',
            'picture' => 'required|image',
            'experience' => 'required|string|min:15',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|string|between:5,30'
        ];
    }
}
