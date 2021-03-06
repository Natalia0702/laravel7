<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorRequest extends FormRequest
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
            'name' => 'required | string',
            'email' => 'required | unique:users',
            'message' => 'required',
            'phone' => 'required',
            'doc' => 'required|max:500KB'
        ];
    }
    public function messageValidate()
    {
    }
}
