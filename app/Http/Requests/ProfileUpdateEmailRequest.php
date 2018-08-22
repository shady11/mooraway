<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProfileUpdateEmailRequest
 * @package App\Http\Requests
 */
class ProfileUpdateEmailRequest extends FormRequest
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
        $user = Auth::user();

        return [
            'email' => 'required|email|unique:users,email,' . $user->id,
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'email.unique' => 'Пользователь с такой почтой уже существует',
            'email.required' => 'Укажите почту',
            'email.email' => 'Укажите почту',
        ];
    }
}
