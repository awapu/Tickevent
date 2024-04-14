@extends('layout.perfil')

@section('contenido')
<!-- SECCION 2. MIS PORTAFOLIO -->
<!-- SECCION 2. MIS PORTAFOLIO -->
<main class="portafolio">


    <!-- SECCION 3. MIS EVENTOS -->
    <!-- contenido-listado-eventos es una clase del index -->
    <h1 class="heading-contenido-portafolio">mis eventos</h1>
    <div class="contenedor contenido-portafolio1 contenido-listado-eventos">
        @foreach($eventosi as $key => $evento)
            <!--SECCION 3.1 CARD #1 -->
            <div class="tarjeta-evento">
				
                <figure class="img-evento">
                    <img class="pic-img" src="{{asset('storage').'/'.$evento->img}}" alt="">
                </figure>
                <div class="info-evento">

                    <!-- TABLA 1 DATOS BASICOS DE EVENTO (INICIO) -->
                    <table class="infoEvento__tabla">
                        <tr> 
                            <th colspan="2" class="tblInfoCard__col tblInfoCard__col--head">
                                <p class="InfoCardTh__dato">{{$evento->nombre_evento}}</p>
                            </th> 
                        </tr>
                        <tr>
                            <td class="tblInfoCard__col tblInfoCard__col--body">
                                <div class="tablaInfoCard__iconContainer">
                                    <img class="tablaInfoCard__icon" src="{{url('images/icon/fecha_blanco.png')}}" alt="">
                                </div>
                            </td>

                            <td class="tblInfoCard__col tblInfoCard__col--body">
                                <p class="InfoCardTd__dato">{{$evento->fecha_incio}}</p>  
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
                                    <img class="tablaInfoCard__icon" src="{{url('images/icon/lugar_blanco.png')}}" alt="">
                                </div>
                            </td>

                            <td class="tblInfoCard__col tblInfoCard__col--body">
                                <p class="InfoCardTd__dato">{{$evento->Nombre_sitio}}</p>
                            </td> 
                        </tr>
                        <tr> 
                            <td class="tblInfoCard__col tblInfoCard__col--body">
                                <div class="tablaInfoCard__iconContainer">
                                    <img class="tablaInfoCard__icon" src="{{url('images/icon/tiquete_blanco.png')}}" alt="">
                                </div>
                            </td>

                            <td class="tblInfoCard__col tblInfoCard__col--body">
                                <p class="InfoCardTd__dato">Desde: $ {{$evento->costoboleta}} COP</p>
                            </td> 
                        </tr>
                        <tr> 
                            <td class="tblInfoCard__col tblInfoCard__col--body">
                                <div class="tablaInfoCard__iconContainer">
                                    <img class="tablaInfoCard__icon" src="{{url('images/buttons/ubicacion.png')}}" alt="">
                                </div>
                            </td>

                            <td class="tblInfoCard__col tblInfoCard__col--body">
                                <p class="InfoCardTd__dato">{{$evento->Ciudad}}</p>
                            </td> 
                        </tr>
						
                    </table>
                    <!-- TABLA 2 METADATOS EVENTO (INICIO) -->
                    <table class="metadatos-evento">
					 
                        <tr> 
                            <th colspan="2" class="th-metadata-eventos">
                                <p class="InfoCardTh__dato">
                                    INFORMACION DE TU EVENTO
                                </P>
                            </th>
                        </tr>    
                        <tr> 
                            <td class="td-metadata-eventos">
                                <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    Estado:
                                </P>
                            </td>
                            <td class="td-metadata-eventos">
                                <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    {{$evento->estado}}
                                </P>
                            </td>
                        </tr>
                        <tr> 
                            <td class="td-metadata-eventos">
                                <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    Inicia en: 
                                </P>
                            </td>
                            <td class="td-metadata-eventos">
                                <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    {{ now()->diffInDays($evento->fecha_incio) }} Dias
                                </P>
                            </td>
                        </tr>
                        <tr> 
                            <td class="td-metadata-eventos">
                                <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    Publicado: 
                                </P>
                            </td>
                            <td class="td-metadata-eventos">
                                <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    {{$evento->created_at}}
                                </P>
                            </td>
                        </tr> 
                    </table>
                </div>
				
                <div class="cardEvent__btnContainer">
                    <a class="cardEvent__btn btn_amarillo--BlockEstaticBorder0_24" href="{{ route('gestion.show', $evento->id_evento) }}">
                        gestionar evento
                    </a> 
                </div>
               
            </div>
            @endforeach
    </div>
    

    <!-- SECCION 4. MIS SERVICIOS -->
    <!-- contenido-listado-eventos es una clase del index -->
    <h1 class="heading-contenido-portafolio">mis servicios</h1>
    <section class="contenedor contenido-portafolio2 contenido-listado-eventos">
        <!-- TARGETA SERVICIO # 1 -->
        @foreach($servi as $key => $servicio)
        <div class="tarjeta-evento tarjeta-servicio">
			
            <figure class="img-evento">
                <img class="pic-img" src="{{asset('storage').'/'.$servicio->imagen}}" alt="">
            </figure>
            <div class="info-evento">
                <!-- TABLA 1 DATOS BASICOS DE SERVICIO (INICIO) -->
                <table class="infoEvento__tabla tabla-datos-servicio">
                    <tr> 
                        <th colspan="2" class="tblInfoCard__col tblInfoCard__col--head">
                            <p class="InfoCardTh__dato">{{$servicio->id_categorias_servicio}}</p>
                        </th> 
                    </tr>
                    <tr>
                        <td colspan="2" class="tblInfoCard__col   tblInfoCard__col--body">
                            <p class="InfoCardTd__dato">{{$servicio->descripcion}}</p>  
                        </td> 
                    </tr>
                </table>
                <!-- TABLA 2 METADATOS SERVICIO (INICIO) -->
                <table class="metadatos-evento metadatos-servicio">
                    <tr> 
                        <th colspan="2" class="th-metadata-eventos">
                            <p class="InfoCardTh__dato InfoCardTh__dato--servicio">
                                INFORMACION DE TU SERVICIO
                            </p>
                                
                        </th> 
                    </tr>    
                    <tr> 
                        <td class="td-metadata-eventos td-metadata-servicio">
                            <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    Publicado: 
                            </p>
                        </td>
                        <td class="td-metadata-eventos td-metadata-servicio">
                            <p class="InfoCardTd__dato InfoCardTd__datoServicio">
                                    {{$servicio->created_at}}
                            </p>
                        </td>
                    </tr> 
                </table>                   
            </div>
                <div class="cardEvent__btnContainer">
                    <a class="cardEvent__btn btn_amarillo--BlockEstaticBorder0_24" href="{{route('servicios.show', $servicio->id )}}">
                        gestionar servicio
                    </a> 
                </div>
        
        </div>
        @endforeach
    </section>
</main>
@endsection
