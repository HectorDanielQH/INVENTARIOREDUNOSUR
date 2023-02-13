<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Personal;
use App\Models\Unidad;

class PersonalLive extends Component
{
    public $departamento,$busqueda;
    public $modal=false;

    public $ci,$nombre,$apellido,$celular,$id_unidad;
    public function render()
    {
        $personal=Personal::where('departamento',$this->departamento)->where('ci','like','%'.$this->busqueda.'%')->get();
        $unidades=Unidad::where('id_departamento',$this->departamento)->get();
        return view('livewire.personal-live',compact('personal','unidades'));
    }
    public function CerrarModal(){
        $this->modal=false;
        $this->ci='';
        $this->nombre='';
        $this->apellido='';
        $this->celular='';
        $this->id_unidad='';
    }
    public function MostrarModal(){
        $this->modal=true;
    }

    public function Guardar(){
        Personal::updateOrCreate(['ci'=>$this->ci],
        [
            'ci'=>$this->ci,
            'nombre'=>$this->nombre,
            'apellido'=>$this->apellido,
            'celular'=>$this->celular,
            'departamento'=>$this->departamento,
            'unidad'=>$this->id_unidad,
        ]);
        $this->CerrarModal();
    }
    public function MostrarModalActualizar($cii){
        $personal=Personal::where('ci',$cii)->first();
        $this->ci=$personal->ci;
        $this->nombre=$personal->nombre;
        $this->apellido=$personal->apellido;
        $this->celular=$personal->celular;
        $this->id_unidad=$personal->unidad;
        $this->MostrarModal();
    }
    public function EliminarUsuario($ci){
        Personal::where('ci',$ci)->delete();
    }
}
