<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
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
                'perfil' => 'ADMIN SYSTEM',
                'descripcion' => 'SUPER ADMINISTRADOR',
                'estado' => 1,
            ],//1
            [
                'perfil' => 'ADMINISTRADOR',
                'descripcion' => 'ADMINISTRADOR DEL SISTEMA',
                'estado' => 1,
            ],//2
        ];
        DB::table('perfiles')->insert($datos);
    }
}
