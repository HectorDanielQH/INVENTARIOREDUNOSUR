<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table = 'personales';
    protected $fillable = [
        'ci',
        'nombre',
        'apellido',
        'celular',
        'rol',
        'usuario',
        'unidad',
        'departamento',
    ];
    public function Usuario()
    {
        return $this->belongsTo(User::class,'usuario','id');
    }
    public function unidades()
    {
        return $this->belongsTo(Unidad::class, 'unidad','id');
    }
    public function departamentos()
    {
        return $this->belongsTo(Sucursal::class,'departamento','id');
    }
    public function Encargado()
    {
        return $this->hasOne(Encargado::class,'Personal','id');
    }
}
