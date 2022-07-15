<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentoSeeder extends Seeder
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
                'cod_documento' => 'COD_INS',
                'documento' => 'INSTALACION',
                'descripcion' => 'Acta de Instalacion',
                'estado' => 1,
            ],//1
            [
                'cod_documento' => 'COD_SUF',
                'documento' => 'SUFRAGIO',
                'descripcion' => 'Acta de Sufragio',
                'estado' => 1,
            ],//2
            [
                'cod_documento' => 'COD_ESC',
                'documento' => 'ESCRUTINIO',
                'descripcion' => 'Acta de Escrutinio',
                'estado' => 1,
            ],//3
            [
                'cod_documento' => 'COD_INT_SUF',
                'documento' => 'INSTALACION',
                'descripcion' => 'Acta Instalacion_sufragio',
                'estado' => 1,
            ],//4
            [
                'cod_documento' => 'COD_INT_SUF_ESC',
                'documento' => 'ESCRUTINIO',
                'descripcion' => 'Acta de instalacion_sufragio_escrutinio',
                'estado' => 1,
            ],//5
            [
                'cod_documento' => 'CODLE',
                'documento' => 'LISTA ELECTORES',
                'descripcion' => 'Lista de Electores',
                'estado' => 1
            ],//6
            [
                'cod_documento' => 'CODHCAMM',
                'documento' => 'HCAMM',
                'descripcion' => 'HCAMM',
                'estado' => 1,

            ],//7
        ];
        DB::table('documentos')->insert($datos);
    }
}
