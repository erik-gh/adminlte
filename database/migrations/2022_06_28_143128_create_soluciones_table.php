<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soluciones', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('solucion_tecnologica');
            $table->string('descripcion');
            $table->integer('estado');
            $table->string('user_create');
            $table->string('user_update');
            $table->timestamps();// created_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soluciones');
    }
}
