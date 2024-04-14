@extends('layout.crear')

@section('contenido')

    <!-- SECCION 1.2 FORMULARIO CREAR EVENTO  -->
    <main class="form-crear-evento">
        <div class="contenedor contenido-formulario">
            <form action="{{url('/eventos')}}" method="POST" class="formulario" enctype="multipart/form-data">
			@csrf
                <h2 >Crea tu evento</h2>

                <!--BOTON SECCION DESPLEGABLE  # 1 INFO BASICA-->
                <a class="formulario__btn formBtn__eventCreate--deslizar">
                    <div class="formulario__btnContainer">
                        <figure class="formulario__iconContainer">
                            <img src="{{url('images/buttons/informacion-basica.png')}}" alt="">
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
							<label for="id_promotor">ID Promotor:</label>
							<input class="set__data" type="text" id="id_promotor" name="id_promotor" placeholder="Cedula creador del evento"
                                @foreach ($users as $user) 
                                    value="{{ $user->cedula}}"
                                @endforeach
							required >
						</div>

                        <div class="campo">
                            <label for="nombre_promotor">Promotor:</label>
                            <input class="set__data" type="text" id="nombre_promotor" name="nombre_promotor" placeholder="Nombre del creador del evento"
                                @foreach ($users as $user) 
                                value="{{ $user->name.' '.$user->apellidos}}"
                                @endforeach
                                required >                    
                        </div>

                        <div class="campo">
							<label for="nombre_evento">Nombre Evento:</label>
							<input class="set__data" type="text" id="nombre_evento" name="nombre_evento" {{$errors->has('nombre_evento') ? 'is-invalid' : ''}}" value="{{ old('nombre_evento') }}" required> 
							@error('nombre_evento')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror
						</div>
						
						
						<div class="campo">
							<label for="id_categoria_ev">Categoría:</label>
							<select class="set__data" id="id_categoria_ev" name="id_categoria_ev"  {{$errors->has('id_categoria_ev') ? 'is-invalid' : ''}}" value="{{ old('id_categoria_ev') }}" required>
								<option value="Musical">Musica</option>
								<option value="Teatro">Teatro</option>
								<option value="Deporte">Deportes</option>
								<option value="" selected>Seleccione una categoría</option>
							</select>
							@error('id_categoria_ev')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror
						</div>

						<div class="campo campo--infoBasica">
							<label class="descripcion" for="descripcion">Descripción:</label>
							<textarea class="set__data" id="descripcion" name="descripcion" {{$errors->has('descripcion') ? 'is-invalid' : ''}}" required>{{ old('descripcion') }}</textarea>                     
							@error('descripcion')
							<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror
						</div>
						
                    </div>
                </fieldset>
				
                <!--BOTON SECCION DESPLEGABLE # 2 UBICACION-->
                <a class="formulario__btn formBtn__eventCreate--deslizar">
                    <div class="formulario__btnContainer">
                        <figure class="formulario__iconContainer">
                            <img src="{{url('images/buttons/ubicacion.png')}}" alt="">
                        </figure>
                        <div class="formulario__h2Container">
                            <h2 class="formulario__h2">UBICACION</h2>
                        </div>
                        <figure class="formulario__iconContainer formulario__iconContainer--arrow">
                            <img class="formulario__iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                        </figure>
                    </div>
                </a>
                <!-- GRUPO CAMPOS DESPLEGABLES # 2 -->
                <fieldset class="form-grupo">
                    <div class="form-grupoContainer form-grupoContainer--ubicacion">

                        <div class="campo">
                            <label for="ciudad">Ciudad:</label>
                            <input class="login-campo-texto" type="text" id="ciudad" name="ciudad" {{$errors->has('ciudad') ? 'is-invalid' : ''}}" value="{{ old('ciudad') }}" required> 
                            @error('ciudad')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror
                        </div>

						<div class="campo">
							<label for="direccion">Dirección:</label>
							<input type="text" id="direccion" name="direccion" {{$errors->has('direccion') ? 'is-invalid' : ''}}" value="{{ old('direccion') }}" required> 
							@error('direccion')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror
						</div>
                        
                        <div class="campo">
							<label for="Nombre_sitio">Nombre del Sitio:</label>
							<input type="text" id="Nombre_sitio" name="Nombre_sitio" {{$errors->has('Nombre_sitio') ? 'is-invalid' : ''}}" value="{{ old('Nombre_sitio') }}" placeholder="Centro de eventos Tick" required> 
							@error('Nombre_sitio')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror
						</div>

                        <div class="campo">
                            <label for="idorganizar">Se visible en el mapa</label>
                            <div class="mapaContainer">
                                <div class="mapa" id="map"></div>                    
                            </div>
                        </div>

                        <div class="campo">
                            <label for="latitude">Latitude:</label>
                            <input id="latitud" name="latitud" type="text" {{$errors->has('latitud') ? 'is-invalid' : ''}}" value="{{ old('latitud') }}" required>
                            @error('latitud')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror 
                            <label for="longitude">Longitude:</label>
                            <input id="longitud" name="longitud" type="text" {{$errors->has('longitud') ? 'is-invalid' : ''}}" value="{{ old('longitud') }}" required>
                            @error('longitud')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror 
                        </div>

                    </div>
                </fieldset>
				
                <!--BOTON SECCION DESPLEGABLE  # 3 FECHA Y HORA-->
                <a class="formulario__btn formBtn__eventCreate--deslizar">
                    <div class="formulario__btnContainer">
                        <figure class="formulario__iconContainer">
                            <img src="{{url('images/buttons/fecha.png')}}" alt="">
                        </figure>
                        <div class="formulario__h2Container">
                            <h2 class="formulario__h2">FECHA Y HORA</h2>
                        </div>
                        <figure class="formulario__iconContainer formulario__iconContainer--arrow">
                            <img class="formulario__iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                        </figure>
                    </div>
                </a>
				
                <!-- GRUPO CAMPOS DESPLEGABLES # 3 -->
                <fieldset class="form-grupo">
                    <div class="form-grupoContainer form-grupoContainer--asistir">
						
						<div class="campo">
							<label for="fecha_incio">Fecha de Inicio:</label>
							<input type="date" id="fecha_incio" name="fecha_incio" {{$errors->has('fecha_incio') ? 'is-invalid' : ''}}" value="{{ old('fecha_incio') }}" required> 
							@error('fecha_incio')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror                    
						</div>
						
						<div class="campo">
							<label for="hora_inicio">Hora de Inicio:</label>
							<input type="time" id="hora_inicio" name="hora_inicio" {{$errors->has('hora_inicio') ? 'is-invalid' : ''}}" value="{{ old('hora_inicio') }}" required> 
							@error('hora_inicio')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror                    
						</div>
						<!--
							<div class="campo">
								<label for="fecha_fin">Fecha de Fin:</label>
								<input type="date" id="fecha_fin" name="fecha_fin">
							</div>
							<div class="campo">
								<label for="hora_fin">Hora de Fin:</label>
								<input type="time" id="hora_fin" name="hora_fin">
							</div> 
						-->
						
                    </div>
                </fieldset>
				
                <!--BOTON SECCION DESPLEGABLE  # 4 FORMAS DE ASISTIR-->
                <a class="formulario__btn formBtn__eventCreate--deslizar">
                    <div class="formulario__btnContainer">
                        <figure class="formulario__iconContainer">
                            <img src="{{url('images/buttons/asistir.png')}}" alt="">
                        </figure>
                        <div class="formulario__h2Container">
                            <h2 class="formulario__h2">FORMAS DE ASISTIR O DISFRUTAR</h2>
                        </div>
                        <figure class="formulario__iconContainer formulario__iconContainer--arrow">
                            <img class="formulario__iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                        </figure>
                    </div>
                </a>
				
                <!-- GRUPO CAMPOS DESPLEGABLES # 4 -->
                <fieldset class="form-grupo">
                    <div class="form-grupoContainer">

						<div class="campo">
							<label for="modalidad">Modalidad:</label>
							<select id="modalidad" name="modalidad"  {{$errors->has('modalidad') ? 'is-invalid' : ''}}" value="{{ old('modalidad') }}" required>
								<option value="Presencial">Presencial</option>
								<option value="Virtual">Virtual</option>
							</select>
							@error('modalidad')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							 @enderror
						</div> 
						
						<div class="campo">
							<label for="medio_transmision">Medio de Trasmisión:</label>
							<select id="medio_transmision" name="medio_transmision" {{$errors->has('medio_transmision') ? 'is-invalid' : ''}}" value="{{ old('medio_transmision') }}" required>
								<option value="Ninguno">Ninguno</option>
								<option value="Youtube">Youtube</option>
								<option value="Twich">Twich</option>
								<option value="Facebook">Facebook</option>
							</select>
							@error('medio_transmision')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror
						</div>

						<div class="campo">
							<label for="enlace_conexion">Enlace de Conexión:</label>
							<input type="text" id="enlace_conexion" name="enlace_conexion" {{$errors->has('enlace_conexion') ? 'is-invalid' : ''}}" value="{{ old('enlace_conexion') }}" required> 
							@error('enlace_conexio')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror
						</div>
						
                    </div>
                </fieldset>
				
                <!--BOTON SECCION DESPLEGABLE  # 5 ANFITRIONES-->
                <a class="formulario__btn formBtn__eventCreate--deslizar">
                    <div class="formulario__btnContainer">
                        <figure class="formulario__iconContainer">
                            <img src="{{url('images/buttons/anfitrion.png')}}" alt="">
                        </figure>
                        <div class="formulario__h2Container">
                            <h2 class="formulario__h2">ANFITRIONES</h2>
                        </div>
                        <figure class="formulario__iconContainer formulario__iconContainer--arrow">
                            <img class="formulario__iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                        </figure>
                    </div>
                </a>
				
                <!-- GRUPO CAMPOS DESPLEGABLES # 5 -->
                <fieldset class="form-grupo">
                    <div class="form-grupoContainer">
                        <div class="campo">
                            <label for="anfitriones">Anfitriones:</label>
                            <textarea id="anfitriones" name="anfitriones"{{$errors->has('anfitriones') ? 'is-invalid' : ''}} required>{{ old('anfitriones') }}</textarea>
                            @error('anfitriones')
                            <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror   
                        </div>                       
                    </div>
                </fieldset>
				
                <!--BOTON SECCION DESPLEGABLE  # 6 COSTOS-->
                <a class="formulario__btn formBtn__eventCreate--deslizar">
                    <div class="formulario__btnContainer">
                        <figure class="formulario__iconContainer">
                            <img src="{{url('images/buttons/costos.png')}}" alt="">
                        </figure>
                        <div class="formulario__h2Container">
                            <h2 class="formulario__h2">COSTOS</h2>
                        </div>
                        <figure class="formulario__iconContainer formulario__iconContainer--arrow">
                            <img class="formulario__iconArrow" src="{{url('images/buttons/flecha1.png')}}" alt="">
                        </figure>
                    </div>
                </a>
				
                <!-- GRUPO CAMPOS DESPLEGABLES # 6 -->
                <fieldset class="form-grupo">
                    <div class="form-grupoContainer form-grupoContainer--costos">
                        <div class="campo">
                            <label for="monetizacion">Monetizacion Evento:</label>
                            <select id="monetizacion" name="monetizacion" {{$errors->has('monetizacion') ? 'is-invalid' : ''}}" value="{{ old('monetizacion') }}">
                                <option value="Libre">Evento Libre</option>
                                <option value="Pago">Evento Pago</option>
                            </select>
                            @error('monetizacion')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror  

                        </div>

						<div class="campo">
							<label for="aforo">Aforo:</label>
							<input type="text" id="aforo" name="aforo" {{$errors->has('aforo') ? 'is-invalid' : ''}}" value="{{ old('aforo') }}" required> 
							@error('aforo')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror                    
						</div>
						
                        <div class="campo">
                            <label for="aforo">numero de boletas a vender:</label>
                            <input type="number" id="aforo" name="aforo">
                        </div>
						
						<div class="campo">
							<label for="costoboleta">Costo boleta:</label>
							<input type="text" id="costoboleta" name="costoboleta" {{$errors->has('costoboleta') ? 'is-invalid' : ''}}" value="{{ old('costoboleta') }}" required> 
							@error('costoboleta')
								<div style="background: #E57373; color: white;">{{ $message }}</div>
							@enderror                    
						</div>
						
                    </div>
                </fieldset>
                <!--BOTON SECCION DESPLEGABLE  # 7 IMAGEN-->
                <a class="formulario__btn formBtn__eventCreate--deslizar">
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
                            <label id="campo__label0101" class="" for="inputUploadImg0101">cargar imágen</label>

                            <input id="inputUploadImg0101" class="set__data set__data--upLoadImg" class="" type="file"  name="img" accept="image/*" {{$errors->has('img') ? 'is-invalid' : ''}}">  
                            @error('img')
                                 <div style="background: #E57373; color: white;">{{ $message }}</div>
                            @enderror  
                        </div>

                        <div class="campo__imgContainer">
                            <img id="campo__img0101" class="campo__img" src="../build/img/default/imagen-service-product.png" alt="">
                        </div>
                    </div>       
                </fieldset>
                
                <div class="campo campo--buttonContainer">
                    <button class="btn_rojo--inlineBlockEstatic24" type="submit">CREAR EVENTO</button>
                </div>
            </form>
        
        </div>
    </main>

    <script>


                //quitar lineas al mapa
                if (window?.chrome !== undefined) {
                const originalInitTile = L.GridLayer.prototype._initTile;

                L.GridLayer.include({
                    _initTile: function (tile) {
                    originalInitTile.call(this, tile);

                    const tileSize = this.getTileSize();

                    tile.style.width = `${tileSize.x + -1}px`;
                    tile.style.height = `${tileSize.y + -1}px`;
                    }
                });
                }

        // Nominatim does not map some actual addresses
        'use strict';

        // Map
        const map = L.map('map', {
        center: [4.716713772370445, -74.06662448808277],
        zoom: 10,               
        });

        // Open Street Map 
        const osm = L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&#169; <a href="//www.openstreetmap.org/">OpenStreetMap</a>'
        }).addTo(map);

        // container for address search results
        const addressSearchResults = new L.LayerGroup().addTo(map);

        /*** Geocoder ***/
        // OSM Geocoder
        const osmGeocoder = new L.Control.geocoder({
            collapsed: false,
            position: 'topright',
            text: 'Address Search',
            placeholder: 'Enter street address',
        defaultMarkGeocode: false
        }).addTo(map);    

        // handle geocoding result event
        osmGeocoder.on('markgeocode', e => {
        // to review result object
        console.log(e);
        // coordinates for result
        const coords = [e.geocode.center.lat, e.geocode.center.lng];
        // center map on result
        map.setView(coords, 16);
        // popup for location
        // todo: use custom icon
        const resultMarker = L.marker(coords).addTo(map);
        // add popup to marker with result text
        resultMarker.bindPopup(e.geocode.name).openPopup();
        });

        const marker = L.marker([4.650476116279529, -74.08714900414853]).addTo(map)
            .bindPopup('<b>Posicionemos Tu Evento</b><br />Establece la ubicacion de tu evento.').openPopup();
/*
        const popup = L.popup()
            .setLatLng([4.716713772370445, -74.06662448808277])
            .setContent('Tickevent siempre contigo')
            .openOn(map);
*/
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent(`You clicked the map at ${e.latlng.toString()}`)
                .openOn(map);
        }


        map.on('click', function (e) {
        marker.setLatLng(e.latlng);
        updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
        });
        function updateLatLng(lat,lng,reverse) {
        if(reverse) {
        marker.setLatLng([lat,lng]);
        map.panTo([lat,lng]);
        } else {
        document.getElementById('latitud').value = marker.getLatLng().lat;
        document.getElementById('longitud').value = marker.getLatLng().lng;
        map.panTo([lat,lng]);
        }
        }
    </script>

@endsection