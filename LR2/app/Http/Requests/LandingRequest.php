<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'min:5'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Будь ласка, вкажіть ім\'я.',
            'email.required' => 'Вкажіть ваш email.',
            'email.email' => 'Некоректний email.',
            'message.required' => 'Введіть повідомлення.',
            'message.min' => 'Повідомлення має бути довшим за 5 символів.',
        ];
    }
}
