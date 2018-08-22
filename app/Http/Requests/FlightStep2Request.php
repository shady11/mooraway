<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class FlightStep2Request
 * @package App\Http\Requests
 */
class FlightStep2Request extends FormRequest
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
            'type' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'type.required' => 'Выберите тип профиля',
        ];
    }
}
