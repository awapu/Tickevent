<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->string('nombre', 30);
            $table->string('apellidos', 30);
            $table->string('usuario', 30);
            $table->string('pass');
            $table->integer('edad');
            $table->string('correo', 50);
            $table->integer('id_rol');
            $table->char('politicaData', 1);
            $table->text('razonSocial');
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
        Schema::dropIfExists('usuarios');
    }
}
