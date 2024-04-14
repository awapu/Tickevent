@extends('layout.verify')

@section('contenido')

<!-- FIn primer bloque -->

        <!-- SECCION 1. REGISTRO -->
        <main class="registroMain">
            <section class="registro contenedor">
    
                    <!-- SECCION 1.1 CONTAINER DEL FORMULARIO DE REGISTRO -->
                    <div class="registro__contenido registro__contenido--confirmacionPage">
            
                        <!-- SECCION 1.1.1 FORMULARIO REGISTRO -->
                        <form class="registro__formulario registro__formulario--confirmacionPage">
                            <!-- <div class="registro__logoContainer">
                                <a href=""><img src="../build/img/logotipo/logo_1.png" alt=""></a>
                            </div> -->
                            <fieldset class="registro__fieldset utl-border-color-transparente">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">{{ __('Verifique su correo electrónico') }}</div>
                                                <br>
                                                <div class="card-body">
                                                    @if (session('resent'))
                                                        <div class="alert alert-success" role="alert">
                                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                                        </div>
                                                    @endif
                                
                                                    {{ __('Antes de continuar, consulte su correo electrónico para obtener un enlace de verificación.') }}
                                                    <br>
                                                    <br>
                                                    {{ __('Si no recibiste el correo electrónico') }},
                                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                                        @csrf
                                                        <button type="submit" class="registro__btn">{{ __('Clic aquí para solicitar otro') }}</button>.
                                                    </form>
                                                </div>
                                                <div class="lista__btn lista__btn--2">
                                                    <a class="lista__link lista__link--2" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                     {{ __('Salir') }}
                                                 </a>
             
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                     @csrf
                                                 </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </fieldset>
                            <!-- <fieldset class="registro__fieldset registro__fieldset--google utl-border-color-transparente">
                                <legend class="registro__legend"> o registrate con:</legend>
                                <a class="registro__btn registro__btn--Google" href="">
                                    <div class="registro__img--GoogleContainer">
                                        <img src="../build/img/icon/google-search.png" alt="">
                                    </div>
                                    <p class="registro__paragraph">Google</p>
                                </a>
                            </fieldset> -->
    
                        </form>
                        <p class="registro__paragraph registro__paragraph--captchaGoogle">Este sitio está protegido por reCAPTCHA y se aplican la <a href="">política de privacidad</a> y los <a href="">términos de servicios</a> de <span>Google.</span>  </p>  
                        
                    </div>
                    <!-- SECCION 1.2 CONTAINER DEL BANNER -->
                    <div class="registro__contenido registro__contenido--confirmacionPage registro__contenido--banner">
    
                        <!-- SECCION 1.2.1 CONTAINER DEL IMG BANNER -->
                        <div class="registro__img registro__img--confirmacionPage registro__img--bannerContainer">
                            <img src="{{url('/images/pet-corp/tapar_ojos/6.png')}}" alt="">
                        </div>
                    </div>
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
                                        <img src="{{url('images/icon/google-search.png')}}" alt="">
                                    </div>
                                    <p>Google</p>
                                </a>
                            </fieldset>
                        <p class="login__paragraph">No tienes una cuenta? <a href="/register">Registrate</a> </p>  
                    </form>
                    
                </div>
                <div class="login__contenido">

                    <div class="login__petContainer">
                        <img src="{{url('images/pet-corp/1.png')}}" alt="">
                    </div>
                </div>

            </section> 
    
        </main>



@endsection
