<?php

namespace App\Http\Controllers;

use App\Models\qrasistencia;
use App\Models\comprastickets;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QrasistenciaController extends Controller
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

        $codigo = request()->codigo_qr;
        $entrada = comprastickets::all()-> where('codigo_qr', '=', $codigo)->first();
        $ideve = request()->id_evento;
        $total = qrasistencia::all()->where('id_evento', '=',$ideve);
        //$accion = request()->entrada;

       // return response()-> json($accion);


        if(request()->entrada == "entrada") {

            if (empty($entrada)) {

           
                $users1 = auth::user();
                $id = $users1->cedula;
                $mail = $users1->email;
                
                $users = User::all()-> where('email', '=', $mail);
                $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
                //return response()-> json($eventosi);
                //session()->flash('Falla', 'La boleta no existe');
                return redirect(route('control.show', $eventosi->id_evento))->with('Falla', 'La boleta no existe');
                //return view('controlingreso.control', ['users' => $users, 'eventosi' => $eventosi], compact('total'))->with('Falla', 'La boleta no existe');
    
            }
            else
            {
    
                $valida = qrasistencia::all()->where('codigo_qr','=',$codigo)->first();

                if (empty($valida)) { // si no encuentra evento
    
                    $datoscomprador = 
                    ['id_evento' => $entrada->id_evento,
                    'nombres' => $entrada->nombres,
                    'apellidos' => $entrada->apellidos,
                    'email' => $entrada->email,
                    'ced_comprador' => $entrada->ced_comprador,
                    'celular' => $entrada->celular,
                    'codigo_qr' => $entrada->codigo_qr,
                    'entrada' => +1,
                    'check' => true,
                        ];
                    qrasistencia::updateOrCreate($datoscomprador); 
        
                    //s$ideve = $entrada->id_evento;
        
                    $users1 = auth::user();
                    $id = $users1->cedula;
                    $mail = $users1->email;       
                    $users = User::all()-> where('email', '=', $mail);
                    $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
        
                    return redirect(route('control.show', $eventosi->id_evento))->with('Exito', 'Disfruta el evento');
                    //session()->flash('Exito', 'Disfruta el evento');
                    //return view('controlingreso.control', ['users' => $users, 'eventosi' => $eventosi, 'total'=>$total], compact('total'))->with('Exito', 'Disfruta el evento');
                    
                }elseif ($valida->entrada > "0" AND $valida->salida <= '0') {

                        $users1 = auth::user();
                        $id = $users1->cedula;
                        $mail = $users1->email;
                        
                        $users = User::all()-> where('email', '=', $mail);
                        $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
                        //return response()-> json($eventosi);
                        //session()->flash('Existe', 'La boleta ya fue leida');
                        return redirect(route('control.show', $eventosi->id_evento))->with('Existe', 'La boleta ya fue leida');
                        //return view('controlingreso.control', ['users' => $users, 'eventosi' => $eventosi, 'total'=>$total], compact('total'))->with('Existe', 'La boleta ya fue leida');
                        
                }elseif ($valida->entrada <= "0" AND $valida->salida > '0') {

                        qrasistencia::where('codigo_qr', $codigo)->update([

                            'id_evento' => $valida->id_evento,
                            'nombres' => $valida->nombres,
                            'apellidos' => $valida->apellidos,
                            'email' => $valida->email,
                            'ced_comprador' => $valida->ced_comprador,
                            'celular' => $valida->celular,
                            'codigo_qr' => $valida->codigo_qr,
                            'entrada' => 1,
                            'salida' => 0,
                            'check' => true,
                
                        ]);

            
                        //s$ideve = $entrada->id_evento;
            
                        $users1 = auth::user();
                        $id = $users1->cedula;
                        $mail = $users1->email;       
                        $users = User::all()-> where('email', '=', $mail);
                        $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
            
                        return redirect(route('control.show', $eventosi->id_evento))->with('Nuevamente', 'Bienvenido Nuevamnte');
                
                }


            }

        } else if(request()->entrada == "salida") { 

            if (empty($entrada)) {    //compras tiquet contiene el registro

           
                $users1 = auth::user();
                $id = $users1->cedula;
                $mail = $users1->email;
                
                $users = User::all()-> where('email', '=', $mail);
                $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
                //return response()-> json($eventosi);
                //session()->flash('Falla', 'La boleta no existe');
                return redirect(route('control.show', $eventosi->id_evento))->with('Falla', 'La boleta no existe');
                //return view('controlingreso.control', ['users' => $users, 'eventosi' => $eventosi], compact('total'))->with('Falla', 'La boleta no existe');
    
            }
            else
            {
    
                $valida = qrasistencia::all()->where('codigo_qr','=',$codigo)->first();
    
                if (empty($valida)) {

        
                    $users1 = auth::user();
                    $id = $users1->cedula;
                    $mail = $users1->email;       
                    $users = User::all()-> where('email', '=', $mail);
                    $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
        
                    return redirect(route('control.show', $eventosi->id_evento))->with('Salida', 'Te esperamos');
                    //session()->flash('Exito', 'Disfruta el evento');
                    //return view('controlingreso.control', ['users' => $users, 'eventosi' => $eventosi, 'total'=>$total], compact('total'))->with('Exito', 'Disfruta el evento');
                    
                }
                else
                {

                    qrasistencia::where('codigo_qr', $codigo)->update([

                        'id_evento' => $valida->id_evento,
                        'nombres' => $valida->nombres,
                        'apellidos' => $valida->apellidos,
                        'email' => $valida->email,
                        'ced_comprador' => $valida->ced_comprador,
                        'celular' => $valida->celular,
                        'codigo_qr' => $valida->codigo_qr,
                        'entrada' => 0,
                        'salida' => 1,
                        'check' => false,
            
                    ]);

        
                    //s$ideve = $entrada->id_evento;
        
                    $users1 = auth::user();
                    $id = $users1->cedula;
                    $mail = $users1->email;       
                    $users = User::all()-> where('email', '=', $mail);
                    $eventosi = eventos::all()->where('id_evento', '=', $ideve)->first();
        
                    return redirect(route('control.show', $eventosi->id_evento))->with('Salida', 'Te esperamos');
                    //session()->flash('Exito', 'Disfruta el evento');
                    //return view('controlingreso.control', ['users' => $users, 'eventosi' => $eventosi, 'total'=>$total], compact('total'))->with('Exito', 'Disfruta el evento');
                    
                }



                


    
            }
        }


      

            
            

            
   




        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\qrasistencia  $qrasistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        

        

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\qrasistencia  $qrasistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(qrasistencia $qrasistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\qrasistencia  $qrasistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qrasistencia $qrasistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\qrasistencia  $qrasistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(qrasistencia $qrasistencia)
    {
        //
    }
}
