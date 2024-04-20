<?php

namespace App\Livewire\Curricula\Student;

use Livewire\Component;
use App\Models\Curriculum;
use App\Models\StudyProgram;
use App\Http\Requests\Curriculum\StudentRequest;

class CreateCurriculum extends Component
{
    // Contadores
    public $achievementCounter = 1;
    public $experienceCounter = 1;
    public $projectsCounter = 1;
    public $referenceCounter = 1;

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
    public $academic_achievement = [];
    public $academic_program;

    // Experiencia
    public $experience = [];
    public $project = [];

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
    Montar las funciones
    ========================================= */
    public function mount()
    {
        // $this->addInput('academic_achievement');
        $this->addInput('experience');
        // $this->addInput('project');
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


        $validated['academic_achievement'] = json_encode($validated['academic_achievement']);
        $validated['experience'] = json_encode($validated['experience']);
        $validated['project'] = json_encode($validated['project']);

        // Guardar el curriculum en la base de datos
        $curriculum = Curriculum::create($validated);

        if ($curriculum) {
            // Crear el registro en la tabla actividades

            // Emitir un toast de exito

            // Resetear valores
            $this->reset();
            $this->mount();
        }
    }

    /* ========================================
    Funcion para agregar inputs nuevos
    ========================================= */
    public function addInput($value)
    {
        // Agregar Logro Academico
        if ($value === 'academic_achievement') {
            if (count($this->academic_achievement) < 5) {
                $this->academic_achievement[] = '';
                $this->achievementCounter++;
            }
        }
        // Agregar Experiencia
        elseif ($value === 'experience') {
            if (count($this->experience) < 5) {
                $this->experience[] = '';
                $this->experienceCounter++;
            }
        }
        // Agregar Proyecto
        elseif ($value === 'project') {
            if (count($this->project) < 5) {
                $this->project[] = '';
                $this->projectsCounter++;
            }
        }
        // Agregar Referencia
        elseif ($value === 'reference') {
            if (count($this->reference) < 3) {
                $this->reference[] = [
                    'name' => '',
                    'email' => '',
                    'phone' => '',
                ];
            }
        }
    }


    /* ========================================
    Funcion para remover inputs agregados
    ========================================= */
    public function removeInput($value, $key)
    {
        // Remover Logro Academico
        if ($value === 'academic_achievement') {
            if (count($this->academic_achievement) > 1) {
                unset($this->academic_achievement[$key]);
                $this->academic_achievement = array_values($this->academic_achievement);
                $this->achievementCounter--;
            }
        }
        // Remover Experiencia
        elseif ($value === 'experience') {
            if (count($this->experience) > 1) {
                unset($this->experience[$key]);
                $this->experience = array_values($this->experience);
                $this->experienceCounter--;
            }
        }
        // Remover Proyecto
        elseif ($value === 'projects') {
            if (count($this->project) > 1) {
                unset($this->project[$key]);
                $this->project = array_values($this->project);
                $this->projectsCounter--;
            }
        }
        // Remover Referencia
        elseif ($value === 'reference') {
            if (count($this->reference) > 1) {
                unset($this->reference[$key]);
            }
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
