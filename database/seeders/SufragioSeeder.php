<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SufragioSeeder extends Seeder
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
                'codigo' => 'R',
                'descripcion' => 'REGIONAL',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],//1
            [
                'codigo' => 'P',
                'descripcion' => 'MUNICIPAL PROVINCIAL',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],//2
            [
                'codigo' => 'PD',
                'descripcion' => 'MUNICIPAL PROVINCIAL - DISTRITAL',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],//3
        ];
        DB::table('sufragios')->insert($datos);
    }
}
