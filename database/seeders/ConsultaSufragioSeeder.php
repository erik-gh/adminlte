<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultaSufragioSeeder extends Seeder
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
                'id_consulta' => 1,
                'id_sufragio' => 1,
            ],//1
            [
                'id_consulta' => 1,
                'id_sufragio' => 3,
            ],//2
            [
                'id_consulta' => 2,
                'id_sufragio' => 1,
            ],//3
            [
                'id_consulta' => 2,
                'id_sufragio' => 2,
            ],//4
            [
                'id_consulta' => 3,
                'id_sufragio' => 2,
            ],//5
            [
                'id_consulta' => 4,
                'id_sufragio' => 3,
            ],//6
        ];
        DB::table('consulta_sufragios')->insert($datos);
    }
}
