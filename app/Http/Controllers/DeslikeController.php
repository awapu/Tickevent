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
class DeslikeController extends Controller
{
    

    public function store(Request $request)
    {
        //recupéro los datos
        $evento = $request->id_evento;
        $usr = $request->id_usr;
        $likes = Likes::all()->where('id_evento', '=', $evento)->first();

        if(!empty($likes)){
            

                $dislikesnum = $likes->dislikesnum;
                Likes::where('id_evento', $evento)->update([
                    'dislikesnum' => $dislikesnum + 1,
                ]);
                return redirect(route('home'));
            
 
        }else{

            
            Likes::where('id_evento', $evento)->updateOrCreate([
                'id_usr' =>  $usr,
                'id_evento' => $evento,
                'dislikesnum' => 1,

            ]);
            return redirect(route('home'));
    
        }


    }
}
