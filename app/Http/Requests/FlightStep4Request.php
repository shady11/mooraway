<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightStep4Request extends FormRequest
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
    public function rules()
    {
        return [
            'password' => 'required',
            'avatar' => 'image|required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'password.required' => 'Укажите пароль',
            'avatar.required' => 'Загрузите фотографию',
            'avatar.image' => 'Неверный формат файла, выберите картинку',
        ];
    }
}
