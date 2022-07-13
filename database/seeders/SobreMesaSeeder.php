<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SobreMesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['id_sobre' => 1,'id_mesa' => 1],
            ['id_sobre' => 2,'id_mesa' => 1],
            ['id_sobre' => 3,'id_mesa' => 1],
            ['id_sobre' => 4,'id_mesa' => 1],
            ['id_sobre' => 5,'id_mesa' => 1],
            ['id_sobre' => 1,'id_mesa' => 2],
            ['id_sobre' => 2,'id_mesa' => 2],
            ['id_sobre' => 3,'id_mesa' => 2],
            ['id_sobre' => 4,'id_mesa' => 2],
            ['id_sobre' => 5,'id_mesa' => 2],
            ['id_sobre' => 1,'id_mesa' => 3],
            ['id_sobre' => 2,'id_mesa' => 3],
            ['id_sobre' => 3,'id_mesa' => 3],
            ['id_sobre' => 4,'id_mesa' => 3],
            ['id_sobre' => 5,'id_mesa' => 3],
            ['id_sobre' => 1,'id_mesa' => 4],
            ['id_sobre' => 2,'id_mesa' => 4],
            ['id_sobre' => 3,'id_mesa' => 4],
            ['id_sobre' => 4,'id_mesa' => 4],
            ['id_sobre' => 5,'id_mesa' => 4],
            ['id_sobre' => 1,'id_mesa' => 5],
            ['id_sobre' => 2,'id_mesa' => 5],
            ['id_sobre' => 3,'id_mesa' => 5],
            ['id_sobre' => 4,'id_mesa' => 5],
            ['id_sobre' => 5,'id_mesa' => 5],
            ['id_sobre' => 1,'id_mesa' => 6],
            ['id_sobre' => 2,'id_mesa' => 6],
            ['id_sobre' => 3,'id_mesa' => 6],
            ['id_sobre' => 4,'id_mesa' => 6],
            ['id_sobre' => 5,'id_mesa' => 6]
        ];
        DB::table('sobre_mesas')->insert($datos);
    }
}
