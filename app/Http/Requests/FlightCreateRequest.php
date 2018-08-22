<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class FlightCreateRequest
 * @package App\Http\Requests
 */
class FlightCreateRequest extends FormRequest
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
            'timeAt' => 'required',
        ];

        return $rules;
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'fromId.required' => 'Укажите из какого города Вы вылетаете',
            'toId.required' => 'Укажите в какой город Вы прилетаете',
            'flightAt.required' => 'Укажите дату вылета',
            'timeAt.required' => 'Укажите время вылета',
        ];
    }
}
