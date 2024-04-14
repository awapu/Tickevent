@extends('layout.about')

@section('contenido')

    <!-- SECCION 1. SECCION ABOUT -->
    <main class="sectionAbout">
        <div class="contenedor sectionAbout__container">
            <!-- NUESTRA HISTORIA -->
            <div class="nuestraHistoria">
                <h1 class="nuestraHistoria__h1">NUESTRA HISTORIA</h1>
                <p class="nuestraHistoria__txt">
                    En TickEvent, estamos comprometidos con la pasión por la creación y celebración de
                    eventos excepcionales. Nuestra historia se basa en la idea de simplificar la forma en
                    que se organizan y disfrutan los eventos. Fundada por un equipo apasionado por el
                    entretenimiento y la comunidad, TickEvent es una plataforma que conecta a
                    organizadores de eventos, proveedores de servicios y entusiastas de eventos en un
                    solo lugar.
                </p>
                <div class="nuestraHistoria__imgContainer">
                    <img class="nuestraHistoria__img" src="{{url('images/about/about_2.jpg')}}" alt="">
                </div>
            </div>
            <!-- MISION -->
            <section class="seccionMision">
                <div class="seccionMision__box">
                    <div class="seccionMision__imgContainer">
                        <img class="seccionMision__img" src="{{url('images/about/about_3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="seccionMision__box">
                    <h1 class="seccionMision__h1">MISION</h1>
                    <p class="seccionMision__txt">
                        Nuestra visión en TickEvent es liderar la industria de los eventos,
                        proporcionando herramientas avanzadas y tecnología para que los
                        organizadores y los asistentes creen experiencias únicas.
                        Queremos inspirar a la comunidad a celebrar, conectarse y
                        compartir momentos especiales a través de eventos memorables
                        en todo el mundo.
                             
                    </p>
                </div>
            </section>
            <!-- VISION -->
            <section class="seccionMision seccionMision--vision">
                <div class="seccionMision__box">
                    <div class="seccionMision__imgContainer">
                        <img class="seccionMision__img" src="{{url('images/about/about_4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="seccionMision__box">
                    <h1 class="seccionMision__h1">VISION</h1>
                    <p class="seccionMision__txt">
                        Nuestra misión en TickEvent es simplificar la planificación, gestión
                        y promoción de eventos para todos. Al reunir a usuarios
                        habituales, organizadores de eventos y proveedores de productos
                        y servicios en un entorno confiable y fácil de usar, fomentamos un
                        sentido de comunidad y hacemos que los eventos sean accesibles
                        para todos. 
                    </p>
                </div>
            </section>
            <!-- BANNER -->
            <section class="seccionBanner">
                <div class="seccionBanner__Container">
                    <div class="seccionBanner__imgContainer">
                        <img class="seccionBanner__img" src="{{url('images/about/about_5.jpg')}}" alt="">
                    </div>
                    <div class="seccionBanner__transparencia">
                        <p class="seccionBanner__transparenciaH2">
                            Únase a la comunidad TickEvent hoy y comience a
                            planificar su próximo evento con facilidad
                        </p>
                    </div>
                </div>

            </section>
        </div>
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