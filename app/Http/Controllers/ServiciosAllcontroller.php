<?php

namespace App\Http\Controllers;
use App\Models\Servicios;
use App\Models\LikesServicios;
use App\Models\User;
use App\Models\eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ComentariosServicios;


class ServiciosAllcontroller extends Controller
{
    //
    public function index()
    {
        //$users = User::all();
        $users1 = auth::user();
   

        $id = $users1->cedula;
        $mail = $users1->email;

        $users = User::all()-> where('email', '=', $mail);
        $comentariosi = ComentariosServicios::all();
        
        $serviciosi = Servicios::all();
        $likesServicios = LikesServicios::all();
    
        //return response()-> json($users);
        return view('serviciosindex.dashboard', ['users' => $users, 'serviciosi' => $serviciosi, 'comentariosi' => $comentariosi, 'likesServicios' => $likesServicios]);

    }

    public function show( $idserv)
    {
        //
        $users1 = auth::user();
        $id = $users1->cedula;

        $users = User::all()-> where('cedula', '=', $id);
        $serviciosi = Servicios::all()->where('id', '=', $idserv)->first();

        return view('servicios.show', ['users' => $users, 'serviciosi' => $serviciosi]);
    }


    
}
