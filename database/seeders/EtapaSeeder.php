<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            'etapa' => 'RECEPCIÓN',
            'descripcion' => 'RECEPCION DE DOCUMENTOS',
            'estado' => 1,
            'orden' => 1,
            'user_create' => 'USER0001',
            'user_update' => 'USER0001',
        ];
        DB::table('etapas')->insert($datos);
    }
}
