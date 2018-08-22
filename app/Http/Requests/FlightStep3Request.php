<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightStep3Request extends FormRequest
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
            'name' => 'required|max:100',
            'phone' => 'required|max:30',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Укажите имя',
            'phone.required' => 'Укажите номер телефона',
        ];
    }
}
