<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class FlightStep1Request
 * @package App\Http\Requests
 */
class FlightStep1Request extends FormRequest
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
        $rules = [
            'fromId' => 'required|integer',
            'toId' => 'required|integer',
            'flightAt' => 'required',
            'flightTimeAt' => 'required',
        ];

        if (!Auth::check()) {
            $rules['email'] = 'required|unique:users';
        }

        return $rules;
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.unique' => 'Пользователь с такой почтой уже существует',
            'email.required' => 'Укажите почту',
            'flightAt.required' => 'Укажите дату вылета',
            'flightTimeAt.required' => 'Укажите время вылета',
        ];
    }
}
