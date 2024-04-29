<?php

namespace App\Livewire\Vacancies;

use App\Models\Vacancy;
use Livewire\Component;
use App\Http\Requests\Vacancy\VacancyRequest;

class CreateVacancy extends Component
{
    /* ========================================
    Propiedades del formulario
    ========================================= */
    public $company_name;
    public $company_location;
    public $job_title;
    public $salary;
    public $schedule;
    public $description;
    public $observations;
    public $contact_phone;
    public $contact_email;

    /* ========================================
    Reglas de validacion desde el FormRequest
    ========================================= */
    protected function rules(): array
    {
        return (new VacancyRequest())->rules();
    }

    public function storeVacancy(){
        $valitated = $this->validate();
        // dd($valitated);

        // Guardar la vacante en la base de datos
        $vacancy = Vacancy::create($valitated);

        if($vacancy){
            // Crear el registro en la tabla actividades
            // $user_id = Auth::id();
            // Activity::create([
            //     'name' => 'Vacante creada: '. $validated['company_name']. ': '. $validated['job_title'],
            //     'user_id' => $user_id,
            // ]);

            // Emitir un toast de exito
            $message = __('messages.success.record_created');
            $this->dispatch('record_created', $message);

            // Limpiar los campos del formulario
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.vacancies.create-vacancy');
    }
}
