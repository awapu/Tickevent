<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikesServicios extends Model
{
               //le decimos cual es la tabla donde debe enviar los datos
               protected $table = 'likes_servicios';
               //validamos que es lo unico que se va a recibir del usuario
               protected $fillable = [
                   //categoria_id es la llave foranea de la tabla categorias
                   'id_servicio',
                   'id_usr',
                   'likesnum',
                   'dislikesnum'
               ];
}
