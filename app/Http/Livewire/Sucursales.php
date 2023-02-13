<?php

namespace App\Http\Livewire;

use App\Models\Sucursal;
use Livewire\Component;

class Sucursales extends Component
{
    public $modal = false;
    public $departamento;
    public function render()
    {
        $departamentos_values = ['POTOSI','SANTA CRUZ', 'COCHABAMBA','CHUQUISACA','TARIJA','BENI','PANDO','ORURO','LA PAZ'];
        $departamentos_values1=[];
        $valor=Sucursal::all();
        foreach ($valor as $key => $value) {
            $departamentos_values1[]=$value->Departamento;
        }
        $departamentos_values=array_diff($departamentos_values,$departamentos_values1);
        return view('livewire.sucursales',compact('valor','departamentos_values'));
    }
    public function showModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }
    public function LimpiarDatos(){
        $this->departamento='';
        $this->modal=false;
    }
    public function store()
    {
        //validar
        $this->validate([
            'departamento'=>'required|min:3|max:50',
        ]);
        //guardar
        Sucursal::create([
            'Departamento' => $this->departamento,
        ]);
        $this->LimpiarDatos();
    }
    public function destroy($id)
    {
        $valor=Sucursal::find($id);
        $valor->delete();
        $this->LimpiarDatos();
    }
    public function redireccion($id){
        return redirect()->route('pagadmin.index',compact('id'));
    }
}
