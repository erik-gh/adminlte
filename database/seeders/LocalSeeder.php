<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalSeeder extends Seeder
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
                'cod_local' => '0001',
                'nombre_local' => 'IE 18288 ISABEL LYNCH DE RUBIO',
                'direccion_local' => 'JR AYACUCHO 870',
                'estado' => 1,
                'id_distrito' => 1,
            ],//1
            [
                'cod_local' => '7805',
                'nombre_local' => 'IEIPSM Nº 16194',
                'direccion_local' => 'JR ICA SN CUADRA 12',
                'estado' => 1,
                'id_distrito' => 2,
            ],//2
            [
                'cod_local' => '0150',
                'nombre_local' => 'IE PEDRO PABLO ATUSPARIA',
                'direccion_local' => 'AV BOLOGNESI 116',
                'estado' => 1,
                'id_distrito' => 3,
            ],//3
            [
                'cod_local' => '0155',
                'nombre_local' => 'IE GRAN UNIDAD ESCOLAR MARISCAL TORIBIO DE LUZURIAGA',
                'direccion_local' => 'AV CENTENARIO 998',
                'estado' => 1,
                'id_distrito' => 4,
            ],//4
            [
                'cod_local' => '8131',
                'nombre_local' => '88101 CESAR ABRAHAM VALLEJO MENDOZA',
                'direccion_local' => 'CALLE LOS PINOS SN',
                'estado' => 1,
                'id_distrito' => 5,
            ],//5
            [
                'cod_local' => '0216',
                'nombre_local' => 'IE 88110 NUESTRA SEÑORA DE FATIMA',
                'direccion_local' => 'AV VILLARREAL SN',
                'estado' => 1,
                'id_distrito' => 6,
            ],//6
        ];
        DB::table('locales')->insert($datos);
    }
}
