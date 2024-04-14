@extends('layout.perfil')

@section('contenido')


    <!-- SECCION 3. CONTENIDO PRINCIPAL  -->
    <main class="qrMain">

 
            
        

        @foreach($comprasi as $compra)
            
            <section class="qrMain__container contenedor">

                <div class="qrTicket">
                    <figure class="qrTicket__imgContainer">
                        {!! QrCode::size(200)->generate($compra->codigo_qr) !!}

                    </figure>
                    <div class="qrTicket__btnContainer">
                        <figure class="qrTicket__btnIcon">
                            <img src="../build/img/buttons/descargar.png" alt="">
                        </figure>
                        <a class="qrTicket__btn btn__qr" href="{{ route('infocompra.show', $compra->id_compras) }}" >
                            Descargar
                        </a>
                        <figure class="qrTicket__btnIcon">
                            <img src="../build/img/buttons/imprimir.png" alt="">
                        </figure>
                        <a class="qrTicket__btn btn__qr--verde">
                            Imprimir
                        </a>
                    </div>

                </div>
                <div class="qrTicket qrTicket--resumen">


                    @foreach($eventosi->where('id_evento', $compra->id_evento) as $eve)
                    <div class="qrMain__tituloContainer">
                        <h2 class="qrMain__titulo">{{$eve->nombre_evento}}</h2>
                    </div>
                    @endforeach

                    <section class="detalleQr">
                        <div  class="detalleQr_container">
                            <table class="detalleQr_datos">
                                <tr class="detalleQr_dato">
                                    <td class="detalleQr_item"><p>identificacion: </p></td>
                                    <td class="detalleQr_valor"><p>{{$compra->ced_comprador}}</p></td>
                                </tr>
                                <tr class="detalleQr_dato">
                                    <td class="detalleQr_item"><p>Nombre: </p></td>
                                    <td class="detalleQr_valor"><p>{{$compra->nombres}}</p></td>
                                </tr>
                                <tr class="detalleQr_dato">
                                    <td class="detalleQr_item"><p>Apellidos: </p></td>
                                    <td class="detalleQr_valor"><p>{{$compra->apellidos}}</p></td>
                                </tr>
                                
                                <tr class="detalleQr_dato">
                                    <td class="detalleQr_item"><p>Costo: </p></td>
                                    <td class="detalleQr_valor"><p>{{$compra->valor}}</p></td>
                                </tr>
                                
                                <tr class="detalleQr_dato">
                                    <td class="detalleQr_item"><p>Direccion: </p></td>
                                    <td class="detalleQr_valor"><p>{{$eve->direccion}}</p></td>
                                </tr>
                            
                            </table>
                        </div>
                    </section>
                </div>
            </section> 
            <br>
            
        @endforeach     
               
    </main>

@endsection
