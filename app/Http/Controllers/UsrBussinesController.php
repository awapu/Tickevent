<?php

namespace App\Http\Controllers;

use App\Models\UsrBussines;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsrBussinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //$users = User::all();
        $users1 = auth::user();

        $id = $users1->cedula;
        $mail = $users1->email;
        
        $users = User::all()-> where('email', '=', $mail);

        $eventosi = eventos::all()-> where('id_promotor', '=', $id);
        $servi = Servicios::all()-> where('id_proveedor', '=', $id);
        
        //return response()-> json($users);
        return view('perfilBussines.dashboard', ['users' => $users, 'eventosi' => $eventosi, 'servi' => $servi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsrBussines  $usrBussines
     * @return \Illuminate\Http\Response
     */
    public function show(UsrBussines $usrBussines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsrBussines  $usrBussines
     * @return \Illuminate\Http\Response
     */
    public function edit(UsrBussines $usrBussines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsrBussines  $usrBussines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsrBussines $usrBussines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsrBussines  $usrBussines
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsrBussines $usrBussines)
    {
        //
    }
}
