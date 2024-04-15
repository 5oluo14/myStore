<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd();
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'salary' => ['required', 'integer'],
            'work_hours' => ['required', 'integer'],
            'password' => ['confirmed', 'min:6', Rule::requiredIf(function () {
                return request()->route()->methods == 'post';
            })],

        ];
    }
}
