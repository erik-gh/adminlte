<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PerfilSeeder::class);
        $this->call(ModuloSeeder::class);
        $this->call(PerfilModuloSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ConsultaSeeder::class);
        $this->call(OdpeSeeder::class);
        $this->call(TipoProcesoSeeder::class);
        $this->call(ProcesoSeeder::class);
        $this->call(ProcesoConsultaSeeder::class);
        $this->call(ProcesoOdpeSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(DistritoSeeder::class);
        $this->call(UbigeoSeeder::class);
        $this->call(SolucionSeeder::class);
        $this->call(EtapaSeeder::class);
        $this->call(LocalSeeder::class);
        $this->call(MesaSeeder::class);
        $this->call(OdpeSolucionSeeder::class);
    }
}
