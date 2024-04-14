@extends('layout.perfil')

@section('contenido')


    <!-- SECCION . INFORMATIVOS PARA DETALLE DE EVENTO -->
    <section class="informativosDetalle">
        <div class="informativosDetalle__container contenedor">
            <div class="informativosDetalle__textContainer">
                <h1 class="informativosDetalle__text">{{$serviciosi->nombre_serv}}</h1>
            </div>
            <figure class="informativosDetalle__imgContainer">
                <h2 class="informativosDetalle__imgText">Imprime lo necesario <span>Cuidemos el planeta</span> </h2>
                <img class="informativosDetalle__img" src="{{url('images/informativo/informativo_1.png')}}" alt="" >
            </figure>
        </div>
        
    </section>
    
    <!-- SECCION . DETALLE DEL EVENTO -->
    <main class="detalleEvento">
        <section class="detalleEvento__container contenedor">

            <!-- SECCION . BANNER PUBLICITARIO DEL EVENTO -->
            <div class="bannerEvento">
                <!-- SECCION . CONTENEDOR DE IMAGEN DEL EVENTO -->
                <figure class="bannerEvento__imgContainer">
                    <img class="bannerEvento__img" src="{{asset('storage').'/'.$serviciosi->imagen}}" alt="">
                </figure>
            </div>

            <!-- SECCION . FICHA DE INFORMACION DETALLADA DEL EVENTO -->
            <div class="bannerEvento bannerEvento--informacion">
                <!-- SECCION . TABLA DE INFORMACION DETALLADA DEL EVENTO -->
                <table class="bannerEvento_datos">
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Estado: </p>
                        </td>
                        <td class="bannerEvento_icon">
                            <img src="{{'/images/icon/candado_abierto.png'}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">Activo</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Categoria: </p>
                        </td>
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/plazas_disponibles.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$serviciosi->id_categorias_servicio}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">fecha publicacion: </p>
                        </td>
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/fecha.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$serviciosi->created_at}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Telefono contacto: </p>
                        </td>                       
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/input/telefono.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$serviciosi->telefono}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Correo contacto: </p>
                        </td>                       
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/input/correo.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$serviciosi->correo}}</p>
                        </td>
                    </tr>
                </table>
           
            </div>
            <!-- SECCION . INFORMACION EXTENDIDA DEL EVENTO -->
            <div class="bannerEvento bannerEvento--infoAdicional">
                <!-- SECCION . CONTENEDOR DE IMAGEN DEL EVENTO -->
                <div class="infoAdicional">
                    <div class="infoAdicional__h2Container">
                        <h2 class="infoAdicional__h2">informacion del servicio</h2>
                    </div>
                    <p class="infoAdicional__paragraph" >
                        {{$serviciosi->descripcion}}
                    </p>
                </div>
            </div>
        </section>
    </main>



     <!-- SECCION 5. LOGIN -->
     <section class="login">
        <div class="login__contenido">
            <a class="login__cierre" href="">cerrar [X]</a>

            <h2 class="login__heading">Iniciar Sesión 
                <span>¡ Bienvenido !</span> 
            </h2>
            <form class="login__formulario" method="POST" action="{{ route('login') }}">
            @csrf
                <fieldset class="login__fieldset">
                    <legend class="login__legend"> Porfavor ingresa tus credenciales</legend>
                    <label for="correo">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')

                        <strong>{{ $message }}</strong>

                    @enderror

                    <label for="correo">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')

                            <strong>{{ $message }}</strong>

                    @enderror

                    <button class="login___btnIngresar" type="submit">Iniciar sesion</button>
                </fieldset>
                <fieldset class="login__fieldset">
                    <legend class="login__legend"> o Inicia sesión con:</legend>
                    <a class="login__btnGoogle" href="/google-auth/redirect">
                        <div class="login__img--GoogleContainer">
                            <img src="{{url('/images/icon/google-search.png')}}" alt="">
                        </div>
                        <p>Google</p>
                    </a>
                </fieldset>
                <p class="login__paragraph">No tienes una cuenta? <a href="/register">Registrate</a> </p>  
            </form>
            
        </div>
        <div class="login__contenido">

            <div class="login__petContainer">
                <img src="{{url('/images/pet-corp/1.png')}}" alt="">
            </div>
        </div>
    </section> 


@endsection