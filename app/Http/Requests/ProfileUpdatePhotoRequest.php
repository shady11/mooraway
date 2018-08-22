<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ProfileUpdatePhotoRequest
 * @package App\Http\Requests
 */
class ProfileUpdatePhotoRequest extends FormRequest
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
            'photo' => 'image',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'phone.image' => 'Выберите фото',
        ];
    }
}
