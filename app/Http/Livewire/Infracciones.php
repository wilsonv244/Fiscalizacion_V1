<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Infraccion; //carpeta modelo
// use App\Models\Infraccion as ModelsInfracciones;

class Infracciones extends Component
{
    public $searchTerm;
    public $id_acta, $infracciones,  $estado, $fecha, $nombreEstablecimiento, $direccion, $actaComiso, $informeF, $fechaFisc,$observacion;
    public $modal = false;
    // 'id','estado','fecha','nombreEstablecimiento',
    //             'direccion', 'actaComiso','informeF','fechaFisc','observacion
    public function render()
    {
        // $this -> infracciones = infraccion::all();
        // Infraccion::all();
        $searchTerm = '%'.$this-> searchTerm . '%';
        $this->infracciones = infraccion::where('estado', 'LIKE', $searchTerm) ->orderBy('id','DESC')->get();
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
        $this ->id_acta='';
        $this->estado='';
        $this->fecha = '';
        $this->nombreEstablecimiento = '';
        $this->direccion = '';
        $this->actaComiso = '';
        $this->informeF= '';
        $this->fechaFisc= '';
        $this->observacion= '';
    }
    public function editar($id){
        $infraccion = Infraccion::findOrFail($id);
        $this->id_acta = $id;
        $this->estado = $infraccion->estado;
        $this->fecha = $infraccion->fecha;
        $this->nombreEstablecimiento = $infraccion->nombreEstablecimiento;
        $this->direccion = $infraccion->direccion;
        $this->actaComiso = $infraccion->actaComiso;
        $this->informeF = $infraccion->informeF;
        $this->fechaFisc = $infraccion->fechaFisc;
        $this->observacion = $infraccion->observacion;
        $this -> abrirModal();
    }
    public function borrar($id){
        Infraccion::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');

    }
    public function guardar(){
        Infraccion::updateOrCreate(['id'=>$this->id_acta],
            [
                'estado' => $this -> estado,
                'fecha' => $this -> fecha,
                'nombreEstablecimiento' => $this -> nombreEstablecimiento,
                'direccion' => $this -> direccion,
                'actaComiso' => $this -> actaComiso,
                'informeF' => $this -> informeF,
                'fechaFisc' => $this -> fechaFisc,
                'observacion' => $this -> observacion
            ]);
        session()->flash('message',
            $this->id_acta ? 'Actualizacion exitosa' : 'Alta Exitosa');
        $this->cerrarModal();
        $this->limpiarCampos();
    }

}
