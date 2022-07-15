<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolucionDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            //Convencional
            [ //Rojo
                'id_solucion' => 1,'id_sobre' => 1,'id_documento' => 5,
            ],//1
            [//Morado
                'id_solucion' => 1,'id_sobre' => 2,'id_documento' => 5,
            ],//2
            [//Plomo
                'id_solucion' => 1,'id_sobre' => 3,'id_documento' => 5,
            ],//3

            [//Naranja
                'id_solucion' => 1,'id_sobre' => 4,'id_documento' => 6,
            ],//4
            [//HCAMM
                'id_solucion' => 1,'id_sobre' => 5,'id_documento' => 7,
            ],//5

            // STAE
            [ //Rojo
                'id_solucion' => 2,'id_sobre' => 1,'id_documento' => 4,
            ],//6
            [
                'id_solucion' => 2,'id_sobre' => 1,'id_documento' => 3,
            ],//7

            [ //Morado
                'id_solucion' => 2,'id_sobre' => 2,'id_documento' => 4,
            ],//8
            [
                'id_solucion' => 2,'id_sobre' => 2,'id_documento' => 3,
            ],//9

            [//Plomo
                'id_solucion' => 2,'id_sobre' => 3,'id_documento' => 4,
            ],//10
            [
                'id_solucion' => 2,'id_sobre' => 3,'id_documento' => 3,
            ],//11

            [//Naranja
                'id_solucion' => 2,'id_sobre' => 4,'id_documento' => 6,
            ],//11
            [//HACAMM
                'id_solucion' => 2,'id_sobre' => 5,'id_documento' => 7,
            ],//12
        ];
        DB::table('solucion_documentos')->insert($datos);
    }
}
