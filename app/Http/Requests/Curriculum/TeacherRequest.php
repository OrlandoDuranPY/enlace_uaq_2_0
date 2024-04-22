<?php

namespace App\Http\Requests\Curriculum;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            /* ========================================
            Reglas de datos para estudiantes
            ========================================= */
            // Datos personales
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:254',
            'phone' => 'required|numeric|digits:10',
            'about_me' => 'required|string|max:500',
            // Datos academicos
            'study_level.0' => 'required|string|max:100',
            'study_level.*' => 'required|string|max:100',
            'main_degree' => 'required|string|max:255',
            'academic_achievement.0' => 'nullable|string|max:100',
            'academic_achievement.*' => 'nullable|string|max:100',
            // Datos experiencia
            'experience.0' => 'nullable|string|max:100',
            'experience.*' => 'nullable|string|max:100',
            'project.0' => 'nullable|string|max:100',
            'project.*' => 'nullable|string|max:100',
            // Referencias
            'reference.name' => 'required|string|max:255',
            'reference.email' => 'required|email|max:254',
            'reference.phone' => 'required|numeric|digits:10',
            // Tipo
            'type' => 'required|in:teacher',
        ];
    }
}
