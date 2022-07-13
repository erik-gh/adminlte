<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SobreSeeder extends Seeder
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
                'cod_sobre' => 'CODROJO',
                'sobre' => 'ROJO',
                'descripcion' => 'Sobre color Rojo',
                'estado' => 1
            ],//1
            [
                'cod_sobre' => 'CODMORADO',
                'sobre' => 'MORADO',
                'descripcion' => 'Sobre color Morado',
                'estado' => 1
            ],//2
            [
                'cod_sobre' => 'CODPPLOMO',
                'sobre' => 'PLOMO',
                'descripcion' => 'Sobre de color Rojo',
                'estado' => 1
            ],//3
            [
                'cod_sobre' => 'CODNARANJA',
                'sobre' => 'NARANJA',
                'descripcion' => 'Sobre color Naranja - Lista electores',
                'estado' => 1
            ],//4
            [
                'cod_sobre' => 'CODHCAM',
                'sobre' => 'HCAM',
                'descripcion' => 'Sobre HCAM',
                'estado' => 1
            ]//5
        ];
        DB::table('sobres')->insert($datos);
    }
}
