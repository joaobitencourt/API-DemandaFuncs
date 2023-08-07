<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpadateTarefasRequests extends FormRequest
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
        $rules = [
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'assignee_id' => 'required|min:1|max:255',
            'due_date' => 'nullable|date',
        ];

        // if($this->method() === 'PATCH'){
        //     $rules['assignee_id'] = [
        //         'required',
        //         'min:1',
        //         'max:255',
        //         Rule::unique('funcionarios')->ignore($this->id),
        //     ];
        // }

        return $rules;

    } 
}
