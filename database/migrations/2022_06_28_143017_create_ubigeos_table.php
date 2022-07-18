<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbigeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubigeos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('codigo');
            $table->foreignId('id_departamento')
                ->nullable()
                ->constrained('departamentos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_provincia')
                ->nullable()
                ->constrained('provincias')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_distrito')
                ->nullable()
                ->constrained('distritos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_odpe')
                ->nullable()
                ->constrained('odpes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();// created_at update_at
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubigeos');
    }
}
