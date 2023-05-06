<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDealRequest extends FormRequest
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
            'portfolio_id' => ['required'],
            'asset_id' => ['required'],
            'amount' => ['required', 'number'],
            'price' => ['required', 'decimal'],
            'date' => ['required', 'date']
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'asset_id' => $this->assetId,
            'portfolio_id' => $this->portfolioId,
        ]);
    }
}
