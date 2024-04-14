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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('google_id')->nullable();
            $table->integer('id_usuario')->nullable();
            $table->string('apellidos', 30)->nullable();
            $table->integer('edad')->nullable();
            $table->integer('cedula')->nullable();
            $table->integer('nit')->nullable();
            $table->string('imgbussines')->nullable();
            $table->string('imgusr')->nullable();
            $table->text('razonSocial')->nullable();
            $table->text('apodo')->nullable();
            $table->text('celular')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('tipo_user')->nullable();
            $table->text('desc_empresa')->nullable();
            $table->text('direccion')->nullable();
            $table->text('corp_email')->nullable();
            $table->text('telefono')->nullable();
            $table->text('corp_celular')->nullable();
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
