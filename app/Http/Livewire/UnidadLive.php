<?php

namespace App\Http\Livewire;

use App\Models\Unidad;
use Livewire\Component;
use Exception;

class UnidadLive extends Component
{
    public $departamento,$busqueda;
    public $modal=false;

    public $NombreUnidad,$NombreUnidadAntiguo;

    protected $rules = [
        'NombreUnidad' => 'required',
    ];


    public function render()
    {
        $unidad=Unidad::where('id_departamento',$this->departamento)->where('NombreUnidad','like','%'.$this->busqueda.'%')->get();
        return view('livewire.unidad-live',compact('unidad'));
    }
    public function CerrarModal(){
        $this->modal=false;
        $this->NombreUnidad='';
    }
    public function MostrarModal(){
        $this->modal=true;
    }

    public function Guardar(){
        $this->validate();
        Unidad::updateOrCreate(['NombreUnidad'=>$this->NombreUnidadAntiguo],
        [
            'NombreUnidad'=> strtoupper($this->NombreUnidad),
            'id_departamento'=>$this->departamento,
        ]);
        $this->CerrarModal();
    }
    public function MostrarModalActualizar($NombreUnidad,$NombreUnidadAntiguo){
        $unidad=Unidad::where('NombreUnidad',$NombreUnidad)->first();
        $this->NombreUnidad=$unidad->NombreUnidad;
        $this->NombreUnidadAntiguo=$NombreUnidadAntiguo;
        $this->MostrarModal();
    }
    public function EliminarUsuario($NombreUnidad){
        try{
            Unidad::where('NombreUnidad',$NombreUnidad)->delete();
        }
        catch (Exception $e){
            session()->flash('message', 'No puedes hacer debido a que ya tienes registros en esta unidad');
        }
    }
    public function falso(){
    }
}
