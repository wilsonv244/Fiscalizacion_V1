<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Infraccion; //carpeta modelo
// use App\Models\Infraccion as ModelsInfracciones;

class Infracciones extends Component
{
    public $infracciones,  $estado, $fecha, $nombreEstablecimiento, $direccion, $actaComiso, $informeF, $fechaFisc,$observaion;
    public $modal = false;
    // 'id','estado','fecha','nombreEstablecimiento',
    //             'direccion', 'actaComiso','informeF','fechaFisc','observacion
    public function render()
    {
        $this -> infracciones = infraccion::all();
        // Infraccion::all();
        return view('livewire.infracciones');
    }
    public function crear()
    {   
        $this->abrirModal();//creara una ventana modal
        $this->limpiarCampos();
    }
    public function abrirModal(){//crear la funcion abrirModal
        $this->modal = true;
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function limpiarCampos(){//crear la funcion abrirModal
        $this ->infracciones = '';
        // $this ->id='';
        $this->estado='';
        $this->fecha = '';
        $this->nombreEstablecimiento = '';
        $this->direccion = '';
        $this->actaComiso = '';
        $this->informeF= '';
        $this->fechaFisc= '';
        $this->observaion= '';
    }
}
