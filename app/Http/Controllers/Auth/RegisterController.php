<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        /*return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'apellidos' => ['string', 'max:255'],
        ]);*/
        return Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'apellidos'  => ['required' , 'max:150'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], //exist valida si si existe el dato 'exists:categorias,id'
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            //campos requeridos
            'name.required' => 'Nombre es requerido',
            'apellidos.required' => 'Apellidos es requerido',
            'email.required' => 'Correo es requerido',
            //attribute es el campo y :max el numero de caracteres, para maximo de caracteeres
            'name.max'=> 'Nombres no puede tener mas de :max caracteres',
            'apellidos.max'=> 'Apellidos no puede tener mas de :max caracteres',
           
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'apellidos' => $data['apellidos'],
        ]);
    }


}
