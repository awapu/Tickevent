@extends('layout.regular')

@section('contenido')

        <!-- SECCION 2. TARJETAS DE EVENTOS -->
        <section class="secciones-detalle-evento">
            <section class="contenedor contenido-ficha-evento-detalle">
                <div class="tarjeta-evento-usuario-regular">
                    <div class="">
                        <br>
                        <h2 class="nombre-evento caption1" data-id1="456"  style="text-align:center">' . $row['nombre evento'] . '</h2>
                        <p class="ciudad-lugar-fecha caption" id="pago1" data-fruit="' . $row['ideventos'] . '">Ciudad: &nbsp;' . $row['lugar'] . ' &nbsp; &nbsp; &nbsp; Fecha:&nbsp;' . $row['fecha inicio'] . '  &nbsp; &nbsp; &nbsp; ID Evento:&nbsp;' . $row['ideventos'] . ' 
                        </p>
                        <br>
                        <span  class="descripcion-evento postedtime">' . $row['descripcion'] . '</span>        
                    </div>

                    <ul class="contenedor-iconos">
                        <li class="item-icono">
                            <a id="btnpago" href="#popUp" >
                                <figure class="icono-carrito">
                                    <img class="pic-carrito" src="../images/icon/carrito.png"> 
                                    <figcaption class="texto-icono-carrito">añadir a carrito</figcaption>
                                </figure> 
                            </a>
                        </li>
                        <li class="item-icono">
                            <a href="#">
                                <figure class="icono-compartir">
                                    <img class="pic-compartir" src="../images/icon/compartir.png">                              
                                    <figcaption class="texto-icono-compartir">compartir</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="item-icono">
                            <a href="#">
                                <figure class="icono-comentar">
                                    <img class="pic-comentar" src="../images/icon/comentar.png">
                                    <figcaption class="texto-icono-comentar">comentar</figcaption>
                                </figure>
                            </a>                       
                        </li>
                    </ul>
                </div>
            </section>
        </section>

@endsection