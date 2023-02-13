<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remision extends Model
{
    use HasFactory;
    protected $table='remisiones';
    protected $fillable=[
        'numRemision',
        'idUsuario',
        'idInventario',
        'departamento',
        'cantidad',
        'detalledevolucion',
        'fechadevolucion'
    ];


    public function inventario(){
        return $this->belongsTo(Inventario::class,'idInventario','id');
    }

    public function personal(){
        return $this->belongsTo(Personal::class,'idUsuario','id');
    }

    public function departamentos(){
        return $this->belongsTo(Sucursal::class,'departamento','id');
    }
}
