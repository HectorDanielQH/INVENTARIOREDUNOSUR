<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable=[
        'cantidad',
        'codigo',
        'detalle',
        'id_activo',
        'serie',
        'estado',
        'precio',
        'fecha_compra',
        'id_unidad',
        'id_departamento',
    ];

    public function activo(){
        return $this->belongsTo(Activos::class,'id_activo','id');
    }
    public function remisiones(){
        return $this->hasMany(Remision::class,'idInventario','id');
    }
}
