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
                'codigo' => '010101',
                'id_departamento' =>    1,
                'id_provincia' =>    1,
                'id_distrito' =>    1,
                'id_odpe' =>    1
            ],//1
            [
                'codigo' => '010205',
                'id_departamento' =>    1,
                'id_provincia' =>    2,
                'id_distrito' =>    2,
                'id_odpe' =>    1
            ],//2
            [
                'codigo' => '020101',
                'id_departamento' =>    2,
                'id_provincia' =>    3,
                'id_distrito' =>    3,
                'id_odpe' =>    2
            ],//3
            [
                'codigo' => '020102',
                'id_departamento' =>    2,
                'id_provincia' =>    3,
                'id_distrito' =>    4,
                'id_odpe' =>    2
            ],//4
            [
                'codigo' => '020501',
                'id_departamento' =>    2,
                'id_provincia' =>    4,
                'id_distrito' =>    5,
                'id_odpe' =>    3
            ],//5
            [
                'codigo' => '020502',
                'id_departamento' =>    2,
                'id_provincia' =>    4,
                'id_distrito' =>    6,
                'id_odpe' =>    3
            ]//6
        ];
        DB::table('ubigeos')->insert($datos);
    }
}
