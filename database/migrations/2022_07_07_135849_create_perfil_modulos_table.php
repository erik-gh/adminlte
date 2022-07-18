<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_modulos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_perfil')
                ->nullable()
                ->constrained('perfiles')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_modulo')
                ->nullable()
                ->constrained('modulos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_modulos');
    }
}
