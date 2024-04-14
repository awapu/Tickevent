<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Illuminate\Http\Request;
use App\Models\eventos;
use App\Models\Servicios;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $users1 = auth::user();
        //VARIABLES
        $datoscomprador = request()->except('_token');   //toma todo los datos menos el token de laravel

        //INSERTA COMPRA
        comentarios::create($datoscomprador);   

        //retorno a vista
        $users1 = auth::user();

        $id = $users1->cedula;
        $mail = $users1->email;
        
        $users = User::all()-> where('email', '=', $mail);
        //$eventosi = eventos::all();
        //$comentariosi = comentarios::all()->paginate(2);
       // $servi = Servicios::all()-> where('id_proveedor', '=', $id);
        //return response()-> json($users);
        return redirect(route('home'));
       // return view('home', ['users' => $users, 'eventosi' => $eventosi, 'comentariosi' => $comentariosi]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function show(Comentarios $comentarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentarios $comentarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentarios $comentarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentarios  $comentarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentarios $comentarios)
    {
        //
    }
}
