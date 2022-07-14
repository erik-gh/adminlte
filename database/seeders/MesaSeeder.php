<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesaSeeder extends Seeder
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
                'nro_mesa' => '107001',
                'codigo' => '010101',
                'nro_electores' => 94,
                'orden' => 1,
                'id_local' => 1,
                'id_solucion' => 2,
            ],//1
            [
                'nro_mesa' => '105001',
                'codigo' => '010205',
                'nro_electores' => 55,
                'orden' => 2,
                'id_local' => 2,
                'id_solucion' => 2,
            ],//2
            [
                'nro_mesa' => '103002',
                'codigo' => '020101',
                'nro_electores' => 138,
                'orden' => 3,
                'id_local' => 3,
                'id_solucion' => 2,
            ],//3
            [
                'nro_mesa' => '271001',
                'codigo' => '020102',
                'nro_electores' => 143,
                'orden' => 4,
                'id_local' => 4,
                'id_solucion' => 2,
            ],//4
            [
                'nro_mesa' => '103004',
                'codigo' => '020501',
                'nro_electores' => 78,
                'orden' => 5,
                'id_local' => 5,
                'id_solucion' => 2,
            ],//5
            [
                'nro_mesa' => '113016',
                'codigo' => '020502',
                'nro_electores' => 200,
                'orden' => 6,
                'id_local' => 6,
                'id_solucion' => 2,
            ],//6
        ];
        DB::table('mesas')->insert($datos);
    }
}
