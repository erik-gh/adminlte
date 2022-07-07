<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->truncate();
        $datos = [
            'dni' => '45061598',
            'password' => '8265994a4684bc0100a39ac173d7c83002fb24dc',
            'apellidos' => 'HUAMANCHUMO CAPUÑAY',
            'nombres' => 'FREDDY HERNAN',
            'estado' => 1,
            'id_perfil' => 2,
            'username' => '45061598',
            'email' => 'fredy@gmail.com',
//            'password' => bcrypt('qwerty123')
        ];
        DB::table('users')->insert($datos);
    }
}
