<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_local',
        'nombre_local',
        'descripcion',
        'direccion_local',
        'estado',
        'id_distrito'
    ];

    public function distritos(){
        return $this->belongsTo(Distrito::class, 'id_distrito');
    }
}
