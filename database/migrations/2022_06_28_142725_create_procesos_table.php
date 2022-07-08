<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->string('proceso');
            $table->string('descripcion');
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_cierre');
            $table->integer('estado');
            $table->string('user_create');
            $table->string('user_update');
            $table->foreignId('id_tipo_proceso')
                ->nullable()
                ->constrained('tipo_procesos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
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
        Schema::dropIfExists('procesos');
    }
}
