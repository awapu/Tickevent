<?php

namespace App\Http\Controllers;
use App\Models\comprastickets;
use App\Models\eventos;
//iMPORTA QR 
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class CompraticketguestinfoController extends Controller
{
    //

        //

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           // $eventosi = eventos::all();
           // $servi = Servicios::all()-> where('id_proveedor', '=', $id);
            //return response()-> json($users);
            return view('compaticketguestinfo.info');

    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Models\comprastickets  $comprastickets
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $request = comprastickets::all()->where('id_compras', '=', $id)->first();

        //return response()-> json($request);

        $emailuser = $request->email;
        $ced = $request->ced_comprador;
        $idvento = $request->id_evento;
        $tituloevento = eventos::where('id_evento', $idvento)->pluck('nombre_evento')->first();
        $nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $valor = $request->valor;
        //GENERA QR
        $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($idvento.$ced));

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

        

        $pdf = PDF::loadView('compraticket.envioBoleta',$data);
        return $pdf->download('entrada.pdf');
        return Redirect::back();

        


    }




}
