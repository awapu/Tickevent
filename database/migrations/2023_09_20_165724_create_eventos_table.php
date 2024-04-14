<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->engine = 'InnoDB'; //Add this line
            $table->id('id');
            $table->uuid('id_evento')->index()->default(DB::raw('(UUID())'));
            $table->integer('id_promotor');
            $table->string('nombre_promotor');
            $table->string('nombre_evento');
            $table->string('id_categoria_ev')->nullable();
            $table->text('descripcion');
            $table->string('Ciudad');
            $table->string('direccion');
            $table->string('Nombre_sitio');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->date('fecha_incio');
            $table->time('hora_inicio');
            $table->date('fecha_fin')->nullable();
            $table->time('hora_fin')->nullable();
            $table->string('modalidad')->nullable();
            $table->string('medio_transmision')->nullable();
            $table->string('enlace_conexio')->nullable();
            $table->string('anfitriones');
            $table->integer('aforo');
            $table->integer('plazas_disponibles')->nullable();
            $table->integer('total_vendidos')->nullable();
            $table->string('monetizacion');
            $table->string('costoboleta')->nullable()->default('0');
            $table->string('estado')->nullable()->default('activo');
            $table->string('img')->nullable();
            $table->string('banner')->nullable();
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
        Schema::dropIfExists('eventos');
    }
}
