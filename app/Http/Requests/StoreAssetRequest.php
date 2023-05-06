<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAssetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', Rule::in(['stock', 'bond'])],
            'name' => ['required'],
            'exchange_id' => ['required'],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'exchange_id' => $this->exchangeId
        ]);
    }
}
