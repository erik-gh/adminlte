<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
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
                'codigo' => '01',
                'descripcion' => 'AMAZONAS',
            ],//1
            [
                'codigo' => '02',
                'descripcion' => 'ANCASH',
            ],//2
        ];
        DB::table('departamentos')->insert($datos);
    }
}
