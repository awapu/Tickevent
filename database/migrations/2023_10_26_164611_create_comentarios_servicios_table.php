<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('id_usuario');
            $table->string('id_servicio');
            $table->text('comentario');
            $table->text('nombre_usr');
            $table->string('imgusr')->nullable();
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
        Schema::dropIfExists('comentarios_servicios');
    }
}
