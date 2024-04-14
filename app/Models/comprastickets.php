<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class comprastickets extends Model
{
    //use HasFactory;
    //le decimos cual es la tabla donde debe enviar los datos
    protected $table = 'comprastickets';
    //validamos que es lo unico que se va a recibir del usuario
    protected $fillable = [
        'id_evento',
        'nombres',
        'apellidos',
        'cantidad',
        'email',
        'ced_comprador' ,
        'celular',
        'cant_boletas',
        'valor',
        'codigo_qr'
    ];

    
}
