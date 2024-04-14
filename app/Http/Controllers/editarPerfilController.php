<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\eventos;
use App\Models\Servicios;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class editarPerfilController extends Controller
{
    //

    public function show($mail)
    {
        
        
        $users1 = auth::user();

        $mail = $users1->email;
        
        $users = User::all()-> where('email', '=', $mail);

  
        //return response()-> json($$request);
        
       
        return view('perfil.editperfil', compact('users'));
               
    }


   
    public function update(Request $request)
    {
        
        $user_id = Auth::user()->id;
        $userall = User::all()->where('id', $user_id)->first();
        $imgusrdb = $userall->imgusr;
        $imgbussinesdb = $userall->imgbussines;

        //return response()-> json($userall);
        if($request->hasFile('imgusr')){
            $imagenusr = $request->file('imgusr')->store('uploads/usuarios' , 'public');
        } else
        {
            $imagenusr = $imgusrdb;
        }

        if($request->hasFile('imgbussines')){
            $imagenbussines = $request->file('imgbussines')->store('uploads/usuarios' , 'public');
        } else
        {
            $imagenbussines = $imgbussinesdb;
        }

        User::where('id', $user_id)->update([
        
            'imgusr' => $imagenusr,
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'apodo' => $request->apodo,
            'tipo_user' => $request->tipo_user,
            'email' => $request->email,
            'celular' => $request->celular,
            'imgbussines' => $imagenbussines,
            'nit' => $request->nit,
            'razonSocial' => $request->razonSocial,
            'desc_empresa' => $request->desc_empresa,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'corp_email' => $request->corpEmail,
            'telefono' => $request->telefono,
            'corp_celular' => $request->corpCelular,
            'edad' => $request->edad,
            'razonSocial' => $request->razonSocial
        ]);
        




       
      
        
        //$datosEventos = request()->all();
        //$datosuser = request()->except('_token');   //toma todo los datos menos el token de laravel

        //RETORNA A DASHBOARD BUSSINES
        $users = User::all();
        $users1 = auth::user();

        $id = $users1->cedula;
        
        $eventosi = eventos::all()-> where('id_promotor', '=', $id);
        $servi = Servicios::all()-> where('id_proveedor', '=', $id);
        
        return redirect(route('home'));

    
    }
}
