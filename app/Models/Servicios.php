<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //use HasFactory;

           //le decimos cual es la tabla donde debe enviar los datos
           protected $table = 'servicios';
           //validamos que es lo unico que se va a recibir del usuario
           protected $fillable = [
               //categoria_id es la llave foranea de la tabla categorias
               'id_proveedor',
               'id_categorias_servicio',
               'descripcion',
               'imagen',
               'telefono',
                'nombres_prov',
                'nombre_serv',
                'correo'

           ];
}
