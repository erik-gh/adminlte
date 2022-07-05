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
            ],//1
            [
                'codigo' => '02',
                'descripcion' => 'BAGUA',
            ],//2
            [
                'codigo' => '01',
                'descripcion' => 'HUARAZ',
            ],//3
            [
                'codigo' => '05',
                'descripcion' => 'CASMA',
            ],//4

        ];
        DB::table('provincias')->insert($datos);
    }
}
