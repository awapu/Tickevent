<?php

namespace App\Http\Controllers;

use App\Models\comprastickets;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\EnviarBoleta;
use Illuminate\Support\Facades\Mail;
//iMPORTA QR 
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use Illuminate\Support\Str;


class ComprasticketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SE RETORNA A LA VISTA
        $users1 = auth::user();

        $id = $users1->cedula;
        $mail = $users1->email;
        
        $users = User::all()-> where('email', '=', $mail);
        $eventosi = eventos::all();
        $comprasi = comprastickets::all()-> where('email', '=', $mail);
        
        return view('compraticket.boleta', ['users' => $users, 'comprasi' => $comprasi, 'eventosi' => $eventosi]);


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

        if (Auth::user())
        {
            
            //VALIDADOR DE CAMPOS
            $request->validate([

                //'titulo' => 'required|max:100|alpha_num'   //tambien se puede utilizar
                'cant_boletas' =>['required'],
                'nombres'    => ['required'],
                'apellidos'  => ['required'],
                'email' => ['required'],
                'ced_comprador'   => ['required'],
                'celular'   => ['required'],
            ],[
                //ponemos el mensaje que queremos mstrar, con el atrivuto en este caso titulo y articuo
                'required' => ':attribute es requerido',
                //attribute es el campo y :max el numero de caracteres
                'max'=> ':attribute no puede tener mas de :max caracteres', 
                'numeric' => ':attribute solo debe ser numerico',
                'alpha_num' =>':attribute solo puede contener numeros y letras' 
            ]);


               //toma todo los datos menos el token de laravel
            $emailuser = request()->email;
            $ced = request()->ced_comprador;
            $idvento = request()->id_evento;
            $tituloevento = eventos::where('id_evento', $idvento)->pluck('nombre_evento')->first();
            $nombres = request()->nombres;
            $apellidos = request()->apellidos;
            $valor = request()->valor;
            //$qrusr = unique($idvento.$ced);
            $qrusr      = Str::uuid();
 

            //GENERA QR
            $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($qrusr));

            //VARIABLES

            

            $datoscomprador = request()->except('_token');
            $datoscomprador['codigo_qr'] = $qrusr;

            //INSERTA COMPRA
            comprastickets::create($datoscomprador );   

            //SE CREA ARREGLO PARA PASAR A LAS VISTAS
            $data["email"] = $emailuser;
            $data["title"] = "Compra Tickvent";
            $data["body"] = "";
            $data["qrcode"] = $qrcode;
            $data["titulo"] = $tituloevento;
            $data["nombres"] = $nombres;
            $data["apellidos"] = $apellidos;
            $data["idvento"] = $idvento;
            $data["ced"] = $ced;
            $data["valor"] = $valor;
      
            //SE GENERA PDF
            $pdf = PDF::loadView('compraticket.envioBoleta', $data);
            //SE GENERA CORREO CON PDF ADJUNTO
            Mail::send('compraticket.mailenvioBoleta', $data, function($message)use($data, $pdf) {
                $message->to($data["email"], $data["email"])
                        ->subject($data["title"])
                        ->attachData($pdf->output(), "Entrada.pdf");
            });
            


            //SE RETORNA A LA VISTA
            $users1 = auth::user();

            $id = $users1->cedula;
            $mail = $users1->email;
            
            $users = User::all()-> where('email', '=', $mail);
            $eventosi = eventos::all();
            $comprasi = comprastickets::all()-> where('email', '=', $mail);
            
            return view('compraticket.boleta', ['users' => $users, 'comprasi' => $comprasi, 'eventosi' => $eventosi]);

            dd('');

            //
        }
        else
        {
                        //VALIDADOR DE CAMPOS
                        $request->validate([

                            //'titulo' => 'required|max:100|alpha_num'   //tambien se puede utilizar
                            'cant_boletas' =>['required'],
                            'nombres'    => ['required'],
                            'apellidos'  => ['required'],
                            'email' => ['required'],
                            'ced_comprador'   => ['required'],
                            'celular'   => ['required'],
                        ],[
                            //ponemos el mensaje que queremos mstrar, con el atrivuto en este caso titulo y articuo
                            'required' => ':attribute es requerido',
                            //attribute es el campo y :max el numero de caracteres
                            'max'=> ':attribute no puede tener mas de :max caracteres', 
                            'numeric' => ':attribute solo debe ser numerico',
                            'alpha_num' =>':attribute solo puede contener numeros y letras' 
                        ]);
            
            
                           //toma todo los datos menos el token de laravel
                        $emailuser = request()->email;
                        $ced = request()->ced_comprador;
                        $idvento = request()->id_evento;
                        $tituloevento = eventos::where('id_evento', $idvento)->pluck('nombre_evento')->first();
                        $nombres = request()->nombres;
                        $apellidos = request()->apellidos;
                        $valor = request()->valor;
                        //$qrusr = unique($idvento.$ced);
                        $qrusr      = Str::uuid();
             
            
                        //GENERA QR
                        $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($qrusr));
            
                        //VARIABLES
            
                        
            
                        $datoscomprador = request()->except('_token');
                        $datoscomprador['codigo_qr'] = $qrusr;
            
                        //INSERTA COMPRA
                        comprastickets::create($datoscomprador );   
            
                        //SE CREA ARREGLO PARA PASAR A LAS VISTAS
                        $data["email"] = $emailuser;
                        $data["title"] = "Compra Tickvent";
                        $data["body"] = "";
                        $data["qrcode"] = $qrcode;
                        $data["titulo"] = $tituloevento;
                        $data["nombres"] = $nombres;
                        $data["apellidos"] = $apellidos;
                        $data["idvento"] = $idvento;
                        $data["ced"] = $ced;
                        $data["valor"] = $valor;
                  
                        //SE GENERA PDF
                        $pdf = PDF::loadView('compraticket.envioBoleta', $data);
                        //SE GENERA CORREO CON PDF ADJUNTO
                        Mail::send('compraticket.mailenvioBoleta', $data, function($message)use($data, $pdf) {
                            $message->to($data["email"], $data["email"])
                                    ->subject($data["title"])
                                    ->attachData($pdf->output(), "Entrada.pdf");
                        });
                        
            
            

                        
                        return redirect()->route('infocompra.index');            
                        dd('');


            //return response()-> json($datosEventos);  
        }

 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comprastickets  $comprastickets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user())
        {
            $evento = eventos::where('id_evento', '=', $id)->first();
        
            // return response()-> json($eventosi);
             $users1 = auth::user();
             $mail = $users1->email;
             
             $users = User::all()-> where('email', '=', $mail);
     
             //return response()-> json($users);
             return view('compraticket.compratick', ['users' => $users, 'evento' => $evento]);
        }
        else    
        {
            $evento = eventos::where('id_evento', '=', $id)->first();
            return view('compraticket.compratick',['evento'=>$evento]);

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comprastickets  $comprastickets
     * @return \Illuminate\Http\Response
     */
    public function edit(comprastickets $comprastickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comprastickets  $comprastickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comprastickets $comprastickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comprastickets  $comprastickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(comprastickets $comprastickets)
    {
        //
    }
}
