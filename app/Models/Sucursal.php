<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = 'sucursales';
    protected $fillable = ['Departamento'];
    public $timestamps = false;

    public function personal()
    {
        return $this->hasMany(Personal::class,'departamento','id');
    }
    public function user()
    {
        return $this->hasMany(User::class,'id_departamento','id');
    }
    public function inventario()
    {
        return $this->hasMany(Inventario::class,'id_departamento','id');
    }
    public function remision()
    {
        return $this->hasMany(Remision::class,'departamento','id');
    }
}
