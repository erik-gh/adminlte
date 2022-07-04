<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistritoSeeder extends Seeder
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
                'id_provincia' =>    1
            ],
            [
                'codigo' => '05',
                'descripcion' => 'BAGUA',
                'id_provincia' =>    2
            ],
            [
                'codigo' => '01',
                'descripcion' => 'HUARAZ',
                'id_provincia' =>    3
            ],
            [
                'codigo' => '02',
                'descripcion' => 'INDEPENDENCIA',
                'id_provincia' =>    4
            ],
            [
                'codigo' => '01',
                'descripcion' => 'CASMA',
                'id_provincia' =>    5
            ],
            [
                'codigo' => '02',
                'descripcion' => 'BUENA VISTA ALTA',
                'id_provincia' =>    6
            ]

        ];
        DB::table('distritos')->insert($datos);
    }
}
