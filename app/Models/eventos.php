<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class eventos extends Model
{
    //use HasFactory;



        //le decimos cual es la tabla donde debe enviar los datos
        protected $table = 'eventos';
        //validamos que es lo unico que se va a recibir del usuario
        protected $fillable = [
            
            'id_promotor',
            'nombre_promotor',
            'nombre_evento',
            'id_categoria_ev',
            'descripcion',
            'ciudad',
            'direccion' ,
            'Nombre_sitio' ,
            'latitud',
            'longitud',
            'fecha_incio',
            'hora_inicio',
            'fecha_fin',
            'hora_fin',
            'modalidad',
            'medio_transmision',
            'enlace_conexio',
            'anfitriones' ,
            'aforo',
            'plazas_disponibles',
            'monetizacion' ,
            'costoboleta' ,
            'total_vendidos',
            'estado',
            'img',
            'banner'
        ];
}
