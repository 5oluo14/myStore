<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProfileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:100',
            'email' => 'nullable|email|string|max:100',
            'old_password' => 'required_if:new_password,!null|max:100',
            'new_password' => 'nullable|string|confirmed|max:100',
        ];
    }
}
