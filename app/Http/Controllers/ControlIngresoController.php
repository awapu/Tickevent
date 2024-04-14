<?php

namespace App\Http\Controllers;
use App\Models\comprastickets;
use App\Models\qrasistencia;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ControlIngresoController extends Controller
{
    //

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($ideve)
    {
        
        $users1 = auth::user();

        $id = $users1->cedula;
        $mail = $users1->email;
        
        $users = User::all()-> where('email', '=', $mail);
        $total = qrasistencia::all()->where('id_evento', '=',$ideve);

        $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
        // $servi = Servicios::all()-> where('id_proveedor', '=', $id);
        //return response()-> json($eventosi);

        return view('controlingreso.control', ['users' => $users, 'eventosi' => $eventosi], compact('total'));

    }

    public function update(Request $request)
    {

    }
}
