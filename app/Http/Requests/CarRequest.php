<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        $rules = [
            'make' => $this->isMethod('post') ? 'required|string|max:255' : 'sometimes|required|string|max:255',
            'model' => $this->isMethod('post') ? 'required|string|max:255' : 'sometimes|required|string|max:255',
            'year' => $this->isMethod('post') ? 'required|integer|min:1886|max:' . (date('Y') + 1) : 'sometimes|required|integer|min:1886|max:' . (date('Y') + 1),
            'price' => $this->isMethod('post') ? 'required|numeric|min:0' : 'sometimes|required|numeric|min:0',
            'mileage' => $this->isMethod('post') ? 'required|integer|min:0' : 'sometimes|required|integer|min:0',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|in:available,sold',
        ];

        return $rules;
    }
}
