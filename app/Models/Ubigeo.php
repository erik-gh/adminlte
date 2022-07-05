<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'id_departamento',
        'id_provincia',
        'id_odpe'
    ];

    public function odpes(){
        return $this->belongsTo(Odpe::class, 'id_odpe');
    }
    public function departamentos(){
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }
    public function provincias(){
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }
      public function distritos(){
          return $this->belongsTo(Distrito::class, 'id_distrito');
      }

}
