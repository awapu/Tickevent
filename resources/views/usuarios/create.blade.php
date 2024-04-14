@extends('layout.registro')

@section('contenido')

    <!-- SECCION 1. REGISTRO -->
    <main class="registroMain">
        <section class="registro contenedor">

                <!-- SECCION 1.1 CONTAINER DEL FORMULARIO DE REGISTRO -->
                <div class="registro__contenido">
        
                    <!-- SECCION 1.1.1 FORMULARIO REGISTRO -->
                    <form class="registro__formulario" method="POST" action="{{ route('register.create') }}">
                         @csrf
                        <div class="registro__logoContainer">
                            <a href=""><img src="{{url('/logo/logo_1.png')}}" alt=""></a>
                        </div>
                        <fieldset class="registro__fieldset utl-border-color-transparente">
                            <legend class="registro__legend"> Porfavor ingresa tus credenciales</legend>
                            <label for="nombres">Nombres</label>
                            <input type="text" name="nombre">

                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos">

                            <label for="correo">E-mail</label>
                            <input type="email" name="correo">

                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass">
                            
                            <label for="pass-r">Repetir contraseña</label>
                            <input type="password" name="pass-r">
    
                            <p class="registro__paragraph registro__paragraph--politicas">Al registrarme, acepto los <a href="">términos</a> y <a href="">políticas</a> de privacidad.</p>
    
                             <button class="registro__btn" type="submit">registrate</button>
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
                        <img src="images/banner/banner-1.jpg" alt="">
                    </div>
                </div>
        </section>
    </main>

@endsection