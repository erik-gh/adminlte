<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('dni');
            $table->string('cod_user');
            $table->string('apellidos');
            $table->string('nombres');
            $table->integer('estado');
            $table->integer('request_password');
            $table->foreignId('id_perfil')
                ->nullable()
                ->constrained('perfiles')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->integer('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_create');
            $table->string('user_update');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
