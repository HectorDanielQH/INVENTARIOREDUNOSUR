<?php

namespace App\Http\Livewire;

use App\Models\Sucursal;
use Livewire\Component;
use Exception;

class Sucursales extends Component
{
    public $modal = false;
    public $departamento;
    public function render()
    {
        $departamentos_values = ['POTOSI','CHUQUISACA','TARIJA','ORURO'];
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
        try{
            $valor=Sucursal::find($id);
            $valor->delete();
            $this->LimpiarDatos();
        }
        catch (Exception $e){
            session()->flash('message', 'No puedes hacer debido a que ya tienes registros en tu base de datos');
        }
    }
    public function redireccion($id){
        return redirect()->route('pagadmin.index',compact('id'));
    }
    public function falso(){
    }
}
