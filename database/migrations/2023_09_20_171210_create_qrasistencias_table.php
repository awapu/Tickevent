<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrasistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrasistencia', function (Blueprint $table) {

            $table->id();
            $table->string('id_evento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->text('email');
            $table->string('ced_comprador');
            $table->string('celular');
            $table->string('codigo_qr');
            $table->integer('entrada')->default('0')->nullable();
            $table->integer('salida')->default('0')->nullable();
            $table->boolean('check')->nullable();
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
        Schema::dropIfExists('qrasistencia');
    }
}
