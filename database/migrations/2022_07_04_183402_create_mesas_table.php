<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nro_mesa');
            $table->string('codigo');
            $table->integer('nro_electores');
            $table->integer('orden');
            $table->foreignId('id_local')
                ->nullable()
                ->constrained('locales')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_solucion')
                ->nullable()
                ->constrained('soluciones')
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
        Schema::dropIfExists('mesas');
    }
}
