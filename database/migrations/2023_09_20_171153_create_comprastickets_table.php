<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprastickets', function (Blueprint $table) {
            $table->id();
            $table->uuid('id_compras')->index()->default(DB::raw('(UUID())'));
            $table->string('id_evento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->text('email');
            $table->string('ced_comprador');
            $table->string('celular');
            $table->integer('cant_boletas');
            $table->string('valor');
            $table->string('codigo_qr');
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
        Schema::dropIfExists('comprastickets');
    }
}
