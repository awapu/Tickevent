<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {

                

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $email)
    {
                //
                $users1 = auth::user();
        
                $mail = $users1->email;
                
                $users = User::all()-> where('email', '=', $mail);
        
          
                //return response()-> json($users);
               
                return view('usuarios.edit', compact('users'));
        
               
               
        

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /*
        $request->validate([

            //'titulo' => 'required|max:100|alpha_num'   //tambien se puede utilizar
            'titulo'    => ['required', 'max:11' , 'alpha_num'],
            'articulo'  => ['required' , 'max:10'],
            'categoria_id' => ['numeric'],
            'activo '   => ['boolean'],
           


        ],[
            //ponemos el mensaje que queremos mstrar, con el atrivuto en este caso titulo y articuo
            'required' => ':attribute es requerido',
            //attribute es el campo y :max el numero de caracteres
            'max'=> ':attribute no puede tener mas de :max caracteres',

            'numeric' => ':attribute solo debe ser nuemrico',
            
            'alpha_num' =>':attribute solo puede contener numeros y letras'
           
        ]);
        
        //$datosEventos = request()->all();
        $datosusr = request()->except('_token');   //toma todo los datos menos el token de laravel



        user::update($datosusr);  

        //RETORNA A DASHBOARD BUSSINES
        $users = User::all();
        $users1 = auth::user();

        $id = $users1->cedula;
        
        $eventosi = eventos::all()-> where('id_promotor', '=', $id);
        $servi = Servicios::all()-> where('id_proveedor', '=', $id);
        
        return view('perfilBussines.dashboard', ['users' => $users, 'eventosi' => $eventosi, 'servi' => $servi]);
        */



    $user_id = Auth::user()->id;

    User::where('id', $user_id)->update([
      'cedula' => $request->cedula,
      'edad' => $request->edad,
      'razonSocial' => $request->razonSocial
    ]);

            //RETORNA A DASHBOARD BUSSINES
            $users = User::all();
            $users1 = auth::user();
    
            $id = $users1->cedula;
            
            $eventosi = eventos::all()-> where('id_promotor', '=', $id);
            $servi = Servicios::all()-> where('id_proveedor', '=', $id);
            return view('perfilBussines.dashboard', ['users' => $users, 'eventosi' => $eventosi, 'servi' => $servi]);
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
