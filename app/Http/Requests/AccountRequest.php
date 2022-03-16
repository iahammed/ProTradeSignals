<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'city' => 'required',
            'region' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'required',
            'remember' => 'required',
        ];
    }
}
