<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\User;
use App\Models\eventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiciosController extends Controller
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
        /*
        $users = User::all();
        $users1 = auth::user();

        $id = $users1->cedula;
        
        $eventosi = eventos::all()-> where('id_promotor', '=', $id);
        return view('servicios.create', ['users' => $users], ['eventosi' => $eventosi]);

        */
        $users1 = auth::user();
        $id = $users1->cedula;

        $users = User::all()-> where('cedula', '=', $id);
       

        return view('servicios.create', ['users' => $users]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //VALIDADOR DE CAMPOS
                $request->validate([

                    //'titulo' => 'required|max:100|alpha_num'   //tambien se puede utilizar
                    'id_proveedor'    => ['required','numeric'],
                    'id_categorias_servicio'  => ['required'],
                    'descripcion' => ['required'],
                    'telefono'   => ['required'],
                    'nombres_prov'   => ['required'],
                    'correo'   => ['required'],
                    'imagen'   => ['required'],
                ],[
                    //ponemos el mensaje que queremos mstrar, con el atrivuto en este caso titulo y articuo
                    'required' => ':attribute es requerido',
                    //attribute es el campo y :max el numero de caracteres
                    'max'=> ':attribute no puede tener mas de :max caracteres',
        
                    'numeric' => ':attribute solo debe ser numerico',
                   
                ]);


       // $datosServicios = request()->all();
       $datosServicios = request()->except('_token');   //toma todo los datos menos el token de laravel

       if($request->has('imagen')){
           $image = $request->file('imagen');
           $datosServicios ['imagen']=$request->file('imagen')->store('uploads/servicios' , 'public');
       }
        
       Servicios::create($datosServicios);                //inserta el arreglo 
       

       //REDIRECCIONAMOS A LA VISTA BUSSINES
       $users = User::all();
       $users1 = auth::user();
        $id = $users1->cedula;
       
       $eventosi = eventos::all()-> where('id_promotor', '=', $id);
       $servi = Servicios::all()-> where('id_proveedor', '=', $id);
       //return view('perfilBussines.dashboard', ['users' => $users, 'eventosi' => $eventosi, 'servi' => $servi]);
        //return response()-> json($datosServicios); 
       return redirect(route('comercial.index'));
       

            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios, $idserv)
    {
        //
        $users1 = auth::user();
        $id = $users1->cedula;

        $users = User::all()-> where('cedula', '=', $id);
        $serviciosi = Servicios::all()->where('id', '=', $idserv)->first();

        return view('servicios.gestion', ['users' => $users, 'serviciosi' => $serviciosi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicios $servicios, $idserv)
    {
        //        //
        $users1 = auth::user();
        $id = $users1->cedula;

        $users = User::all()-> where('cedula', '=', $id);
        $serviciosi = Servicios::all()->where('id', '=', $idserv)->first();

        return view('servicios.edit', ['users' => $users, 'serviciosi' => $serviciosi]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idserv)
    {

        $users1 = auth::user();
        $id = $users1->cedula;

        $users = User::all()-> where('cedula', '=', $id);
        $serviciosi = Servicios::all()->where('id', '=', $idserv)->first();
        $imagendb = $serviciosi->imagen;

        if($request->hasFile('imagen')){
            $imagennew = $request->file('imagen')->store('uploads/usuarios' , 'public');
        } else
        {
            $imagennew = $imagendb;
        }

        Servicios::where('id', $idserv)->update([
        
            'id_proveedor' => $request->id_proveedor,
            'id_categorias_servicio' => $request->id_categorias_servicio,
            'descripcion' => $request->descripcion,
            'telefono' => $request->telefono,
            'nombres_prov' => $request->nombres_prov,
            'correo' => $request->correo,
            'imagen' => $imagennew,


        ]);

        return redirect(route('comercial.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicios $servicios)
    {
        //
    }
}
