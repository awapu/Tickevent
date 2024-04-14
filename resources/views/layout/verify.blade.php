<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- CSS leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
        <link rel='stylesheet' href='https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css'>

         <!-- Script Leaflet -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

        <script src='https://unpkg.com/leaflet@1.7.1/dist/leaflet.js'></script>
        <script src='https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js'></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>Tickevent</title>

    </head>
    <body class="antialiased">


    <!-- SECCION 1. SLIDER -->
    <section class="headerPrincipal">
        <!-- SECCION 1.1 HEADER -->
        <header class="headerPrincipal__header utl-position-relative">
            <div class="headerPrincipal__container contenedor">
                <div class="headerPrincipal__logo">
                    <a href=""><img src="{{url('/logo/logo_1.png')}}" alt=""></a>
                </div>
                <!-- SECCION 1.1.1 NAVEGACION PRINCIPAL -->
                <ul class="menu-vertical menu-vertical--hover">
                    <li class="item-vert">
                        <a class="enlace-menu-princip" href="nosotros">Nosotros</a>
                    </li>
                    <li class="item-vert">
                        <a class="enlace-menu-princip" href="servicios">Servicios</a>
                    </li>
                    <li class="item-vert">
                        <a class="enlace-menu-princip" href="/">INICIO</a>
                    </li>
                </ul>

                
                <a class="headerPrincipal__btn btnHeader" href="#">
                    ingresar 
                </a>
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
    </body>
</html>
