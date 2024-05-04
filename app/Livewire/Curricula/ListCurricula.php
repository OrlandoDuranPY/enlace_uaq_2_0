<?php

namespace App\Livewire\Curricula;

use Livewire\Attributes\Url;
use App\Models\Curriculum;
use Livewire\Component;

class ListCurricula extends Component
{
    #[Url]
    public $search = '';
    #[Url]
    public $type = '';

    public function render()
    {
        $curricula = Curriculum::query()
            ->when($this->search, fn($query) => $query->search($this->search))
            ->when($this->type, fn($query, $type) => $query->where('type', $type))
            ->get();

        return view('livewire.curricula.list-curricula', ['curricula' => $curricula]);
    }
}
