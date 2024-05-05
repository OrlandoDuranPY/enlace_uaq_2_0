<?php

namespace App\Livewire\Vacancies;

use Livewire\Attributes\Url;
use App\Models\Vacancy;
use Livewire\Component;

class ListVacancies extends Component
{
    #[Url]
    public $search = '';
    public $selectedCard;
    public $selectedVacancy;

    public function selectCard($cardId){
        if ($this->selectedCard == $cardId) {
            $this->selectedCard = null;
            $this->selectedVacancy = null;
        } else {
            $this->selectedCard = $cardId;
            $this->selectedVacancy = Vacancy::find($cardId);
        }
    }

    public function render()
    {
        $vacancies = Vacancy::query()
            ->when($this->search, fn ($query) => $query->search($this->search))
            ->get();
        return view('livewire.vacancies.list-vacancies', ['vacancies' => $vacancies]);
    }
}
