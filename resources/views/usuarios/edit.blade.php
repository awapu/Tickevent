@extends('layout.perfil')

@section('contenido')

    <!-- SECCION 1. REGISTRO -->
    <main class="registroMain">
        <section class="registro contenedor">

                <!-- SECCION 1.1 CONTAINER DEL FORMULARIO DE REGISTRO -->
                <div class="registro__contenido">
                    
                    
                    
                    @foreach($users as $user2)
                    <!-- SECCION 1.1.1 FORMULARIO REGISTRO -->
                     <form class="registro__formulario" action="{{ route('usuarioedit.update', $user2->id )}}" method="post">
                        
                         @csrf

                         @method('PATCH')
                        <div class="registro__logoContainer">
                            <a href=""><img src="{{url('/logo/logo_1.png')}}" alt=""></a>
                        </div>
                        <fieldset class="registro__fieldset utl-border-color-transparente">
                            
                            <h3 class="registro__legend"> Para poder crear eventos, llena los campos en blanco</h3>
                            <br>
                            <label for="nombres">Nombres</label>
                            <input type="text" name="name" value="{{$user2->name}}" required>

                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" value="{{$user2->apellidos}}" required>

                            <label for="correo">E-mail</label>
                            <input type="email" name="email" value="{{$user2->email}}" required>

                            <label for="cedula">cedula</label>
                            <input type="text" name="cedula" required>

                            <label for="Edad">Edad</label>
                            <input type="text" name="edad" required>

                            <label for="Edad">Razon Social</label>
                            <input type="text" name="razonSocial" required>
                            
                            <p class="registro__paragraph registro__paragraph--politicas">Al actualizar, acepto los <a href="">términos</a> y <a href="">políticas</a> de privacidad.</p>
    
                             <button class="registro__btn" type="submit">Actualizar</button>
                        </fieldset>
                    </form>
                    <p class="registro__paragraph registro__paragraph--captchaGoogle">Este sitio está protegido por reCAPTCHA y se aplican la <a href="">política de privacidad</a> y los <a href="">términos de servicios</a> de <span>Google.</span>  </p>  
                    @endforeach
                </div>
                <!-- SECCION 1.2 CONTAINER DEL BANNER -->
                <div class="registro__contenido registro__contenido--banner">

                    <!-- SECCION 1.2.1 CONTAINER DEL IMG BANNER -->
                    <div class="registro__img--bannerContainer">
                        <img src="{{url('/images/banner/your-bussines.jpg')}}" alt="">
                    </div>
                </div>
        </section>
    </main>

@endsection