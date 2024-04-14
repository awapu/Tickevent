<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Tickevent</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body onload="myFunction()" class="">

            <!-- SECCION 1. HEADER PRINCIPAL -->
            <section class="headerPrincipal">
                <!-- SECCION 1.1 HEADER -->
                <header class="headerPrincipal__header headerPrincipal__header--userAccount utl-position-relative">
                    <div class="headerPrincipal__logo--users">
                        <a href=""><img src="{{url('logo/logo_1.png')}}" alt=""></a>
                    </div>
                    <div class="header__usersAccount contenedor">
                        @csrf
                        @foreach ($users as $user) 
                        @endforeach
                        @if(is_null($user->cedula))

                            <div class="headerPrincipal__container contenedor">
                               <!-- SECCION 1.1.1 NAVEGACION PRINCIPAL -->
                                <ul class="menu-vertical menu-vertical--hover">
                                    <li class="item-vert">
                                        <a class="enlace-menu-princip" href="{{route( 'usuarioedit.edit',$user->email)}}">Conviertete en promotor</a>
                                    </li>
                                </ul>
                            </div>
                       
                        @else
                            <!-- SECCION 1.1.1 HEADER NAVEGACION PROMOTOR----------------------------------------------------------------------- -->
                            <section class="seccion__navUser seccion__navUser--promotor">
                            
                                <nav class="nav__user nav__user--promotor">
                                    <ul class="lista">
                                        <li class="lista__item lista__item--click lista__item--click1 lista__item--1">
                                            <div class="lista__btn lista__btn--1 lista__btn--1click">
                                                <!-- SECCION 1.1.2.1 CONTENEDOR DE IMAGEN DE PERFIL PROMOTOR -->
                                                <figure class="lista__imgUsers">
                                                    <img src="{{url('images/perfil/foto_bg_empresa.png')}}" alt="">
                                                </figure>
                                                <a class="lista__link lista__link--1 lista__btnTextValue">Opciones</a>
                                                <div class="icon__container icon__container--1">
                                                    <img class="icon_arrow icon_arrow--1" src="{{url('images/buttons/flecha1.png')}}" alt="">
                                                </div>
                                            </div>
                                            <!-- LISTA CONTENEDORA PRINCIPAL DE LOS ITEMS -->
                                            <ul class="lista__mostrar lista__mostrar--1 lista__mostrar--1promotor">

                                                <li class="lista__item lista__item--click lista__item--2">
                                                    <div class="lista__btn lista__btn--2">
                                                        <a class="lista__link lista__link--2" href="{{ route('comercial.index') }}">Panel Administrador</a>
                                                    </div>
                                                </li>
                                                <li class="lista__item lista__item--click lista__item--2">
                                                    <div class="lista__btn lista__btn--2">
                                                        <a class="lista__link lista__link--2" href="{{ route('indexservicios.index') }}">Contrata Servicios</a>
                                                    </div>
                                                </li>

                                                <li class="lista__item lista__item--click lista__item--click2 lista__item--2">
                                                    <div class="lista__btn lista__btn--2 lista__btn--2promotor lista__btn--2click">
                                                        <a class="lista__link lista__link--click lista__link--2" href="">Crear</a>
                                                        <div class="icon__container icon__container--2">
                                                            <img class="icon__arrow icon__arrow--2" src="{{url('images/buttons/flecha2.png')}}" alt="">
                                                        </div>                                
                                                    </div>
                                                    <ul class="lista__mostrar lista__mostrar--2 lista__mostrar--2promotor">
                                                        <li class="lista__item lista__item--3">
                                                            <div class="lista__btn lista__btn--3">
                                                                <a class="lista__link lista__link--3" href="{{route('eventos.index')}}">Evento</a>
                                                            </div>

                                                        </li>
                                                        <li class="lista__item lista__item--3">
                                                            <div class="lista__btn lista__btn--3">
                                                                <a class="lista__link lista__link--3" href="{{route('servicios.create')}}">Servicios</a>
                                                            </div>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav> 
                            </section>
                            <!-- SECCION 1.1.2.1 FICHA DE PERFIL PROMOTOR ----------------------------------------->
                            <div class="fichaPerfil__container fichaPerfil__container--promotor">
                                    @if (!empty($user->imgbussines))
                                        <figure class="fichaPerfil__imgContainer">
                                            <img src="{{asset('storage').'/'.$user->imgbussines}}" alt="">
                                        </figure>
                                    @else 
                                        <figure class="fichaPerfil__imgContainer">
                                            <img src="{{url('images/perfil/foto_bg_empresa.png')}}" alt="">
                                        </figure>
                                    @endif

                                        
                                    @if(!empty($user->razonSocial))
                                        <div class="fichaPerfil__nombreCtaRegular">
                                            <h3>{{ $user->razonSocial }}</h3>
                                        </div>
                                    @else
                                        <div class="fichaPerfil__nombreCtaRegular">
                                            <h3>Promueve Eventos</h3>
                                        </div>
                                    @endif
                            </div> 

                        @endif



                        <!-- SECCION 1.1.1 HEADER NAVEGACION REGULAR----------------------------------------------------------------------- -->
                        <section class="seccion__navUser seccion__navUser--regular">
                            <!-- SECCION 1.1.1 NAVEGACION PRINCIPAL -->
                            <nav class="nav__user nav__user--regular">
                                <ul class="lista">
                                    <li class="lista__item lista__item--click lista__item--click1 lista__item--1">
                                        <div class="lista__btn lista__btn--1 lista__btn--1regular lista__btn--1click">
                                            <!-- SECCION 1.1.2.1 CONTENEDOR DE IMAGEN DE PERFIL REGULAR -->
                                            <figure class="lista__imgUsers">
                                                <img src="{{url('images/perfil/foto_bg_blanco_1.png')}}" alt="">
                                            </figure>
                                            <a class="lista__link lista__link--1 lista__btnTextValue">Opciones</a>
                                            <div class="icon__container icon__container--1">
                                                <img class="icon__arrow icon__arrow--1" src="{{url('images/buttons/flecha1.png')}}" alt="">
                                            </div>
                                        </div>
                                        <!-- LISTA CONTENEDORA PRINCIPAL DE LOS ITEMS -->
                                        <ul class="lista__mostrar lista__mostrar--1 lista__mostrar--1regular">
                                            <li class="lista__item lista__item--click lista__item--2">
                                                <div class="lista__btn lista__btn--2">
                                                    <a class="lista__link lista__link--2" href="{{route('compras.index')}}">Mis eventos</a>
                                                </div>
                                            </li>
                                            <li class="lista__item lista__item--3">
                                                <div class="lista__btn lista__btn--3">
                                                    <a class="lista__link lista__link--3" href="{{route('comunidad.index')}}">Cerca</a>
                                                </div>

                                            </li>
                                            <li class="lista__item lista__item--click lista__item--2">
                                                <div class="lista__btn lista__btn--2">
                                                    <a class="lista__link lista__link--2" href="{{route('home')}}">Inicio</a>
                                                </div>
                                            </li>

                                            <li class="lista__item lista__item--click lista__item--2">
                                                <div class="lista__btn lista__btn--2">
                                                    <a class="lista__link lista__link--2" href="{{ route('editprofile.show', $user->id) }}">Perfil</a>
                                                </div>
                                            </li>
                                            <!-- 
                                                <li class="lista__item">
                                                    <div class="lista__btn lista__btn--2 lista__btn--2regular lista__btn--2click">
                                                        <a class="lista__link lista__link--click lista__link--2" href="">Perfil</a>
                                                        <div class="icon__container icon__container--2">
                                                            <img class="icon__arrow icon__arrow--2" src="{{url('images/buttons/flecha2.png')}}" alt="">
                                                        </div>                                
                                                    </div>
                                               
                                                    <ul class="lista__mostrar lista__mostrar--2 lista__mostrar--2regular">
                                                        <li class="lista__item lista__item--3">
                                                            <div class="lista__btn lista__btn--3">
                                                                <a class="lista__link lista__link--3" href="">Cristian </a>
                                                            </div>
                                                        </li>
                                                        <li class="lista__item lista__item--3">
                                                            <div class="lista__btn lista__btn--3">
                                                                <a class="lista__link lista__link--3" href="">Andamiosssssssssss y tarimas S.A.S</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                -->
                                            </li>
                                            <li class="lista__item lista__item--click lista__item--2">
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
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </section>
                        
                        <!-- SECCION 1.1.2.1 FICHA DE PERFIL REGULAR ----------------------------------------->
                        <div class="fichaPerfil__container">
                            @if(!empty($user->imgusr))
                                <figure class="fichaPerfil__imgContainer">
                                    <img src="{{asset('storage').'/'.$user->imgusr}}" alt="">
                                </figure>
                            @else
                                <figure class="fichaPerfil__imgContainer">
                                    <img src="{{url('images/perfil/foto_bg_blanco_1.png')}}" alt="">
                                </figure>
                            @endif
                            <div class="fichaPerfil__nombreCtaRegular">
                                @foreach ($users as $user) 
                                    <h3>{{ $user->name }}</h3>
                                @endforeach   
                            </div>
                        </div>
                    
                    </div>

                </header> 

            </section>
            
        @yield('contenido')

            <!-- SECCION 4. FOOTER -->
            <footer class="footer">
                <div class="contenedor contenido-footer">
                    <section class="footer-info">
                        <div class="tarjeta-footer">
                            <div class="capsula-tarjeta-footer">
                                <h2 class="titulo-targeta-footer">tickevent</h2>
                                <ul>
                                    <li><a href="">Quienes somos</a></li>
                                    <li><a href="">Funcionamiento</a></li>
                                    <li><a href="">Porque elegirnos</a></li>
                                    <li><a href="">Tarifas</a></li>
                                </ul>                       
                            </div>
                        </div>

                        <div class="tarjeta-footer">
                            <div class="capsula-tarjeta-footer">
                                <h2 class="titulo-targeta-footer">mis tickets</h2>
                                <ul>
                                    <li><a href="">Reenviar tickets</a></li>
                                    <li><a href="">cancelar tickets</a></li>
                                    <li><a href="">soporte tecnico</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tarjeta-footer">
                            <div class="capsula-tarjeta-footer">
                                <h2 class="titulo-targeta-footer">ciudades</h2>
                                <ul>
                                    <li><a href="">Que hacer en bogota</a></li>
                                    <li><a href="">Que hacer en Cali</a></li>
                                    <li><a href="">Que hacer en Medellin</a></li>
                                    <li><a href="">Conciertos en Santa Marta</a></li>
                                    <li><a href="">Conciertos en Cartagena</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tarjeta-footer">
                            <div class="capsula-tarjeta-footer">
                                <h2 class="titulo-targeta-footer">siguenos</h2>
                                <ul>
                                    <li>
                                        <figure class="icono-redes icono-redes-fb"><img src="images/icon/icon_facebook.png" alt=""></figure>
                                        <a href="">Facebook</a>
                                    </li>
                                    <li>
                                        <figure class="icono-redes icono-redes-i"><img src="images/icon/icon_instagram.png" alt=""></figure>
                                        <a href="https://www.instagram.com/invites/contact/?i=gggqjj9wzzrn&utm_content=so8b5xk">Instagram</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </section>

                    <div class="derechos-autor">
                        <p>2023 © Tickevent. Todos los Derechos Reservados.</p>
                        <p>Política de privacidad    |    términos y condiciones</p>
                    </div>

                </div>
            </footer>

            <!-- EVITAR RE-ENVIO DE FORMULARIO-->
            <script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
    </body>
</html>
