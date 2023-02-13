<?php

namespace App\Http\Livewire;

use App\Models\Encargado;
use App\Models\Personal;
use App\Models\Unidad;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EncargadoLive extends Component
{
    public $departamento,$modal=false;
    public $correo,$contraseña,$id_unidad,$personal_id;
    public function render()
    {
        $unidades=Unidad::where('id_departamento',$this->departamento)->get();
        if($this->id_unidad == null){
            $personal=Personal::where('departamento',$this->departamento)
            ->get();
        }
        else{
            $personal=Personal::where('departamento',$this->departamento)
            ->where('unidad',$this->id_unidad)
            ->get();
        }
        return view('livewire.encargado-live',compact('personal','unidades'));
    }
    public function MostrarModal(){
        $this->modal=true;
    }
    public function CerrarModal(){
        $this->modal=false;
        $this->correo=null;
        $this->contraseña=null;
        $this->id_unidad=null;
        $this->personal_id=null;
    }
    public function AñadirRol($id){
        $this->MostrarModal();
        $this->personal_id=$id;
    }
    public function EditarRol($id){
        $this->personal_id=$id;
        $this->correo=Personal::find($id)->Usuario->email;
        $this->contraseña=Personal::find($id)->Usuario->password;
        $this->MostrarModal();
    }
    public function GuardarRol(){
        $personal=Personal::find($this->personal_id);
        User::updateOrCreate(['email'=>$this->correo],[
            'name'=>$personal->nombre.' '.$personal->apellido,
            'email'=>$this->correo,
            'password'=>Hash::make($this->contraseña),
         ])->assignRole('encargado');
        Personal::find($this->personal_id)->update([
            'usuario'=>User::where('email',$this->correo)->first()->id,
            'rol'=>'encargado'
        ]);
        $this->CerrarModal();
    }
    public function EliminarRol($id){
        $id_usuario_eliminar=Personal::find($id)->usuario;
        Personal::find($id)->update([
            'usuario'=>null,
            'rol'=>'personal'
        ]);
        User::find($id_usuario_eliminar)->delete();
    }
}
