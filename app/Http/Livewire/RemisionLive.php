<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Personal;
use App\Models\Remision;
use App\Models\Inventario;
use App\Models\NumeroRemision;

class RemisionLive extends Component
{
    public $departamento,$busqueda,$personalPrestamo;
    public $personalbusquedaregistro;
    public $fechadesde,$fechahasta;

    public function render()
    {
        if($this->fechadesde && $this->fechahasta){
            $personal=Personal::where('departamento',$this->departamento)
                                ->get();
            $remision=Remision::selectRaw("idUsuario,numRemision,fechadevolucion,date(created_at) as 'fecha'")
                                ->where('departamento',$this->departamento)
                                ->where('idUsuario',$this->personalPrestamo)
                                ->whereBetween('created_at',[$this->fechadesde,$this->fechahasta])
                                ->groupBy('idUsuario','numRemision','fechadevolucion','fecha')
                                ->get();
            return view('livewire.remision-live',compact('personal','remision'));
        }else{
            $personal=Personal::where('departamento',$this->departamento)
                                ->get();
            $remision=Remision::select('idUsuario','numRemision','fechadevolucion')
                                ->where('departamento',$this->departamento)
                                ->where('idUsuario',$this->personalPrestamo)
                                ->groupBy('idUsuario','numRemision','fechadevolucion')
                                ->get();
            return view('livewire.remision-live',compact('personal','remision'));
        }
    }
}
