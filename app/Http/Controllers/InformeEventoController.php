<?php

namespace App\Http\Controllers;
use App\Models\qrasistencia;
use App\Models\comprastickets;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;



class InformeEventoController extends Controller
{
    public function show($id){

        $eventosi = eventos::all()-> where('id_evento', '=', $id)->first();
        $request = comprastickets::all()->where('id_evento', '=', $id);
        $asistentes = qrasistencia::all()->where('id_evento','=', $id AND 'entrada' > '0');
      //datos evento
        $nomevento = $eventosi->nombre_evento;
        $ciudad = $eventosi->ciudad;
        $aforo = $eventosi->aforo;
        //conto de ventas
        $comprasi = ($request)->count();
        $registro = ($asistentes)->count();


    


        
        $data["nomevento"] = $nomevento;
        $data["ciudad"] = $ciudad;
        $data["aforo"] = $aforo;
        $data["ventasb"] = $comprasi;
        $data["ventasb"] = $comprasi;
        $data["ingresos"] = $registro;
       
        //return response()-> json($asistentes);

        $pdf = PDF::loadView('informeevento.informe', $data, compact('asistentes'));
        return $pdf->download('informeevento.pdf');
        return Redirect::back();

         //return response()-> json($request);


    }
}
