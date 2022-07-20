<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Esta tabla es de prueba para ingresar por mientras  los documentos */
        Schema::create('recepcion_documentos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_proceso');
            $table->integer('id_solucion');
            $table->integer('id_odpe');
            $table->integer('id_ubigeo');
            $table->integer('id_consulta');
            $table->integer('id_sobre');
            $table->integer('id_sufragio');
            $table->integer('id_documento');
            $table->integer('id_mesa');
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
        Schema::dropIfExists('recepcion_documentos');
    }
}
