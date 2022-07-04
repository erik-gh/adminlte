<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbigeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('ubigeos')->truncate();
        $datos = [
            [
                'cod_ubigeo' => '010101',
                'nombre' => '',
                'id_odpe' =>    1
            ],
            [
                'cod_ubigeo' => '010205',
                'nombre' => '',
                'id_odpe' =>    1
            ],
            [
                'cod_ubigeo' => '020101',
                'nombre' => '',
                'id_odpe' =>    2
            ],
            [
                'cod_ubigeo' => '020102',
                'nombre' => '',
                'id_odpe' =>    2
            ],
            [
                'cod_ubigeo' => '020501',
                'nombre' => '',
                'id_odpe' =>    2
            ],
            [
                'cod_ubigeo' => '020502',
                'nombre' => '',
                'id_odpe' =>    2
            ]

        ];
        DB::table('ubigeos')->insert($datos);
    }
}
