<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('id_servicio');
            $table->string('id_usr')->nullable()->default('0');
            $table->integer('likesnum')->nullable()->default(0);
            $table->integer('dislikesnum')->nullable()->default(0);
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
        Schema::dropIfExists('likes_servicios');
    }
}
