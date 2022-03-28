<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            // 'user_photo'     => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            // 'user_name'    => 'required|min:5',
            // 'user_username'    => 'required|min:5',
            // 'user_email'    => 'required',
            // 'user_password'   => 'required|min:5',
            // 'user_telp'   => 'required|min:11',
            // 'user_alamat'   => 'nullable',
        ];
    }
}
