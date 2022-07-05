<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'descripcion',
    ];
    /*public function ubigeos()
    {
        return $this->hasMany(Ubigeo::class);
    }*/
}
