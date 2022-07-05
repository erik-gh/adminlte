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
            ],//1
            [
                'codigo' => '05',
                'descripcion' => 'BAGUA',
            ],//2
            [
                'codigo' => '01',
                'descripcion' => 'HUARAZ',
            ],//3
            [
                'codigo' => '02',
                'descripcion' => 'INDEPENDENCIA',
            ],//4
            [
                'codigo' => '01',
                'descripcion' => 'CASMA',
            ],//5
            [
                'codigo' => '02',
                'descripcion' => 'BUENA VISTA ALTA',
            ]//6
        ];
        DB::table('distritos')->insert($datos);
    }
}
