<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCreateContact extends FormRequest
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
            'fisrtName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'phone' => 'required|min:9',
            'email' => 'required|email',
            'address' => 'required|min:4',
            'avatar' => 'required|max:10240'
        ];
    }
}
