<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'unique:products,name,' . $this?->route('product')?->id],
            'description' => ['required', 'string', 'min:10', 'max:255'],
            'selling_price' => ['required', 'numeric', 'gt:buying_price'],
            'buying_price' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
            'min_quantity' => ['required', 'integer','lt:quantity'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'vendor_id' => ['required', 'integer', 'exists:vendors,id'],
        ];
    }
}
