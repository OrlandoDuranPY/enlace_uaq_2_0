<?php

namespace App\Http\Requests\Vacancy;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'company_location' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'salary' => 'nullable|string|max:100',
            'schedule' => 'required|string|max:100',
            'description' => 'required|string|max:1500',
            'observations' => 'nullable|string|max:500',
            'contact_phone' => 'required|numeric|digits:10',
            'contact_email' => 'required|email|max:254',
        ];
    }
}
