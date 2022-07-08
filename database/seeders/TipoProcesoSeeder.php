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
            'tipo_proceso' => 'ELECCIONES INTERNAS',
            'descripcion' => 'ELECCIONES INTERNAS',
            'estado' => 1,
            'eleccion' => '2'
        ];
        DB::table('tipo_procesos')->insert($datos);
    }
}
