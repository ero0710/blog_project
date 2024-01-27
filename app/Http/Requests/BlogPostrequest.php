<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostrequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'message'=>'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'message.required' => "Текст блога обезательно заполнению",
            'message.min'      => "Длина текста блога должен быть 5 символов"
        ];
    }
}
