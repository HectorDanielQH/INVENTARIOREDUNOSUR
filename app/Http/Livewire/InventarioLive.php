<?php

namespace App\Http\Livewire;

use App\Models\Activos;
use App\Models\Inventario;
use App\Models\Personal;
use App\Models\Unidad;
use Livewire\Component;
use Exception;

class InventarioLive extends Component
{
    public $departamento,$busqueda;
    public $modal=false;
    public $cantidadProducto,$codigoProducto,$id_unidad,$serieProducto,$estadoProducto,$precioProducto,$descripcionProducto,$activoProducto,$idProducto,$anioCompraProducto;
    //-----------------------------------------------
    //--------------------------------------------
    public function render()
    {
        $unidades=Unidad::where('id_departamento',$this->departamento)->get();
        $activos=Activos::where('id_departamento',$this->departamento)->get();
        if($this->id_unidad == null){
            $inventarios=Inventario::where('id_departamento',$this->departamento)->get();
        }
        else{
            $inventarios=Inventario::where('id_departamento',$this->departamento)
            ->where('id_unidad',$this->id_unidad)
            ->get();
        }
        return view('livewire.inventario-live',compact('unidades','activos','inventarios')); 
    }
    public function CerrarModal(){
        $this->modal=false;
        $this->cantidadProducto=null;
        $this->codigoProducto=null;
        $this->descripcionProducto=null;
        $this->serieProducto=null;
        $this->id_unidad=null;
        $this->serieProducto=null;
        $this->estadoProducto=null;
        $this->precioProducto=null;
        $this->idProducto=null;
        $this->anioCompraProducto=null;
    }
    public function MostrarModal(){
        $this->modal=true;
    }


    public function Guardar(){
        $this->validate([
            'cantidadProducto'=>'required|min:1',
            'codigoProducto' => 'required|min:1|max:20|unique:inventarios,codigo,NULL,id,id_departamento,'. $this->departamento,
            'descripcionProducto'=>'required|min:5',
            'activoProducto'=>'required',
            'id_unidad'=>'required',
            'serieProducto'=>'required',
            'estadoProducto'=>'required',
            'precioProducto'=>'required',
            'anioCompraProducto'=>'required'
        ]);
        Inventario::updateOrCreate(['id'=>$this->idProducto],
        [
            'cantidad'=>$this->cantidadProducto,
            'codigo'=>strtoupper($this->codigoProducto),
            'detalle'=>strtoupper($this->descripcionProducto),
            'id_activo'=>$this->activoProducto,
            'serie'=>strtoupper($this->serieProducto),
            'estado'=>$this->estadoProducto,
            'precio'=>$this->precioProducto,
            'id_unidad'=>$this->id_unidad,
            'id_departamento'=>$this->departamento,
            'fecha_compra'=>$this->anioCompraProducto,
        ]);
        $this->CerrarModal();
    }
    public function MostrarModalActualizar($id){
        $this->idProducto=$id;
        //-----------------------------------------------
        $inventario=Inventario::find($id);
        $this->cantidadProducto=$inventario->cantidad;
        $this->codigoProducto=$inventario->codigo;
        $this->descripcionProducto=$inventario->detalle;
        $this->activoProducto=$inventario->id_activo;
        $this->serieProducto=$inventario->serie;
        $this->estadoProducto=$inventario->estado;
        $this->precioProducto=$inventario->precio;
        $this->id_unidad=$inventario->id_unidad;
        $this->departamento=$inventario->id_departamento;
        $this->anioCompraProducto=$inventario->fecha_compra;
        $this->MostrarModal();
    }
    public function EliminarInventario($id){
        try{
            Inventario::find($id)->delete();
        }
        catch (Exception $e){
            session()->flash('message', 'No puedes eliminarlo debido a que ya tienes registros en sistema');
        }
    }

    //---------------TIPO DE ACTIVO-------------------
    public $modal_activo=false, $TipoActivo;

    public function CerrarModalActivo(){
        $this->modal_activo=false;
        $this->TipoActivo=null;
    }
    public function MostrarModalActivo(){
        $this->modal_activo=true;
    } 
    public function GuardarActivo(){
        $this->validate(['TipoActivo'=>'required|min:4',]);
        Activos::Create([
            'Activo'=>strtoupper($this->TipoActivo),
            'id_departamento'=>$this->departamento
        ]);
        $this->CerrarModal();
    }
    public function EliminarActivo($id){
        try{
            Activos::where('id',$id)->delete();
        }
        catch (Exception $e){
            session()->flash('message', 'No puedes eliminarlo debido a que ya tienes registros en sistema');
        }
    }
    public function falso(){
    }
}
