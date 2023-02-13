<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sucursal;

class ReportesAdminLive extends Component
{
    public $departamento;
    public function render()
    {
        $departamentoElegido=Sucursal::where('id',$this->departamento)->first();
        return view('livewire.reportes-admin-live',compact('departamentoElegido'));
    }
}
