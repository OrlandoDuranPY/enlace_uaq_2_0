<?php

namespace App\Livewire\Curricula\Teacher;

use Livewire\Component;
use App\Models\Curriculum;
use App\Http\Requests\Curriculum\TeacherRequest;

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
    public $study_level;
    public $principal_degree;
    public $academic_achievement;

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
        return (new TeacherRequest())->rules();
    }

    /* ========================================
    Guardar Curriculum de Docente
    ========================================= */
    public function storeTeacherCurriculum()
    {
        dd('Curriculum docente');
        // Asignar el "type" al curriculum
        $this->type = 'teacher';

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
        return view('livewire.curricula.teacher.create-curriculum');
    }
}
