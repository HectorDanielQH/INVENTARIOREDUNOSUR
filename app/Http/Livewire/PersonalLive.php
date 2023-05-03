<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Personal;
use App\Models\Unidad;

class PersonalLive extends Component
{ 
    public $departamento,$busqueda;
    public $modal=false;
    public $cicomplemento;
    public $ci,$nombre,$apellido,$celular,$id_unidad;

    protected $rules = [
        'ci' => 'required|min:6',
        'nombre' => 'required|min:3',
        'apellido' => 'required|min:3',
        'celular' => 'required|min:8',
        'id_unidad'=> 'required'
    ];

    public function render()
    {
        $personal=Personal::where('departamento',$this->departamento)->where('ci','like','%'.$this->busqueda.'%')->get();
        $unidades=Unidad::where('id_departamento',$this->departamento)->get();
        return view('livewire.personal-live',compact('personal','unidades'));
    }
    public function CerrarModal(){
        $this->modal=false;
        $this->ci='';
        $this->cicomplemento='';
        $this->nombre='';
        $this->apellido='';
        $this->celular='';
        $this->id_unidad='';
    }
    public function MostrarModal(){
        $this->modal=true;
    }

    public function Guardar(){
        $this->validate();
        if($this->cicomplemento)
            $this->ci=$this->ci.'-'.$this->cicomplemento;
        Personal::updateOrCreate(['ci'=>$this->ci],
        [
            'ci'=>strtoupper($this->ci),
            'nombre'=>strtoupper($this->nombre),
            'apellido'=>strtoupper($this->apellido),
            'celular'=>strtoupper($this->celular),
            'departamento'=>strtoupper($this->departamento),
            'unidad'=>strtoupper($this->id_unidad),
        ]);
        $this->CerrarModal();
    }
    public function MostrarModalActualizar($cii){
        $personal=Personal::where('ci',$cii)->first();
        $this->ci=$personal->ci;
        if(strpos($this->ci, "-"))
        {
            $reverso=strrev($this->ci);
            $reversocom=substr($reverso,0,2);
            $reversoci=substr($reverso,3,strlen($reverso)-3);
            $this->cicomplemento = strrev($reversocom);
            $this->ci=strrev($reversoci);
        }
        else
            $this->cicomplemento='';
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
