<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use Illuminate\Http\Request;

class detalleEventoController extends Controller
{

    public function show($id){

        $evento = eventos::where('id_evento', '=', $id)->first();
        
        return view('eventos.detalleEvento', compact('evento'));
    }
}
