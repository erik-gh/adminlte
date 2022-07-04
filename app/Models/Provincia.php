<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'descripcion',
        'id_departamento'
    ];

    public function departamentos(){
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }
}
