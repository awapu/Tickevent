<?php

namespace App\Http\Controllers;
use App\Models\Likes;
use App\Models\User;
use App\Models\eventos;
use Illuminate\Http\Request;
use App\Models\Comentarios;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$users = User::all();
        $users1 = auth::user();
   

        $id = $users1->cedula;
        $mail = $users1->email;

        $users = User::all()-> where('email', '=', $mail);
        
        $eventosi = eventos::all();
        $comentariosi = comentarios::all();
        $likesi = Likes::all();
        
        //return response()-> json($users);
        return view('perfil.dashboard', ['users' => $users, 'eventosi' => $eventosi, 'comentariosi' => $comentariosi, 'likesi'=> $likesi]);

    }


    

    
}
