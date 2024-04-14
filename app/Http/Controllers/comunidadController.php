<?php

namespace App\Http\Controllers;
use App\Models\eventos;
use App\Models\User;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class comunidadController extends Controller
{
    //

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (Auth::user())
        {
            $users1 = auth::user();

            $id = $users1->cedula;
            $mail = $users1->email;
            
            $users = User::all()-> where('email', '=', $mail);
    
            $eventosi = eventos::all();
           // $servi = Servicios::all()-> where('id_proveedor', '=', $id);
            //return response()-> json($users);
            return view('comunidad.show', ['users' => $users, 'eventosi' => $eventosi]);

        }
        else
        {
            $eventosi = eventos::all();
           // $servi = Servicios::all()-> where('id_proveedor', '=', $id);
            //return response()-> json($users);
            return view('comunidad.show', ['eventosi' => $eventosi]);

        }

    }
}
