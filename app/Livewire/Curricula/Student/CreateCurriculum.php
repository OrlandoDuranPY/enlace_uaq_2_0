<?php

namespace App\Livewire\Curricula\Student;

use Livewire\Component;
use App\Models\Curriculum;
use App\Models\StudyProgram;
use App\Http\Requests\Curriculum\StudentRequest;

class CreateCurriculum extends Component
{
    /* ========================================
    Propiedades del formulario
    ========================================= */
    // Datos Personales
    public $name;
    public $last_name;
    public $email;
    public $phone;
    public $about_me;
    // Datos academicos
    public $study_program_id;
    public $semester;
    public $academic_achievement;
    public $academic_program;

    // Experiencia
    public $experience;
    public $project;

    // Referencias
    public $reference = [
        'name' => '',
        'email' => '',
        'phone' => ''
    ];

    // Tipo de curriculum
    public $type;

    /* ========================================
    Reglas de validacion desde el FormRequest
    ========================================= */
    protected function rules(): array
    {
        return (new StudentRequest())->rules();
    }

    /* ========================================
    Guardar Curriculum de Estudiante
    ========================================= */
    public function storeStudentCurriculum()
    {
        // dd('Curriculum estudiante');
        // Asignar el "type" al curriculum
        if ($this->semester == 11) {
            $this->type = 'graduate';
        } else {
            $this->type = 'student';
        }

        // Validar los datos utilizando el FormRequest
        $validated = $this->validate();

        // Guardar el curriculum en la base de datos
        $curriculum = Curriculum::create($validated);

        if ($curriculum) {
            // Crear el registro en la tabla actividades

            // Emitir un toast de exito

            // Resetear valores
            $this->reset();
        }
    }

    public function render()
    {
        $study_programs_undergraduate = StudyProgram::where('type', 'undergraduate')->get();
        // dd($study_programs_undergraduate);
        $study_programs_graduate = StudyProgram::where('type', 'graduate')->get();
        // dd($study_programs_graduate);
        return view('livewire.curricula.student.create-curriculum', [
            'study_programs_undergraduate' => $study_programs_undergraduate,
            'study_programs_graduate' => $study_programs_graduate,
        ]);
    }
}
