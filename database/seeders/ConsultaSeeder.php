<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultaSeeder extends Seeder
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
                'consulta' => 'RPD',
                'descripcion' => 'Regional / Provincial - Distrital',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],//1
            [
                'consulta' => 'RP',
                'descripcion' => 'Regional / Provincial',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],//2
            [
                'consulta' => 'P',
                'descripcion' => 'Provincial',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],//3
            [
                'consulta' => 'PD',
                'descripcion' => 'Provincial - Distrital',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ]//4

        ];
        DB::table('consultas')->insert($datos);
    }
}
