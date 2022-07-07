<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilModuloSeeder extends Seeder
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
                'id_perfil' => 1,
                'id_modulo' => 1,
            ],//1
            [
                'id_perfil' => 1,
                'id_modulo' => 2,
            ],//2
            [
                'id_perfil' => 1,
                'id_modulo' => 3,
            ],//3
            [
                'id_perfil' => 1,
                'id_modulo' => 4,
            ],//4
            [
                'id_perfil' => 1,
                'id_modulo' => 5,
            ],//5
            [
                'id_perfil' => 2,
                'id_modulo' => 1,
            ],//6
            [
                'id_perfil' => 2,
                'id_modulo' => 2,
            ],//7
            [
                'id_perfil' => 2,
                'id_modulo' => 3,
            ],//8
            [
                'id_perfil' => 2,
                'id_modulo' => 4,
            ],//9
            [
                'id_perfil' => 2,
                'id_modulo' => 5,
            ],//10
        ];
        DB::table('perfil_modulos')->insert($datos);
    }
}
