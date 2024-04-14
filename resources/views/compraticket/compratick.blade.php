@extends('layout.info')

@section('contenido')

    <!-- SECCION . COMPRA TICKET -->
    <main class="mainComprarTicket">
        <div class="mainComprarTicket__container contenedor">

            <!-- SECCION . SECCION PRINCIPAL DE RESUMEN -->
            <aside class="fichaResumen">
                <figure class="fichaResumen__imgContainer">
                    <img class="fichaResumen__imgContainer" src="{{asset('storage').'/'.$evento->img}}" alt="">
                </figure>
                <div class="fichaResumen__h2Container">
                    <h2 class="fichaResumen__h2">RESUMEN DE COMPRA</h2>
                </div>

                <div class="numTickets__selectContainer">
                   
                       
                   
                    <div class="numTickets__selectSeccion" >
                        <div class="numTickets__borde">

                            <div>
                                <p>entradas</p>
                            </div>
                            <div class="numTicketsBox__Container">
                                <a class="btn__down">-</a>
        
                                <p class="numTickets__container">
                                    <a class="numTickets">1</a>
                                </p>
                                <a class="btn__up">+</a>
                            </div>
        
                            <div class="numTickets__textContainer">
                                <p class="numTickets__text">valor</p>
                            </div>
                            <div class="numTickets__textContainer">
                                <p class="numTickets__text">{{$evento->costoboleta}}</p>
                            </div>
                            <a class="numTickets__btn btn__rojo--inlineBlockEstatic">Reservar</a>
    
                        </div>                            
                    </div>
                    <div class="tablaContainer">
                        <!-- SECCION . TABLA DE RESUMEN DE COMPRA -->
                        <table class="tabla__resumenCompra">
                            <!--  .BODY TABLA -->
                            <tbody class="tbody">
                                <!--  .SUB-ENCABEZADO TABLA -->
                                <tr class="trth__seccionItem">
                                    <th class="th__container" colspan="2">
                                        <a class="th__text">
                                            Producto
                                        </a>
                                    </th>                                
                                </tr>
                                <tr class="trtd__seccionItem">
                                    <td class="td__text td__text--item">
                                        <a class="">nombre: </a>
                                    </td>
                                    <td class="td__text td__text--value">
                                        <a class="">{{$evento->nombre_evento}}</a>
                                    </td>
                                </tr>
                                <!--  .SUB-ENCABEZADO TABLA -->
                                <!--
                                <tr class="trth__seccionItem">         
                                    <th class="th__container" colspan="2">
                                        <a class="th__text th__text--item">
                                            Tipo de Entrada
                                        </a>
                                    </th>                                
                                </tr>
                                <tr class="trtd__seccionItem">
                                    <td class="td__container">
                                        <a class="td__text">ticket general x</a>
                                        <a class="td__text" id="numTickets">2</a>
                                        <a class="td__text">und</a>
                                    </td>
                                    <td class="td__container">
                                        <a class="td__text td__text--value">$ 110.000</a>
                                    </td>
                                </tr>
                            -->
                                <!--  .SUB-ENCABEZADO TABLA -->
                                <tr class="trth__seccionItem">
                                    <th colspan="2">
                                        <a class="th__text">
                                            Modo de entrega
                                        </a>
                                    </th>                                
                                </tr>
                                <tr class="trtd__seccionItem">
                                    <td class="td__container">
                                        <a class="td__text">correo electronico</a>
                                    </td>
                                    <td class="td__container">
                                        <a class="td__text td__text--value"></a>
                                    </td>
                                </tr>
                            </tbody>
    
    
                        </table>
                    </div> 
                   
                </div>
            </aside>

            <section class="fichaResumen fichaResumen--formCompra">
                <!-- SECCION 1.1.1 FORMULARIO REGISTRO -->

                <div class="fichaResumen__container fichaResumen__container--formCompra">
                    <div class="fichaResumen__h2Container">
                        <h2 class="fichaResumen__h2">DATOS DEL COMPRADOR</h2>
                    </div>
                    <form class="formCompra" action="{{url('compras')}}" method="POST" >
                        @csrf
                        <fieldset class="formCompra__fieldsetBorde">
                             <legend class="formCompra__legend">informacion de contacto</legend>
                                    <input name="id_evento" type="hidden" value="{{$evento->id_evento}}"></label>
                                    
                                <!--SI NO ESTA LOGUEADO -->
                                @if (auth()->guest())
                                    <label for="name">Nombres: </label>
                                    <input type="text" name="nombres" placeholder="Ej: Juan Alberto" {{$errors->has('nombres') ? 'is-invalid' : ''}}" value="{{ old('nombres') }}"> 
                                    @error('nombres')
                                        <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror                    
            
                                    <label for="apellidos">Apellidos: </label>
                                    <input type="text" name="apellidos" placeholder="Ej: Perez Molina" {{$errors->has('apellidos') ? 'is-invalid' : ''}}" value="{{ old('apellidos') }}"> 
                                    @error('apellidos')
                                        <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror  
                                    
                                    <input type="hidden" class="td__text" id="cant_boletas" name="cant_boletas" value="1">
                                    <input type="hidden" class="td__text" id="valor" name="valor" value="100">
            
                                    <label for="email">E-Mail</label>
                                    <input type="email" name="email" placeholder="Ej: micorreo@gmail.com" {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}"> 
                                    @error('email')
                                        <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror                    
                                <!--
                                    <div class="formCompra__btnContainer">
                                        <a class="btn__gris--inlineBlockEstatic" >Continuar</a>
                                    </div> 
                                -->
                                @else
                                <!--SI ESTA LOGUEADO-->
                                    @foreach ($users as $user)
                                    
                                        <label for="nombres">Nombres: </label>
                                        <input type="text" name="nombres" placeholder="Ej: Juan Alberto" value="{{$user->name}}" >
                
                                        <label for="apellidos">Apellidos: </label>
                                        <input type="text" name="apellidos" placeholder="Ej: Perez Molina" value="{{$user->apellidos}}">
                
                                        <label for="email">E-Mail</label>
                                        <input type="email" name="email" placeholder="Ej: micorreo@gmail.com" value="{{$user->email}}">
                                        <input type="hidden" class="td__text" id="cant_boletas" name="cant_boletas" value="1">
                                        <input type="hidden" class="td__text" id="valor" name="valor" value="100">
                                  <!--
                                        <div class="formCompra__btnContainer">
                                            <a class="btn__gris--inlineBlockEstatic" >Continuar</a>
                                        </div>
                                    -->
                                    @endforeach
                                    
                                @endif

                        </fieldset>    
                        
                        <fieldset class="formCompra__fieldsetBorde">
                            <legend class="formCompra__legend">informacion adicional</legend>
   
                           <label for="ced_comprador">Cedula:</label>
                           <input type="text" name="ced_comprador" {{$errors->has('ced_comprador') ? 'is-invalid' : ''}}" value="{{ old('ced_comprador') }}"> 
                           @error('ced_comprador')
                               <div style="background: #E57373; color: white;">{{ $message }}</div>
                           @enderror                    
                            
                           <label for="celular">Numero de celular: </label>
                           <input type="numeric" name="celular" {{$errors->has('celular') ? 'is-invalid' : ''}}" value="{{ old('celular') }}"> 
                           @error('celular')
                               <div style="background: #E57373; color: white;">{{ $message }}</div>
                           @enderror                    
                        <!--
                           <div class="formCompra__btnContainer">
                                <a class="btn__gris--inlineBlockEstatic" >verificar numero</a>
                            </div>
                        -->
                       </fieldset> 
                       <fieldset class="formCompra__fieldsetBorde">
                            <legend class="formCompra__legend">finalizar compra</legend>

                            <div class="formCompra__btnContainer">
                                <button class="btn__rojo--inlineBlockEstatic" type="submit">COMPRAR</button>
                            </div>
       
                        </fieldset> 
                    </form>  

                    
                </div>

              

            </section>
        </div>
    </main>


@endsection
