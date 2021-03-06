<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            'tipo_proceso' => 'ELECCIONES MUNICIPALES',
            'descripcion' => 'ELECCIONES MUNICIPALES',
            'estado' => 1,
            'eleccion' => 1
        ];
        DB::table('tipo_procesos')->insert($datos);
    }
}
