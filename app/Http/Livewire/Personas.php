<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;


class Personas extends Component
{
    public $personas;

    public function render()
    {
        $this->personas = Persona::all();
        return view('livewire.personas');
    }
}
