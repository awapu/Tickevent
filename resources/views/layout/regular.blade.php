<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Tickevent</title>


    </head>
    <body class="antialiased">

        <!-- SECCION 1. HEADER -->
        <header class="header header-user-account">
            <div class="contenido-header contenido-header-user-account">
                <!-- SECCION 1.1 LOGO -->
                <div class="logo logo--pet">
                    <img class="pic-pet" src="{{url('/logo/pet-corp/2.png')}}" alt="">
                </div>
                <!-- SECCION 1.2 BARRA DE NAVEGACION -->
                <nav class="navegacion-principal">
                    <ul class="menu-horizontal navegacion-principal">
                        <li class="li-menu-hori">
                            <a class="enlace-menu-hori enlace-menu-hori--hover" onmouseover="" onmouseout="" href="#">Administrar</a>
                            <ul class="menu-vertical menu-vertical--hover" >
                                <li class="li-menu-vert"><a class="enlace-menu-vert" href="">eventos</a></li>
                                <li class="li-menu-vert"><a class="enlace-menu-vert" href="">clientes</a></li>
                                <li class="li-menu-vert"><a class="enlace-menu-vert" href="">servicios</a></li>
                            </ul>
                        </li>
                        <li class="li-menu-hori">
                            <a class="enlace-menu-hori enlace-menu-hori--hover" href="#">Estadisticas</a>
                            <ul class="menu-vertical menu-vertical--hover">
                                <li class="li-menu-vert"><a class="enlace-menu-vert" href="">por categoria</a></li>
                                <li class="li-menu-vert"><a class="enlace-menu-vert" href="">por zonas</a></li>
                            </ul>
                        </li>
                        <li class="li-menu-hori li-menu-hori--avatar">
                <!-- SECCION 1.3 FICHA PERFIL USUARIO -->
                <div class="ficha-perfil">
                    <div class="contenido-ficha-perfil">
                        <figure class="foto-perfil">
                            <img src="{{url('/images/perfil-business-pic/foto_bg_blanco_1.png')}}" alt="">
                            <figcaption>
                                <h3 class="heading-nombre-negocio" >nombre negocio</h3>
                            </figcaption>
                        </figure>
                        <div class="modal modal-gestionar-cuenta">
                            <div class="contenido-modal-gestionar-cuenta">
                                <a class="btn btn-administrar-cuenta" href=""><p>Administrar Cuenta Tickevent</p></a>
                                <table>
                                    <tr>    <td>Negocio: </td><td>promotores s.a.s</td> </tr>
                                    <tr>    <td>Nombre: </td><td>Alberto Berrios</td>   </tr>
                                    <tr>    <td>Correo: </td><td>albertoberrios@gmail.com</td>  </tr>
                                    <tr>    <td></td><td>salir</td></tr> 
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- SECCION 1.2 CIERRE  -->
                </div>
                        </li>
                        <li class="li-menu-hori"> 
                            <a class="enlace-menu-hori enlace-menu-hori--hover" href="#">Publicar</a>
                            <ul class="menu-vertical menu-vertical--hover">
                                <li class="li-menu-vert"><a class="enlace-menu-vert" href="crear-evento.php">eventos</a></li>
                                <li class="li-menu-vert"><a class="enlace-menu-vert" href="">servicios</a></li>
                            </ul>  
                        </li>
                        <li class="li-menu-hori"> 
                            <a class="enlace-menu-hori enlace-menu-hori--hover" href="/../tickevet-v8/includes/conn/logout.php">Salir</a>                      
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
                


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
