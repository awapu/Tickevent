<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class googleloginController extends Controller
{
    //

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all();
        $users1 = auth::user();

        $id = $users1->cedula;
        
        $eventosi = eventos::all()-> where('id_promotor', '=', $id);
        $servi = Servicios::all()-> where('id_proveedor', '=', $id);

        return view('perfilBussines.dashboard', ['users' => $users, 'eventosi' => $eventosi, 'servi' => $servi]);
    }
}
