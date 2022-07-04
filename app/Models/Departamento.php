<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_ubigeo',
        'descripcion',
        'id_ubigeo'
    ];

    public function ubigeos(){
        return $this->belongsTo(Ubigeo::class, 'id_ubigeo');
    }
}
