@extends('layout.crear')

@section('contenido')

    <!-- SECCION 1.2 FORMULARIO CREAR SERVICIO EVENTO -->
    <main class="form-crear-evento">
      <div class="contenedor contenido-formulario">
          <form class="formulario formulario-registro" action="{{url('/servicios')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <!--BOTON SECCION DESPLEGABLE  # 1 INFO BASICA-->
              <a class="formulario__btn formulario__btn--servicio formBtn__eventCreate--deslizar">
                  <div class="formulario__btnContainer">
                      <figure class="formulario__iconContainer">
                          <img src="{{url('images/buttons/servicio.png')}}" alt="">
                      </figure>
                      <div class="formulario__h2Container">
                          <h2 class="formulario__h2">INFORMACION BASICA</h2>
                      </div>
                      <figure class="formulario__iconContainer formulario__iconContainer--arrow">
                          <img class="formulario__iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                      </figure>
                  </div>
              </a>
              <!-- GRUPO CAMPOS DESPLEGABLES # 1 -->
              <fieldset class="form-grupo">
                  <div class="form-grupoContainer">

                    <div class="campo">
                        <label class="descripcionServicio" for="descripcion">Id promotor:</label>
                        <input class="set__data" id="id_proveedor" name="id_proveedor"                                 
                        @foreach ($users as $user) 
                         value="{{ $user->cedula}}"
                        @endforeach
                        required>                   
                    </div> 
                    <div class="campo">
                        <label class="descripcionServicio" for="descripcion">Id promotor:</label>
                        <input class="set__data" id="nombres_prov" name="nombres_prov"                                 
                        @foreach ($users as $user) 
                         value="{{ $user->name}}"
                        @endforeach
                        required>                   
                    </div> 

                    <div class="campo">
                        <label class="descripcionServicio" for="descripcion">Nombre servicio:</label>
                        <input class="set__data" id="nombre_serv" name="nombre_serv">                   
                    </div> 
 
                    <div class="campo">
                        <label class="descripcionServicio" for="descripcion">Correo:</label>
                        <input class="set__data" id="correo" name="correo"                                 
                        @foreach ($users as $user) 
                         value="{{ $user->email}}"
                        @endforeach
                        {{$errors->has('correo') ? 'is-invalid' : ''}}" value="{{ old('correo') }}" required> 
							@error('correo')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror                  
                                           
                    </div> 
                    <div class="campo">
                        <label class="descripcionServicio" for="descripcion">Telefono:</label>
                        <input class="set__data" id="telefono" name="telefono"                                 
                        @foreach ($users as $user) 
                         value="{{ $user->telefono}}"
                        @endforeach
                        {{$errors->has('telefono') ? 'is-invalid' : ''}}" value="{{ old('telefono') }}" required> 
							@error('telefono')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror                  
                    </div> 

                      <div class="campo">
                          <label for="servicio">Servicio ofrecido:</label>
                          <select class="set__data" id="id_categorias_servicio" name="id_categorias_servicio" required>
                            <option value="">Seleccione un servicio</option>
                            <option value="Alquiler de juegos inflables">Alquiler de juegos inflables</option>
                            <option value="Alquiler de piscinas portatiles para parques">Alquiler de piscinas portátiles para parques</option>
                            <option value="Alquiler de espacios">Alquiler de espacios</option>
                            <option value="otro">Otros servicio</option>
                          </select>
                      </div>

                      <div class="campo">
                          <label class="descripcionServicio" for="descripcion">Descripción:</label>
                          <textarea class="set__data" id="descripcion" name="descripcion" {{$errors->has('descripcion') ? 'is-invalid' : ''}} required>{{ old('telefono') }}</textarea>    
                           
                          @error('telefono')
                              <div style="background: #E57373; color: white;">{{ $message }}</div>
                          @enderror                  
                      </div>            
                  </div>
              </fieldset>

              <!--BOTON SECCION DESPLEGABLE  # 7 IMAGEN-->
              <a class="formulario__btn formulario__btn--servicio formBtn__eventCreate--deslizar">
                  <div class="formulario__btnContainer">
                      <figure class="formulario__iconContainer">
                          <img src="{{url('images/buttons/imagen.png')}}" alt="">
                      </figure>
                      <div class="formulario__h2Container">
                          <h2 class="formulario__h2">IMAGEN DE PROMOCION</h2>
                      </div>
                      <figure class="formulario__iconContainer formulario__iconContainer--arrow">
                          <img class="formulario__iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                      </figure>
                  </div>
              </a>
              <!-- GRUPO CAMPOS DESPLEGABLES # 7 IMAGEN-->
              <fieldset class="form-grupo form-grupo--lastFieldset">

                  <div class="campo">
                      <div class="campo__auxContainer">
                          <label id="campo__label0102" class="" for="inputUploadImg0102">cargar imágen:</label>

                          <input id="inputUploadImg0102" class="set__data " class="" type="file"  name="imagen" accept="image/*">   
                      </div>

                      <div class="campo__imgContainer">
                          <img id="campo__img0102" class="campo__img" src="{{url('images/default/imagen-service-product.png')}} alt="" >
                      </div>

                  </div>
             
              </fieldset>
              <div class="campo campo--buttonContainer">
                  <button class="btn_amarillo--inlineBlockEstatic24" type="submit">CREAR SERVICIO</button>
              </div>
          </form>
      
      </div>
  </main>

@endsection