<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Support\Facades\Auth;
use App\Models\comprastickets;
use Illuminate\Http\Request;

class GestionEventoController extends Controller
{
        //

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($ideve)
    {


        if (Auth::user())
        {
            $users1 = auth::user();

            $id = $users1->cedula;
            $mail = $users1->email;
            
            $users = User::all()-> where('email', '=', $mail);
            
    
            $compras = comprastickets::all()->where('id_evento', '=', $ideve);
            
            $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
           // $servi = Servicios::all()-> where('id_proveedor', '=', $id);
            //return response()-> json($eventosi);

            return view('gestionevento.dashboard', ['users' => $users, 'eventosi' => $eventosi], compact('compras'));

        }
        else
        {
            $eventosi = eventos::all();
           // $servi = Servicios::all()-> where('id_proveedor', '=', $id);
            //return response()-> json($users);
            return view('gestionevento.dashboard', ['eventosi' => $eventosi]);

        }

    }
}
