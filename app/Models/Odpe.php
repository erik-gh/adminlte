<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odpe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_odpe',
        'estado'
    ];

    public function ubigeos(){
        return $this->hasMany(Ubigeo::class,'id');
    }

    public function procesos(){
        return $this->belongsToMany(Proceso::class, 'proceso_odpe');
    }
}
