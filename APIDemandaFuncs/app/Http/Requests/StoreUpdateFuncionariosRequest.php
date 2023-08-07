<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFuncionariosRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => 'required|min:3|max:255',
            'lastName' => 'required|min:3|max:255',
            'email' => 'required|unique:funcionarios|min:3|max:255',
            'phone' => 'nullable|max:11',
            'department_id' => 'required|min:1|max:11',
        ];
    }
}
