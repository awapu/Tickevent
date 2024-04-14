<?php

namespace App\Http\Controllers;

use App\Models\LikesServicios;
use Illuminate\Http\Request;

class LikesServiciosController extends Controller
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
                //recupéro los datos
                $servicio = $request->id_servicio;
                $usr = $request->id_usr;
                $likes = LikesServicios::all()->where('id_servicio', '=', $servicio)->first();
        
                if(!empty($likes)){
                    

                        $sumlikes = $likes->likesnum;
                        LikesServicios::where('id_servicio', $servicio)->update([
                            'likesnum' => $sumlikes + 1,
                        ]);
                        return redirect(route('indexservicios.index'));
                    
         
                }else{
        
                    
                    LikesServicios::where('id_servicio', $servicio)->updateOrCreate([
                        'id_usr' =>  $usr,
                        'id_servicio' => $servicio,
                        'likesnum' => 1,
        
                    ]);
                    return redirect(route('indexservicios.index'));
            
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LikesServicios  $likesServicios
     * @return \Illuminate\Http\Response
     */
    public function show(LikesServicios $likesServicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LikesServicios  $likesServicios
     * @return \Illuminate\Http\Response
     */
    public function edit(LikesServicios $likesServicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LikesServicios  $likesServicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LikesServicios $likesServicios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LikesServicios  $likesServicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(LikesServicios $likesServicios)
    {
        //
    }
}
