@extends('layout.perfil')

@section('contenido')
<!-- SECCION . MI LISTA DE EVENTOS PARA COMENTAR -->

<main class="listEventServices">
        <!-- SECCION 3. MIS EVENTOS -->
        <!-- contenido-listado-eventos es una clase del index -->
        
        
        <div class="contenedor listEventServices__container">
            @foreach ($eventosi as $evento)
           <!--SECCION 3.1 TARGETA  #1 -->
           <h1 class="listEventServices__h1 
                      listEventServices__h1S">
                {{$evento->nombre_evento}}
            </h1>
            <div class="cardHorizontal">

                <!--SECCION 3.1.1 SUPERIOR: PARA FOTO E INFORMACION -->
                <div class="cardHorizontal__aux 
                            cardHorizontal__auxImgInfoEvento">
                    <!--SECCION 3.1.1.1 CONTENEDOR DE FOTO -->
                    <div class="cardHorizontal__container 
                                cardHorizontal__container--img">
                        <figure class="img-evento">
                            <img class="pic-img" src="{{asset('storage').'/'.$evento->img}}" alt="">
                        </figure>
                    </div>
                    <!--SECCION 3.1.1.2 CONTENEDOR DE INFORMACION -->
                    <div class="cardHorizontal__container 
                                cardHorizontal__containerInfoEvento 
                                cardHorizontal__containerInfoEventoS">
                        <div class="info-evento">
                            <!-- TABLA 1 DATOS BASICOS DE EVENTO (INICIO) -->
                            <table class="infoEvento__tabla">
                                <tbody>
                                    <tr>
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <div class="tablaInfoCard__iconContainer">
                                                <img class="tablaInfoCard__icon" src="{{url('images/icon/logo_promotor_1.png')}}" alt="">
                                            </div>
                                        </td>
            
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <p class="InfoCardTd__dato">{{$evento->nombre_promotor}}</p>  
                                        </td> 
                                    </tr>
                                    <tr> 
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <div class="tablaInfoCard__iconContainer">
                                                <img class="tablaInfoCard__icon" src="{{url('images/icon/cronometro_blanco.png')}}" alt="">
                                            </div>
                                        </td>
            
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <p class="InfoCardTd__dato">Faltan  {{ now()->diffInDays($evento->fecha_incio) }} Dias</p>
                                        </td> 
                                    </tr>
                                    <tr> 
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <div class="tablaInfoCard__iconContainer">
                                                <img class="tablaInfoCard__icon" src="{{url('images/icon/tiquete_blanco.png')}}" alt="">
                                            </div>
                                        </td>
            
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <p class="InfoCardTd__dato">{{$evento->aforo}} entradas disponibles</p>
                                        </td> 
                                    </tr>
                                    <tr> 
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <div class="tablaInfoCard__iconContainer">
                                                <img class="tablaInfoCard__icon" src="{{url('images/icon/lugar_blanco.png')}}" alt="">
                                            </div>
                                        </td>
            
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <p class="InfoCardTd__dato">Gran salon plaza mayor, Botota</p>
                                        </td> 
                                    </tr>

                                    <tr> 
                                        <td class="tblInfoCard__col tblInfoCard__col--body">
                                            <div class="tablaInfoCard__iconContainer">
                                                <img class="tablaInfoCard__icon" src="" alt="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>


                            </table>
        
                        </div>                
                    </div>
                </div>
                <!--SECCION 3.1.2 INFERIOR: INTERACCIONES GENERALES -->
                <div class="cardHorizontal__aux 
                            cardHorizontal__auxInteracciones 
                            cardHorizontal__auxInteraccionesS">

                    <div class="cardInteraccion">
                        <!--SECCION 3.1.2.1: LIKES Y COMPRAR -->
                        <div class="cardInteraccion__ctrlContainer">


                                <div class="pulgarContainer">
                                    <form action="{{route('likes.store', $evento->id_evento)}}" method="POST" >
                                            @csrf
                                        <input type="hidden" name="id_evento" value="{{$evento->id_evento}}">
                                        <input type="hidden" name="id_usr" 
                                            @foreach($users as $key => $user)
                                            value="{{$user->email}}"
                                            @endforeach
                                        >

                                        <a class="pulgarContainer__btnImg 
                                                    pulgarContainer__btnImg--up">
                                            <input class="pulgar__img" type="image" src="{{url('images/buttons/pulgar-arriba.png')}}" alt="like" name="like" >                                
                                            <p class="pulgar__num 
                                                            pulgar__numDislikes">
                                                @foreach($likesi->where('id_evento', $evento->id_evento) as $likes)
                                                {{$likes->likesnum}}
                                                @endforeach
                                            </p> 
                                        </a>
                                    </form>

                                    <div class="pulgarContainer__btnLineaDivision"></div>
                                    <form action="{{route('deslikes.store', $evento->id_evento)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id_evento" value="{{$evento->id_evento}}">
                                        <input type="hidden" name="id_usr" 
                                            @foreach($users as $key => $user)
                                            value="{{$user->email}}"
                                            @endforeach
                                        >
                                        <a class="pulgarContainer__btnImg 
                                        pulgarContainer__btnImg--down">
                                            <input class="pulgar__img
                                                        pulgar__imgDown" type="image" src="{{url('images/buttons/pulgar-abajo.png')}}" alt="dislike" name="dislike">                                

                                            <figpcaption class="pulgar__num 
                                                            pulgar__numDislikes">
                                                            @foreach($likesi->where('id_evento', $evento->id_evento) as $deslikes)
                                                            {{$deslikes->dislikesnum}}
                                                            @endforeach
                                            </figpcaption> 
                                        </a>
                                    </form>

                                </div>
                            


                            <a class="carritoBtn" href="{{ route('compras.show', $evento->id_evento) }}" >
                                <figure class="carritoBtn__container">
                                    <img clas="carritoBtn__img" src="{{url('images/buttons/carrito_compras_blanco.png')}}" alt="">
                                    <figcaption class="carritoBtn__txtContainer"><p class="carritoBtn__txt">comprar</p></figcaption>
                                </figure>
                            </a>
                        </div>
                        <!--SECCION 3.1.2.2: ACCION DE COMENTAR -->
                        <form class="cardInteraccion__ctrlContainer 
                                    cardInteraccion__ctrlContainer--comentar" action="{{url('/comentarios')}}" method="POST" >
                                    @csrf
    
                                    @foreach($users as $user)
                                        
                                    @endforeach
                                    
                            <div class="comentar">
                                <label class="comentar__label" for="comentar0101">comentar</label>
                                    <!-- informacion usuraio-->
                                    <input type="hidden"  name="id_evento" value="{{$evento->id_evento}}">
                                    <input type="hidden" name="id_usuario" value="{{$user->email}}">
                                    <input type="hidden"  name="nombre_usr" value="{{$user->name}}">
                                    <input type="hidden" name="imgusr" value="{{$user->imgusr}}">
                            
                                    <input class="comentar__input"  type="text" name="comentario" id="comentar0101">
                                    <input class="comentar__inputSubmit" type="image" src="{{url('images/buttons/enviar.png')}}" alt="Enviar" name="enviar">                                
                        

                            </div>
                        </form>



                        <!--SECCION 3.1.2.3: LISTA DE COMENTARIOS -->
                        @foreach($comentariosi->where('id_evento', $evento->id_evento) as $eve)
                        <div class="cardInteraccion__ctrlContainer 
                                    seccionComentarios">
                            <div class="seccionComentarios__container">
                                <div class="seccionComentario__containerComentario">
                                    
                                    <figure class="seccionComentario__imgContainer">
                                        <img class="seccionComentario__img" src="{{url('images/perfil/foto_bg_blanco_1.png')}}" alt="">
                                    </figure>
                                    <div class="estructuraComent">
                                        
                                        <p class="estructuraComent__nameUsser">{{$eve->nombre_usr}}</p>
                                        <div>
                                            <p class="estructuraComent__txt">{{$eve->comentario}}</p>
                                        </div> 
                                        <div class="estructuraComent__metadatos">
                                            <p class="estructuraComent__fecha">{{$eve->created_at}}</p>
                                            <!--<p class="estructuraComent__hora">19:25 horas</p> -->
                                            <a class="estructuraComent__pulgarUpImgContainer">
                                                <img class="estructuraComent__pulgarImg" src="{{url('images/buttons/pulgar-arriba.png')}}" alt="">
                                               <!-- <figcaption class="estructuraComent__numPulgarUp">3</figcaption> -->
                                            </a>
                                            <a class="estructuraComent__pulgarDownImgContainer">
                                                <img class="estructuraComent__pulgarImg" src="{{url('images/buttons/pulgar-abajo.png')}}" alt="">
                                               <!-- <figcaption class="estructuraComent__numPulgarDown">3</figcaption> -->
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
                        @endforeach                  
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </main>
    
    
@endsection
