<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;
    protected $fillable = ['User','Personal'];

    public function user()
    {
        return $this->belongsTo(User::class,'User','id');
    }
    public function personales()
    {
        return $this->belongsTo(Personal::class,'Personal','id');
    }
}
