<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\detalleEvento;
use App\Http\Controllers\EventosController;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\EnviarBoleta;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//INICIO
Route::resource('/', 'indexAllEventsController');
//FIN INICIO

//INICIO DE RUTAS DE SOCIALITE LOGIN GOOGLE
Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();
    $user = User::updateOrCreate([
        'google_id' => $user_google->id,
    ], [
        'name' => $user_google->name,
        'email' => $user_google->email,
    ]);

    Auth::login($user);
    //dd($user);  ver lo que regresa google
    return redirect('perfil');

});

/*
Route::get('perfil', function () {
    return view('perfil.dashboard');
})->middleware(['auth'])->name('dashboard');;



Route::get('compras', function () {
    return view('compraticket.compratick');
});
*/
//FIN DE RUTAS DE SOCIALITE LOGIN GOOGLE 


//PERFIL
Route::resource('perfil', 'googleloginController')->middleware(['auth']);
//COMPRAS TICKET
Route::resource('compras', 'ComprasticketsController');
//FIN COMPRAS TICKET



//INFO COMPRAS TICKET GUEST
Route::resource('infocompra', 'CompraticketguestinfoController',[

    'names' => [
        'infocompra.index' => 'infocompra',
        'infocompra.show' => 'showpdf',

    ]
]);
//FIN COMPRAS TICKET GUEST

//EVENTOS
Route::resource('eventos', 'EventosController');
//Route::get('eventos/create', 'EventosController@index');
Route::resource('detEvento', 'detalleEventoController');
//FN EVENTOS

//EDITAR USUARIOS
Route::resource('usuarioedit', 'UsuariosController');

//CONTROL INGRESOS
Route::resource('control', 'ControlIngresoController');

//SERVICIOS
Route::resource('servicios', 'ServiciosController');
//FIN SERVICIOS

//SERVICIOS
Route::resource('indexservicios', 'ServiciosAllcontroller');
//FIN SERVICIOS

//COMENTARIOS
Route::resource('comentarios', 'ComentariosController');
//FIN COMENTARIOS

//COMENTARIOS
Route::resource('comentariosservicios', 'ComentariosServiciosController');
//FIN COMENTARIOS

//USUARIO BUSSINES
Route::resource('comercial', 'UsrBussinesController',[

    'names' => [
        'comercial.index' => 'comercial',

    ]
]);
//FIN USUARIO BUSSINES

//GESTION EVENTOS
Route::resource('gestion', 'GestionEventoController');
//FIN GESTION EVENTOS

//GESTION EVENTOS
Route::resource('eventoinforme', 'InformeEventoController');
//FIN GESTION EVENTOS

//GESTION EVENTOS
Route::resource('validador', 'QrasistenciaController');
//FIN GESTION EVENTOS

//COMUNIDAD
Route::resource('comunidad', 'comunidadController');
//FIN COMUNIDAD

//EDITAR PERFIL
Route::resource('editprofile', 'editarPerfilController');
//FIN EDITAR PERFIL

//EDITAR PERFIL
Route::resource('likes', 'LikesController');
//FIN EDITAR PERFIL

//EDITAR PERFIL
Route::resource('deslikes', 'DeslikeController');
//FIN EDITAR PERFIL

//EDITAR PERFIL
Route::resource('likeservicios', 'LikesServiciosController');
//FIN EDITAR PERFIL

//EDITAR PERFIL
Route::resource('deslikeservicios', 'DeslikeServiciosController');
//FIN EDITAR PERFIL

//EDITAR PERFIL
Route::resource('contacto', 'ContactoController');
//FIN EDITAR PERFIL

//EDITAR PERFIL
Route::resource('nosotros', 'NosotrosController');
//FIN EDITAR PERFIL

/*
Route::get('regular', function () {
    return view('regular.index');
});

Route::get('detalle', function () {
    return view('eventos.detalleEvento');
});
*/

Auth::routes([
    'verify' => true
]);

//home


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('editperfil/{id}/edit', 'HomeController@edit')->name('editperfil');




