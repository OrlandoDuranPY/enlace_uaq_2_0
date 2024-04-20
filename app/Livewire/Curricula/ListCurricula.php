<?php

namespace App\Livewire\Curricula;

use App\Models\Curriculum;
use Livewire\Component;

class ListCurricula extends Component
{
    public function render()
    {
        $curricula = Curriculum::all();
        return view('livewire.curricula.list-curricula', ['curricula' => $curricula]);
    }
}
