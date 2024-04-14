@extends('layout.perfil')

@section('contenido')

    <!-- SECCION  -->
    <main class="mainManagement">
        <div class="mainControIngr__container contenido">
            
            <aside class="estadoEvento estadoEvento--controles">
                <a class="estadoEvento__h2Container estadoEvento__h2Container--a" href="{{route('eventos.edit', $eventosi->id_evento)}}">
                    <div class="estadoEvento__h2Border">
                        <h2 class="estadoEvento__h2">MODIFICAR EVENTO</h2>
                        <div class="iconContainer">
                            <img clas="icon" src="{{url('images/buttons/editar.png')}}" alt="">
                        </div>                    
                    </div>
                </a>
        
                <a class="estadoEvento__h2Container estadoEvento__h2Container--a" href="{{route('control.show', $eventosi->id_evento)}}">
                    <div class="estadoEvento__h2Border">
                        <h2 class="estadoEvento__h2">CONTROLAR INGRESOS</h2>
                        <div class="iconContainer">
                            <img clas="icon" src="{{url('images/buttons/controlar_ingresos.png')}}" alt="">
                        </div>
                    </div>            
                </a>  

                <a class="estadoEvento__h2Container estadoEvento__h2Container--a" href="{{ route('eventoinforme.show', $eventosi->id_evento) }}">
                    <div class="estadoEvento__h2Border">
                        <h2 class="estadoEvento__h2">DESCARGAR INFORME</h2>
                        <div class="iconContainer">
                            <img clas="icon" src="{{url('images/buttons/exel.png')}}" alt="">
                        </div>
                    </div>            
                </a>  
            </aside>
           
                
            
            <aside class="estadoEvento estadoEvento--fichaImgEvento">
                <div class="estadoEvento__h1Container">
                    <div class="estadoEvento__h1Border">
                        <h1 class="estadoEvento__h1">{{$eventosi->nombre_evento}}</h1>                   
                    </div>

                </div>
                <figure class="estadoEvento__imgContainer">
                    <div class="estadoEvento__imgContainerAux">
                        <img class="estadoEvento__img" src="{{asset('storage').'/'.$eventosi->img}}" alt="">                    
                    </div>
                </figure>
            </aside>

            <aside class="estadoEvento estadoEvento--datos">
                <!-- BOTON DESPLEGABLE 1 -->
                <div class="estadoEvento__h2Container">
                    <div class="estadoEvento__h2Border">

                        <div class="iconContainer">
                            <img clas="icon" src="{{url('images/buttons/datos_evento.png')}}" alt="">
                        </div>
                        <h2 class="estadoEvento__h2">DATOS DEL EVENTO</h2>

                        <figure class="iconContainer iconContainer--arrow">
                            <img class="iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
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
                                    <a class="td__text">Aforo</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->aforo}}</a>
                                </td>
                            </tr>

                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Entradas Vendidas</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{ $compras->count() }}</a>
                                </td>
                            </tr>                        

                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Modalidad</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->modalidad}}</a>
                                </td>
                            </tr>
                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Ciudad</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->Ciudad}}</a>
                                </td>
                            </tr>
                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">direccion</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->direccion}}</a>
                                </td>
                            </tr>
                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Anfitrion</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->anfitriones}}</a>
                                </td>
                            </tr>
                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Dia de inicio</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->fecha_incio}}</a>
                                </td>
                            </tr>
                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Hora</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->hora_inicio}}</a>
                                </td>
                            </tr>


                        </tbody>
                        </table>
                </div> 
                <!-- BOTON DESPLEGABLE 2 -->
                <div class="estadoEvento__h2Container">
                    <div class="estadoEvento__h2Border">
                        <div class="iconContainer">
                            <img clas="icon" src="{{url('images/buttons/boleto.png')}}" alt="">
                        </div>
                        <h2 class="estadoEvento__h2"> ESTADO DEL EVENTO</h2>

                        <figure class="iconContainer iconContainer--arrow">
                            <img class="iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                        </figure>
                    </div>            
                    
                </div>          
                <!-- CAJA  DESPLEGABLE 2 -->
                <div class="tablaEstadoContainer">
                    <!-- SECCION . TABLA DE ESTADO -->
                    <table class="tablaEstado">
                        <!--BODY TABLA -->
                        <tbody class="tablaEstado__tbody">


                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Entradas Vendidas</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{ $compras->count() }}</a>
                                </td>
                            </tr>                        

                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">Plazas disponibles</a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">266</a>
                                </td>
                            </tr>
                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">direccion: </a>
                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">{{$eventosi->direccion}}</a>
                                </td>
                            </tr>

                            <tr class="trtd__seccionItem">
                                <td class="td__container">
                                    <a class="td__text">cuenta regresiva: </a>

                                </td>
                                <td class="td__container">
                                    <a class="td__text td__text--value">

                                        <p>
                                            <span id="days"></span> días  <span id="hours"></span> horas  <span id="minutes"></span> minutos  <span id="seconds"></span> segundos
                                        </p>
                                    </a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    
                </div> 
                
            </aside>
        </div>
    </main>

    <!-- SCRIPT CUENTA ATRAS -->
    <script>
            document.addEventListener('DOMContentLoaded', () => { 
    
            //===
            // VARIABLES
            //===
            const DATE_TARGET = new Date({{$eventosi->fecha_inicio}});
            // DOM for render
            const SPAN_DAYS = document.querySelector('span#days');
            const SPAN_HOURS = document.querySelector('span#hours');
            const SPAN_MINUTES = document.querySelector('span#minutes');
            const SPAN_SECONDS = document.querySelector('span#seconds');
            // Milliseconds for the calculations
            const MILLISECONDS_OF_A_SECOND = 1000;
            const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
            const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
            const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24
    


            function updateCountdown() {
                // Calcs
                const NOW = new Date()
                const DURATION = DATE_TARGET - NOW;
                const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
                const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
                const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
                const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
                
    
                // Render
                SPAN_DAYS.textContent = REMAINING_DAYS;
                SPAN_HOURS.textContent = REMAINING_HOURS;
                SPAN_MINUTES.textContent = REMAINING_MINUTES;
                SPAN_SECONDS.textContent = REMAINING_SECONDS;
            }
    
            //===
            // INIT
            //===
            updateCountdown();
            // Refresh every second
            setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
        });
      </script>

@endsection
