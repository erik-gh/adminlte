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
            [
                'id_solucion' => 1,'id_sobre' => 1,'id_documento' => 2,
            ],//1
            [
                'id_solucion' => 1,'id_sobre' => 2,'id_documento' => 2,
            ],//2
            [
                'id_solucion' => 1,'id_sobre' => 3,'id_documento' => 2,
            ],//3
            [
                'id_solucion' => 1,'id_sobre' => 4,'id_documento' => 3,
            ],//4
            [
                'id_solucion' => 1,'id_sobre' => 5,'id_documento' => 4,
            ],//5
            // STAE
            [
                'id_solucion' => 2,'id_sobre' => 1,'id_documento' => 1,
            ],//6
            [
                'id_solucion' => 2,'id_sobre' => 1,'id_documento' => 2,
            ],//7
            [
                'id_solucion' => 2,'id_sobre' => 2,'id_documento' => 1,
            ],//8
            [
                'id_solucion' => 2,'id_sobre' => 2,'id_documento' => 2,
            ],//9
            [
                'id_solucion' => 2,'id_sobre' => 3,'id_documento' => 1,
            ],//10
            [
                'id_solucion' => 2,'id_sobre' => 3,'id_documento' => 2,
            ],//11
            [
                'id_solucion' => 2,'id_sobre' => 4,'id_documento' => 3,
            ],//12
            [
                'id_solucion' => 2,'id_sobre' => 5,'id_documento' => 4,
            ],//13
        ];
        DB::table('solucion_documentos')->insert($datos);
    }
}
