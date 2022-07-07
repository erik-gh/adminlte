<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloSeeder extends Seeder
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
                'modulo' => 'Inicio',
                'descripcion' => 'Deshboard del Sistema',
                'icono' => 'home',
                'url' => 'dashboard',
                'estado' => 1
            ],//1
            [
                'modulo' => 'General',
                'descripcion' => 'Configuracion General del Sistema',
                'icono' => 'settings',
                'url' => 'general',
                'estado' => 1
            ],//2
            [
                'modulo' => 'Parametros del Proceso',
                'descripcion' => 'Configuracion del proceso actual',
                'icono' => 'tablet',
                'url' => 'parametro',
                'estado' => 1
            ],//3
            [
                'modulo' => 'Control de Calidad',
                'descripcion' => 'Control de Calidad',
                'icono' => 'folder-person',
                'url' => 'control',
                'estado' => 1
            ],//4
            [
                'modulo' => 'Usuario y Perfiles',
                'descripcion' => 'Creación y Asignacion de modulos a los Usuarios.',
                'icono' => 'accounts-add',
                'url' => 'usuario',
                'estado' => 1
            ]//5
        ];
        DB::table('modulos')->insert($datos);
    }
}
