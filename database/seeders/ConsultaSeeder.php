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
                'descripcion' => 'Regional - Provincial- Distrital',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],
            [
                'consulta' => 'RP',
                'descripcion' => 'Reginal - Provincial',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],
            [
                'consulta' => 'PD',
                'descripcion' => 'Provincial - Distrital',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ],
            [
                'consulta' => 'P',
                'descripcion' => 'Provincial',
                'estado' => 1,
                'user_create' => 'USER0001',
                'user_update' => 'USER0001',
            ]
        ];
        DB::table('consultas')->insert($datos);
    }
}
