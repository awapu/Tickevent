<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interaciones', function (Blueprint $table) {
            $table->id();
            $table->string('idinteraccion');
            $table->string('qrasistencia');
            $table->string('likedisl');
            $table->string('comentarios');
            $table->string('compartidos');
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
        Schema::dropIfExists('interaciones');
    }
}
