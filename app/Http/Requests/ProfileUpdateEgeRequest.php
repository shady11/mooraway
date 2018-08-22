<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProfileUpdateEgeRequest
 * @package App\Http\Requests
 */
class ProfileUpdateEgeRequest extends FormRequest
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
            'age' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'age.required' => 'Укажите возраст',
        ];
    }
}
