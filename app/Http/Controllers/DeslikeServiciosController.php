<?php

namespace App\Http\Controllers;
use App\Models\LikesServicios;
use Illuminate\Http\Request;

class DeslikeServiciosController extends Controller
{

    public function store(Request $request)
    {
                    //recupéro los datos
                    $servicio = $request->id_servicio;
                    $usr = $request->id_usr;
                    $likes = LikesServicios::all()->where('id_servicio', '=', $servicio)->first();
            
                    if(!empty($likes)){
                        

                            $dislikesnum = $likes->dislikesnum;
                            LikesServicios::where('id_servicio', $servicio)->update([
                                'dislikesnum' => $dislikesnum + 1,
                            ]);
                            return redirect(route('indexservicios.index'));
                        
             
                    }else{
            
                        
                        LikesServicios::where('id_servicio', $servicio)->updateOrCreate([
                            'id_usr' =>  $usr,
                            'id_servicio' => $servicio,
                            'dislikesnum' => 1,
            
                        ]);
                        return redirect(route('indexservicios.index'));
                
                    }

    }

}
