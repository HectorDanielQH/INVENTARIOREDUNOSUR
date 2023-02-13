<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activos extends Model
{
    use HasFactory;
    protected $fillable=['Activo','id_departamento'];
    public function inventario(){
        return $this->hasMany(Inventario::class,'id_activo','id');
    }
}
