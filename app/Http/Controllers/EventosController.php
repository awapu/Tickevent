<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use App\Models\Servicios;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*
        $users = User::all();

        return view('eventos.create', ['users' => $users]);
        */


        if (Auth::user()) {
                    
            $users1 = auth::user();
            $id = $users1->cedula;

            $users = User::all()-> where('cedula', '=', $id);
        

            return view('eventos.create', ['users' => $users]);

        } else {
            return redirect(route('login'));
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('eventos.create');
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
        //VALIDADOR DE CAMPOS
        $request->validate([

            //'titulo' => 'required|max:100|alpha_num'   //tambien se puede utilizar
            'id_promotor'    => ['required'],
            'nombre_promotor'    => ['required'],
            'nombre_evento'  => ['required'],
            'id_categoria_ev'   => ['max:100' , 'alpha_num'],
            'descripcion' => ['required'],
            'ciudad'   => ['required'],
            'direccion'   => ['required'],
            //'Nombre_sitio'   => ['required'],
            'latitud'   => ['required'],
            'longitud'   => ['required'],
            'fecha_incio'   => ['required'],
            'hora_inicio'   => ['required'],
            'fecha_fin'   => ['max:100'],
            'hora_fin'   => ['max:100'],
            'modalidad'   => ['required'],
            'anfitriones'   => ['required','max:100'],
            'aforo'   => ['numeric'],
            'monetizacion'   => ['required'],
            'costoboleta'   => ['max:100'],
            //'total_vendidos'   => ['numeric'],
            //'estado'   => ['required'],
            'img'   => ['required'],
        
        ],[
            //ponemos el mensaje que queremos mstrar, con el atrivuto en este caso titulo y articuo
            'required' => ':attribute es requerido',
            //attribute es el campo y :max el numero de caracteres
            'max'=> ':attribute no puede tener mas de :max caracteres',

            'numeric' => ':attribute solo debe ser numerico',
            
            'alpha_num' =>':attribute solo puede contener numeros y letras'
           
        ]);


        //$datosEventos = request()->all();
        $datosEventos = request()->except('_token');   //toma todo los datos menos el token de laravel

        if($request->has('img')){
            $image = $request->file('img');
            $datosEventos ['img']=$request->file('img')->store('uploads/eventos' , 'public');
        }

        eventos::create($datosEventos);                //inserta el arreglo 
        //return response()-> json($datosEventos);   

        //REDIRECCIONAMOS A LA VISTA BUSSINES
        $users = User::all();
        $users1 = auth::user();

        $id = $users1->cedula;
        
        $eventosi = eventos::all()-> where('id_promotor', '=', $id);
        $servi = Servicios::all()-> where('id_proveedor', '=', $id);

        return redirect(route('comercial.index'));
        //return view('perfilBussines.dashboard', ['users' => $users, 'eventosi' => $eventosi, 'servi' => $servi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(eventos $eventos)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit($ideve)
    {

        //SE RETORNA A LA VISTA
        $users1 = auth::user();

        $id = $users1->cedula;
        $mail = $users1->email;
        
        $users = User::all()-> where('email', '=', $mail);
        $eventosi = eventos::where('id_evento', '=' , $ideve)->first();
        //return response()-> json($eventosi);   
        return view('eventos.edit', ['users' => $users, 'eventosi' => $eventosi]);

        
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ideve)
    {
        eventos::where('id_evento', $ideve)->update([

            'nombre_evento' => $request->nombre_evento,
            'id_categoria_ev' => $request->id_categoria_ev,
            'descripcion' => $request->descripcion,
            'ciudad' => $request->ciudad,
            'direccion' => $request->direccion,
            'latitud' => $request->latitud,
            'latitud' => $request->latitud,
            'fecha_incio' => $request->fecha_incio,
            'hora_inicio' => $request->hora_inicio,
            'modalidad' => $request->modalidad,
            'anfitriones' => $request->anfitriones,
            'aforo' => $request->aforo,
            'monetizacion' => $request->monetizacion,
            'costoboleta' => $request->costoboleta,

        ]);
        
        //RETORNA A DASHBOARD BUSSINES
        $users = User::all();
        $users1 = auth::user();

        $id = $users1->cedula;
        
        $eventosi = eventos::all()-> where('id_promotor', '=', $id);
        $servi = Servicios::all()-> where('id_proveedor', '=', $id);
        return redirect(route('home'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(eventos $eventos)
    {
        //
    }
}
