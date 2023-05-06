<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAssetRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'type' => ['required', Rule::in(['stock', 'bond'])],
                'name' => ['required'],
                'exchange_id' => ['required'],
            ];
        } else {
            return [
                'type' => ['sometimes', 'required', Rule::in(['stock', 'bond'])],
                'name' => ['sometimes', 'required'],
                'exchange_id' => ['sometimes', 'required'],
            ];
        }


    }

    protected function prepareForValidation()
    {
        $this->merge([
            'exchange_id' => $this->exchangeId
        ]);
    }
}
