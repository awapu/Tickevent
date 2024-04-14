@extends('layout.registro')

@section('contenido')

    <!-- SECCION 1. REGISTRO -->
    <main class="registroMain">
        <section class="registro contenedor">

                <!-- SECCION 1.1 CONTAINER DEL FORMULARIO DE REGISTRO -->
                <div class="registro__contenido">
        
                    <!-- SECCION 1.1.1 FORMULARIO REGISTRO -->
                    <form class="registro__formulario" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="registro__logoContainer">
                            <a href=""><img src="{{url('/logo/logo_1.png')}}" alt=""></a>
                        </div>
                        <fieldset class="registro__fieldset utl-border-color-transparente">
                            <legend class="registro__legend"> Porfavor ingresa tus credenciales</legend>
                            <label for="name">Nombres</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" >
                            @error('name')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror

                            <label for="apellidos">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control @error('name') is-invalid @enderror" value="{{ old('apellidos') }}" >
                            @error('apellidos')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror

                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror

                            <label for="pass">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >
                            @error('password')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror

                            <label for="pass-r">Repetir contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    
                            <p class="registro__paragraph registro__paragraph--politicas">Al registrarme, acepto los <a href="">términos</a> y <a href="">políticas</a> de privacidad.</p>
    
                            <!-- Botton con spinner -->
                            <button type="submit" class="registro__btn" onclick="this.classList.toggle('registro__btn--loading')">
                                <span class="registro__text">registrate</span>
                            </button>
                            <!-- Fin Botton con spinner -->

                        </fieldset>
                        <fieldset class="registro__fieldset registro__fieldset--google utl-border-color-transparente">
                            <legend class="registro__legend"> o registrate con:</legend>
                            <a class="registro__btn registro__btn--Google" href="/google-auth/redirect">
                                <div class="registro__img--GoogleContainer">
                                    <img src="{{url('images/icon/google-search.png')}}" alt="">
                                </div>
                                <p class="registro__paragraph">Google</p>
                            </a>
                        </fieldset>

                    </form>
                    <p class="registro__paragraph registro__paragraph--captchaGoogle">Este sitio está protegido por reCAPTCHA y se aplican la <a href="">política de privacidad</a> y los <a href="">términos de servicios</a> de <span>Google.</span>  </p>  
                    
                </div>
                <!-- SECCION 1.2 CONTAINER DEL BANNER -->
                <div class="registro__contenido registro__contenido--banner">

                    <!-- SECCION 1.2.1 CONTAINER DEL IMG BANNER -->
                    <div class="registro__img--bannerContainer">
                        <img src="{{url('images/banner/banner-1.jpg')}}" alt="">
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