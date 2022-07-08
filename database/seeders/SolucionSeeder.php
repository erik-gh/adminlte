<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
            'solucion_tecnologica' => 'CON',
            'descripcion' => 'CONVENCIONAL',
            'estado' => 1,
            'user_create' => 'USER0001',
            'user_update' => 'USER0001',
            ],
            [
            'solucion_tecnologica' => 'STAE',
            'descripcion' => 'SOLUCION TECNOLOGICA PARA EL APOYO DEL ESCRUTINIO',
            'estado' => 1,
            'user_create' => 'USER0001',
            'user_update' => 'USER0001',
            ],
        ];
        DB::table('soluciones')->insert($datos);
    }
}
