<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumeroRemision extends Model
{
    use HasFactory;
    protected $table='numeroremisiones';
    protected $fillable=['numeroRemision','id_departamento'];
}
