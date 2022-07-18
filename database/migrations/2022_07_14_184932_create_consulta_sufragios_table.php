<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaSufragiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta_sufragios', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_consulta')
                ->nullable()
                ->constrained('consultas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_sufragio')
                ->nullable()
                ->constrained('sufragios')
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
        Schema::dropIfExists('consulta_sufragios');
    }
}
