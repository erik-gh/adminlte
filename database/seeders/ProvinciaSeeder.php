<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
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
                'codigo' => '01',
                'descripcion' => 'CHACHAPOYAS',
                'id_departamento' =>    1
            ],
            [
                'codigo' => '02',
                'descripcion' => 'BAGUA',
                'id_departamento' =>    1
            ],
            [
                'codigo' => '01',
                'descripcion' => 'HUARAZ',
                'id_departamento' =>    2
            ],
            [
                'codigo' => '01',
                'descripcion' => 'HUARAZ',
                'id_departamento' =>    2
            ],
            [
                'codigo' => '05',
                'descripcion' => 'CASMA',
                'id_departamento' =>    2
            ],
            [
                'codigo' => '05',
                'descripcion' => 'CASMA',
                'id_departamento' =>    2
            ]

        ];
        DB::table('provincias')->insert($datos);
    }
}
