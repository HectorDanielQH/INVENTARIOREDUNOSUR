<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Personal;
use App\Models\Inventario;
use App\Models\Remision;
use App\Models\NumeroRemision;

class RemisionCrearLive extends Component
{
    public $busqueda,$idPersonal;
    public $departamento;
    public $numeroRemision;
    public $agregarremisionsi=true;
    public $bandera=true;
    
    public function render()
    {
        $personal = Personal::where('departamento',$this->departamento)
                            ->get();
        $inventarios = Inventario::where('id_departamento',$this->departamento)
                            ->where('codigo','like','%'.$this->busqueda.'%')
                            ->get();
        $remisiones=Remision::where('idUsuario',$this->idPersonal)
                                ->where('fechadevolucion',null)
                                ->get();
        return view('livewire.remision-crear-live',compact('personal','inventarios','remisiones'));
    }
    public function agregarRemisionessi(){
        $this->agregarremisionsi=false;
    }
    public function agregar($id){
        if ($this->bandera){
            $this->numeroRemision=NumeroRemision::select('numeroRemision')
                                                ->where('id_departamento',$this->departamento)->max('numeroRemision');
            if ($this->numeroRemision==null){
                $this->numeroRemision=1;
                NumeroRemision::create([
                    'numeroRemision'=>1,
                    'id_departamento'=>$this->departamento
                ]);
            }
            else{
                $this->numeroRemision=$this->numeroRemision+1;
                NumeroRemision::create([
                    'numeroRemision'=>$this->numeroRemision,
                    'id_departamento'=>$this->departamento
                ]);
            }
            $this->bandera=false;
        }
        Remision::create([
            'numRemision'=>$this->numeroRemision,
            'idUsuario'=>$this->idPersonal,
            'idInventario'=>$id,
            'departamento'=>$this->departamento,
            'cantidad'=>1,
            'detalledevolucion'=>null,
            'fechadevolucion'=>null
        ]);
    }

    public function eliminarRemision($id){
        Remision::find($id)->delete();
    }

    public function Guardardatosall(){
        return redirect()->route('remisionmaterial.create',['req'=>$this->departamento]);
    }
}
