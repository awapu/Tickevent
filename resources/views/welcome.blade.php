@extends('layout.public')

@section('contenido')
<section class="listado-eventos">
    <section class="contenedor contenido-listado-eventos">

        <!--SECCION 3.1 CARD #1 -->
        @foreach($eventosi as $evento)
        <div class="tarjeta-evento">
            
            <figure class="img-evento">
                <img class="pic-img" src="{{asset('storage').'/'.$evento->img}}" alt="">
            </figure>
            <div class="info-evento">

                <table class="infoEvento__tabla">
                    <tr> 
                        <th colspan="2" class="tblInfoCard__col tblInfoCard__col--head">
                            <p class="InfoCardTh__dato">{{ $evento-> nombre_evento}}</p>
                        </th> 
                    </tr>
                    <tr>
                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <div class="tablaInfoCard__iconContainer">
                                <img class="tablaInfoCard__icon" src="{{url('images/icon/fecha_blanco.png')}}" alt="">
                            </div>
                        </td>

                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <p class="InfoCardTd__dato">{{$evento->fecha_incio}}</p>  
                        </td> 
                    </tr>
                    <tr> 
                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <div class="tablaInfoCard__iconContainer">
                                <img class="tablaInfoCard__icon" src="{{url('images/icon/cronometro_blanco.png')}}" alt="">
                            </div>
                        </td>

                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            
                            <p class="InfoCardTd__dato">Faltan  {{ now()->diffInDays($evento->fecha_incio) }} Dias</p>
                        </td> 
                    </tr>
                    <tr> 
                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <div class="tablaInfoCard__iconContainer">
                                <img class="tablaInfoCard__icon" src="{{url('images/icon/lugar_blanco.png')}}" alt="">
                            </div>
                        </td>

                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <p class="InfoCardTd__dato">{{$evento->lugar}} , {{$evento->Ciudad}}</p>
                        </td> 
                    </tr>
                    <tr> 
                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <div class="tablaInfoCard__iconContainer">
                                <img class="tablaInfoCard__icon" src="{{url('images/icon/tiquete_blanco.png')}}" alt="">
                            </div>
                        </td>

                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <p class="InfoCardTd__dato">Desde: $ {{$evento->costoboleta}} COP</p>
                        </td> 
                    </tr>
                    <tr> 
                        <td class="tblInfoCard__col tblInfoCard__col--body">
                            <div class="tablaInfoCard__iconContainer">
                                <img class="tablaInfoCard__icon" src="" alt="">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cardEvent__btnContainer">
                <a class="cardEvent__btn btn_amarillo--BlockEstaticBorder0_24" href="{{ route('detEvento.show', $evento->id_evento) }}">
                    ir a evento
                </a> 
            </div>
        
        </div>
        @endforeach

    </section>

</section>
            

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
                                        <img src="images/icon/google-search.png" alt="">
                                    </div>
                                    <p>Google</p>
                                </a>
                            </fieldset>
                        <p class="login__paragraph">No tienes una cuenta? <a href="/register">Registrate</a> </p>  
                    </form>
                    
                </div>
                <div class="login__contenido">

                    <div class="login__petContainer">
                        <img src="images/pet-corp/1.png" alt="">
                    </div>
                </div>

            </section> 

            

        
@endsection