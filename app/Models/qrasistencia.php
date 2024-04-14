<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qrasistencia extends Model
{
       //le decimos cual es la tabla donde debe enviar los datos
       protected $table = 'qrasistencia';
       //validamos que es lo unico que se va a recibir del usuario
       protected $fillable = [
           //categoria_id es la llave foranea de la tabla categorias
           'id_evento',
           'nombres',
           'apellidos',
           'email',
           'ced_comprador',
           'celular',
           'codigo_qr',
           'entrada',
           'salida',
           'check'
   
       ];
}
