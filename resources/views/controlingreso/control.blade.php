@extends('layout.info')

@section('contenido')

<!-- SECCION  -->
<main class="mainControIngr">
    <div class="mainControIngr__container contenido">

        
            
        
        <aside class="estadoEvento">
            <figure class="estadoEvento__imgContainer">
                <img class="estadoEvento__imgContainer" src="{{asset('storage').'/'.$eventosi->img}}" alt="">
            </figure>
            <div class="estadoEvento__h2Container">
                <h2 class="estadoEvento__h2"> ESTADO DEL EVENTO</h2>
            </div>

               
            <div class="tablaEstadoContainer">
                <!-- SECCION . TABLA DE ESTADO -->
                <table class="tablaEstado">
                    <!--BODY TABLA -->
                    <tbody class="tablaEstado__tbody">
                        <tr class="trtd__seccionItem">
                            <td class="td__text td__text--item">
                                    <a class="">nombre: </a>
                            </td>
                            <td class="td__text td__text--value">
                                <a class="">{{$eventosi->nombre_evento}}</a>
                            </td>
                        </tr>

                        <tr class="trtd__seccionItem">
                            <td class="td__container">
                                <a class="td__text">Aforo</a>
                            </td>
                            <td class="td__container">
                                <a class="td__text td__text--value">{{$eventosi->aforo}}</a>
                            </td>
                        </tr>

                        <tr class="trtd__seccionItem">
                            <td class="td__container">
                                <a class="td__text">Asistentes</a>
                            </td>
                            <td class="td__container">
                                <a class="td__text td__text--value">{{ $total->count() }}</a>
                            </td>
                        </tr>

                        <tr class="trtd__seccionItem">
                            <td class="td__container">
                                <a class="td__text">ultimo ingreso</a>
                            </td>
                            <td class="td__container">
                                
                                <a class="td__text td__text--value">123</a>
                               
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
           
        </aside>
        <section class="estadoEvento estadoEvento--validador">
            <div class="validador__container">
                <!-- VALIDADOR -->
                <div class="validador">
                    
                    <form id="formulario__envio" class="validador__form" action="{{route('validador.store')}}" method="POST">


                        @csrf
                        <!-- 1 TIULO -->
                        <div class="validador__textoContainer">
                            <div class="validador__h1Container">
                                <h1 class="validador__h1">VALIDADOR DE CODIGO</h1>
                            </div>
                        </div>
                        <!-- 2 FORM CODIGO -->
                        <div class="validador__codigo">
                            <label class="" for="">Codigo: </label>
                            <input type="text" name="codigo_qr" required>
                            <input type="hidden" name="id_evento" value="{{$eventosi->id_evento}}" >    
                            <div class="validadorForm__btnContainer">
                                <button id="validate_qr" class="validadorForm__btn btn_azulOscuro--inlineBlockEstatic" type="submit">validar</button>

                            </div>
                        </div>                           
                        <!-- 3 VALIDADOR  TEXTO-->
                        <div class="validador__textoContainer">
                            <div class="validador__h3Container">
                                <h3 class="validador__h3">Accion del asistente</h3>
                            </div>
                        </div>
                        <!-- 4 VALIDADOR  ACCION ASSITENTE-->
                        <div class="validador__accionContainer">
                            <div class="validador__accion">
                                <div class="radio__container">
                                   <input type="radio" name="entrada" id="valIn" value="entrada" checked>
                                    <label class="entrada" for="">Entrada: </label>
                                </div>
                                <div class="radio__container">
                                    <input type="radio" name="entrada" id="valIn" value="salida" >
                                    <label class="salida" for="">Salida: </label>
                                </div>
                            </div>

                        </div>
                        <!-- 5 RESULTADO DE VALIDACION -->


                            @if(Session::has('Falla'))
                            <!-- posicion de la altera-->
                            <div class="resultadoValidacion resultadoValidacion--rojo">
                                <figure class="resultadoValidacion__ImgContainer">
                                    <img class="resultadoValidacion__Img" src="{{url('images/pet-corp/stop/1.jpg')}}" alt="">
                                </figure> 
                                <div class="msgContainer">
                                    <strong>Cuidado</strong> 
                                </div>
                                <table class="tablaDate">
                                    <tr>
                                        <td>Fecha:</td>
                                        <td>18 Octubre 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Hora:</td>
                                        <td>22:56</td>
                                    </tr>
                                </table>
                            </div>
                            
                            @elseif(Session::has('Exito'))

                            <div class="resultadoValidacion resultadoValidacion--verde">
                                <figure class="resultadoValidacion__ImgContainer">
                                    <img class="resultadoValidacion__Img" src="{{url('images/pet-corp/pulgarUp/1.jpg')}}" alt="">
                                </figure> 
                                <div class="msgContainer">
                                    <strong>Felicitaciones</strong> 
                                </div>
                                <table class="tablaDate">
                                    <tr>
                                        <td>Fecha:</td>
                                        <td>18 Octubre 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Hora:</td>
                                        <td>22:56</td>
                                    </tr>
                                </table>
                            </div>
                            @elseif(Session::has('Existe'))

                            <div class="resultadoValidacion resultadoValidacion--rojo">
                                <figure class="resultadoValidacion__ImgContainer">
                                    <img class="resultadoValidacion__Img" src="{{url('images/pet-corp/duda/1.jpg')}}" alt="">
                                </figure> 
                                <div class="msgContainer">
                                    <strong>No lo se Rick, el boleto ya fue leido </strong>
                                </div>
                                <table class="tablaDate">
                                    <tr>
                                        <td>Fecha:</td>
                                        <td>18 Octubre 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Hora:</td>
                                        <td>22:56</td>
                                    </tr>
                                </table>
                            </div>
                            @elseif(Session::has('Nuevamente'))

                            <div class="resultadoValidacion resultadoValidacion--verde">
                                <figure class="resultadoValidacion__ImgContainer">
                                    <img class="resultadoValidacion__Img" src=" {{url('images/pet-corp/nuevamente/1.jpg')}}" alt="">
                                </figure> 
                                <div class="msgContainer">
                                    <strong>nuevamente </strong>
                                </div>
                                <table class="tablaDate">
                                    <tr>
                                        <td>Fecha:</td>
                                        <td>18 Octubre 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Hora:</td>
                                        <td>22:56</td>
                                    </tr>
                                </table>
                            </div>
                            @elseif(Session::has('Salida'))

                            <div class="resultadoValidacion resultadoValidacion--verde">
                                <figure class="resultadoValidacion__ImgContainer">
                                    <img class="resultadoValidacion__Img" src="{{url('images/pet-corp/bye/1.jpg')}}" alt="">
                                </figure> 
                                <div class="msgContainer">
                                    <strong>saliste </strong>
                                </div>
                                <table class="tablaDate">
                                    <tr>
                                        <td>Fecha:</td>
                                        <td>18 Octubre 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Hora:</td>
                                        <td>22:56</td>
                                    </tr>
                                </table>
                            </div>
                            @endif
                            <!-- fin posicion de la altera-->

                       
                    </form>

                </div>

            </div>
        </section>
    </div>
</main>


@endsection
