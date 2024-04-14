<?php

namespace App\Http\Controllers;

use App\Models\Likes;
use App\Models\ComentariosServicios;
use App\Models\Comentarios;
use Illuminate\Http\Request;
use App\Models\eventos;
use App\Models\Servicios;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recupéro los datos
        $evento = $request->id_evento;
        $usr = $request->id_usr;
        $likes = Likes::all()->where('id_evento', '=', $evento)->first();

        if(!empty($likes)){
            
     
                $sumlikes = $likes->likesnum;
                Likes::where('id_evento', $evento)->update([
                    'likesnum' => $sumlikes + 1,
                ]);
                return redirect(route('home'));
            
 
        }else{

            
            Likes::where('id_evento', $evento)->updateOrCreate([
                'id_usr' =>  $usr,
                'id_evento' => $evento,
                'likesnum' => 1,

            ]);
            return redirect(route('home'));
    
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function show(Likes $likes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function edit(Likes $likes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Likes $likes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Likes  $likes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Likes $likes)
    {
        //
    }
}
