<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        return [
            'quantity' => ['required', 'integer'],
            // 'price' => ['required', 'integer'],
            // 'total_price' => ['required', 'integer'],
            'client_id' => ['required', 'integer', 'exists:clients,id'],
            'product_id' => ['required', 'integer', 'exists:products,id'],
            
        ];
    }
}
