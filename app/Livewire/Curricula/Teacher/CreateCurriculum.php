<?php

namespace App\Livewire\Curricula\Teacher;

use Livewire\Component;
use App\Models\Activity;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Curriculum\TeacherRequest;

class CreateCurriculum extends Component
{
    // Contadores
    public $studyLevelCounter = 1;
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
    public $study_level = [];
    public $main_degree;
    public $academic_achievement = [];

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
        return (new TeacherRequest())->rules();
    }


    /* ========================================
    Montar las funciones
    ========================================= */
    public function mount()
    {
        $this->addInput('study_level');
        $this->addInput('academic_achievement');
        $this->addInput('experience');
        $this->addInput('project');
    }


    /* ========================================
    Guardar Curriculum de Docente
    ========================================= */
    public function storeTeacherCurriculum()
    {
        // dd('Curriculum docente');
        // Asignar el "type" al curriculum
        $this->type = 'teacher';

        // Validar los datos utilizando el FormRequest
        $validated = $this->validate();

        // Guardar el curriculum en la base de datos
        // dd($validated);
        $curriculum = Curriculum::create([
            'name' => $validated['name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'about_me' => $validated['about_me'],
            'study_level' => $validated['study_level'],
            'main_degree' => $validated['main_degree'],
            'academic_achievement' => json_encode($validated['academic_achievement']),
            'experience' => json_encode($validated['experience']),
            'project' => json_encode($validated['project']),
            'reference' => json_encode($validated['reference']),
            'type' => $validated['type'],
        ]);

        if ($curriculum) {
            // Crear el registro en la tabla actividades
            // $user_id = Auth::id();
            // Activity::create([
            //     'name' => 'Curriculum de docente creado: '. $validated['name']. ' '. $validated['last_name'],
            //     'user_id' => $user_id,
            // ]);

            // Emitir un toast de exito
            $message = __('messages.success.record_created');
            $this->dispatch('record_created', $message);

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

        // Agregar Nivel de Estudio
        if ($value === 'study_level') {
            if (count($this->study_level) < 5) {
                $this->study_level[] = '';
                $this->studyLevelCounter++;
            }
        }

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
        // Remover Nivel de Estudio
        if ($value === 'study_level') {
            if (count($this->study_level) > 1) {
                unset($this->study_level[$key]);
                $this->study_level = array_values($this->study_level);
                $this->studyLevelCounter--;
            }
        }
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
        elseif ($value === 'project') {
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
        return view('livewire.curricula.teacher.create-curriculum');
    }
}
