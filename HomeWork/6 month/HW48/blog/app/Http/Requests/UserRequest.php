<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'first_name' => 'required|string|max:128',
            'last_name' => 'required|string|max:128',
            'email' => 'required|email',
            'password' => ['required', 'string', 'min:6', 'max:128', 'regex:/^(?=.*[a-zA-Zа-яА-Я])(?=.*\d).+$/'],
            'description' => 'nullable|string|max:2048|regex:/^[^<>\&]*$/u',
            'gender' => 'required',
            'city' => 'required',
            'active' => 'required',
            'url' => 'nullable|url',
            'born' => 'required|date',
            'picture' => 'image'
        ];
    }
}
