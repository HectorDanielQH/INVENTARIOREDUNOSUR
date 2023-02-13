<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $table = 'unidades';
    protected $fillable = [
        'NombreUnidad',
        'id_departamento',
    ];
    public function departamentos()
    {
        return $this->belongsTo(Sucursal::class,'id_departamento','id');
    }
    public function Encargado()
    {
        return $this->hasOne(Encargado::class,'Personal','id');
    }
    public function Personal()
    {
        return $this->hasMany(Personal::class,'unidad','id');
    }
}
