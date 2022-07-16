<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('procesos')->truncate();
        $datos = [
            'proceso' => 'ERM2022',
            'descripcion' => 'ELECCIONES REGIONALES MUNICIPALES 2022',
            'fecha_inicio' => '2022-01-01',
            'fecha_cierre' => '2022-11-30',
            'estado' => 1,
            'user_create' => 'USER0001',
            'user_update' => 'USER0001',
            'id_tipo_proceso'=> 1
        ];
        DB::table('procesos')->insert($datos);
    }
}
