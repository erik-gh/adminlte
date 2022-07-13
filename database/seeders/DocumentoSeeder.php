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
                'cod_documento' => 'CODINSTALACION',
                'documento' => 'INSTALACION',
                'descripcion' => 'Documento de Instalacion',
                'estado' => 1,
            ],//1
            [
                'cod_documento' => 'CODESCRUTINIO',
                'documento' => 'ESCRUTINIO',
                'descripcion' => 'Documento de Escrutinio',
                'estado' => 1,
            ],//2
            [
                'cod_documento' => 'CODLE',
                'documento' => 'LISTA ELECTORES',
                'descripcion' => 'Lista de Electores',
                'estado' => 1
            ],//3
            [
                'cod_documento' => 'CODHCAMM',
                'documento' => 'HCAMM',
                'descripcion' => 'HCAMM',
                'estado' => 1,

            ],//4
        ];
        DB::table('documentos')->insert($datos);
    }
}
