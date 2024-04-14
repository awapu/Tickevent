@extends('layout.perfil')

@section('contenido')

    <!-- SECCION  -->
    <main class="mainManagement">
        <div class="mainControIngr__container contenido">
            
            <aside class="estadoEvento estadoEvento--controles">
                <a class="estadoEvento__h2Container estadoEvento__h2Container--a" href="{{route('servicios.edit', $serviciosi->id )}}">
                    <div class="estadoEvento__h2Border">
                        <h2 class="estadoEvento__h2">MODIFICAR SERVICIO</h2>
                        <div class="iconContainer">
                            <img clas="icon" src="../build/img/buttons/editar.png" alt="">
                        </div>                    
                    </div>
                </a>

            </aside>

            <aside class="estadoEvento estadoEvento--fichaImgEvento">
                <div class="estadoEvento__h1Container">
                    <div class="estadoEvento__h1Border">
                        <h1 class="estadoEvento__h1">{{$serviciosi->nombre_serv}}</h1>                   
                    </div>

                </div>
                <figure class="estadoEvento__imgContainer">
                    <div class="estadoEvento__imgContainerAux">
                        <img class="estadoEvento__img" src="{{asset('storage').'/'.$serviciosi->imagen}}" alt="">                    
                    </div>
                </figure>
            </aside>

            <aside class="estadoEvento estadoEvento--datos">
                <!-- BOTON DESPLEGABLE 1 -->
                <div class="estadoEvento__h2Container">
                    <div class="estadoEvento__h2Border">

                        <div class="iconContainer">
                            <img clas="icon" src="../build/img/buttons/datos_evento.png" alt="">
                        </div>
                        <h2 class="estadoEvento__h2">DATOS DEL SERVICIO</h2>

                        <figure class="iconContainer iconContainer--arrow">
                            <img class="iconArrow" src="../build/img/buttons/flecha1.png" alt="">
                        </figure>                    
                    </div>
                </div>     
                <!-- CAJA  DESPLEGABLE 1 -->
                <div class="tablaEstadoContainer">
                        <!-- SECCION . TABLA DE ESTADO -->
                    <table class="tablaEstado">
                            <!--BODY TABLA -->
                        <tbody class="tablaEstado__tbody">
                            <tr class="trtd__seccionItem">

                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Categoria</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$serviciosi->id_categorias_servicio}}</a>
                                </td>
                            </tr>

                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Descripcion</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$serviciosi->descripcion}}</a>
                                </td>
                            </tr>

                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Telefono</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$serviciosi->telefono}}</a>
                                </td>
                            </tr>
                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Correo</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$serviciosi->correo}}</a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                </div> 
    
            </aside>

        </div>
    </main>

@endsection
