<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OdpeSolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('proceso_odpes')->truncate();
        $datos = [
            [
                'id_odpe' => 1,
                'id_solucion' => 1,
            ],
            [
                'id_odpe' => 1,
                'id_solucion' => 2,
            ],
            [
                'id_odpe' => 2,
                'id_solucion' => 1,
            ],
            [
                'id_odpe' => 2,
                'id_solucion' => 2,
            ],
            [
                'id_odpe' => 3,
                'id_solucion' => 1,
            ],
            [
                'id_odpe' => 3,
                'id_solucion' => 2,
            ],
        ];
        DB::table('odpe_soluciones')->insert($datos);
    }
}
