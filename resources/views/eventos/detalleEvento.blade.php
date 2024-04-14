@extends('layout.detalleEvento')

@section('contenido')


    <!-- SECCION . INFORMATIVOS PARA DETALLE DE EVENTO -->
    <section class="informativosDetalle">
        <div class="informativosDetalle__container contenedor">
            <div class="informativosDetalle__textContainer">
                <h1 class="informativosDetalle__text">{{$evento->nombre_evento}}</h1>
            </div>
            <figure class="informativosDetalle__imgContainer">
                <h2 class="informativosDetalle__imgText">No imprimas tu boleta, tu celular es suficiente <span>cuida el medio ambiente</span> </h2>
                <img class="informativosDetalle__img" src="{{url('images/informativo/informativo_1.png')}}" alt="" >
            </figure>
        </div>
        
    </section>
    
    <!-- SECCION . DETALLE DEL EVENTO -->
    <main class="detalleEvento">
        <section class="detalleEvento__container contenedor">

            <!-- SECCION . BANNER PUBLICITARIO DEL EVENTO -->
            <div class="bannerEvento">
                <!-- SECCION . CONTENEDOR DE IMAGEN DEL EVENTO -->
                <figure class="bannerEvento__imgContainer">
                    <img class="bannerEvento__img" src="{{asset('storage').'/'.$evento->img}}" alt="">
                </figure>
            </div>

            <!-- SECCION . FICHA DE INFORMACION DETALLADA DEL EVENTO -->
            <div class="bannerEvento bannerEvento--informacion">
                <!-- SECCION . TABLA DE INFORMACION DETALLADA DEL EVENTO -->
                <table class="bannerEvento_datos">
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Estado: </p>
                        </td>
                        <td class="bannerEvento_icon">
                            <img src="{{'/images/icon/candado_abierto.png'}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$evento->estado}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Plazas: </p>
                        </td>
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/plazas_disponibles.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$evento->aforo}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">fecha: </p>
                        </td>
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/fecha.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$evento->fecha_incio}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Hora: </p>
                        </td>
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/hora.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$evento->hora_inicio}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Lugar: </p>
                        </td>                       
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/lugar.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$evento->direccion}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Ciudad: </p>
                        </td>                       
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/ciudad.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">{{$evento->Ciudad}}</p>
                        </td>
                    </tr>
                    <tr class="bannerEvento_seccion">
                        <td class="bannerEvento_item">
                            <p class="bannerEvento_textItem">Precio: </p>
                        </td>                       
                        <td class="bannerEvento_icon">
                            <img src="{{url('images/icon/valor.png')}}" alt="">
                        </td>
                        <td class="bannerEvento_value">
                            <p class="bannerEvento_textValue">$ {{$evento->costoboleta}}</p>
                        </td>
                    </tr>
                </table>
                <div class="bannerEvento_mapaContainer">
                    <div class="bannerEvento_mapa" id="map" style="height: 300px;"></div>                    
                </div>
                <div class="bannerEvento_btnContainer">
                    <a class="btn_azulOscuro--inlineBlockEstatic" href="{{ route('compras.show', $evento->id_evento) }}">comprar entrada</a>
                </div>
            
            </div>
            <!-- SECCION . INFORMACION EXTENDIDA DEL EVENTO -->
            <div class="bannerEvento bannerEvento--infoAdicional">
                <!-- SECCION . CONTENEDOR DE IMAGEN DEL EVENTO -->
                <div class="infoAdicional">
                    <div class="infoAdicional__h2Container">
                        <h2 class="infoAdicional__h2">informacion detallada del evento</h2>
                    </div>
                    <p class="infoAdicional__paragraph" >
                        {{$evento->descripcion}}
                    </p>
                    SSS
                    <p class="infoAdicional__paragraph" >
                        {{$evento->anfitriones}}
                    </p>
                </div>
                <div class="infoAdicional">
                    <div class="infoAdicional__h2Container">
                        <h2 class="infoAdicional__h2">Artistas</h2>
                    </div>                   
                    <p class="infoAdicional__paragraph" >
                        {{$evento->anfitriones}}
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- SECCION . SCRIPT PARA MAPGOOGLE -->
    <script>

                //quitar lineas al mapa
                if (window?.chrome !== undefined) {
                const originalInitTile = L.GridLayer.prototype._initTile;

                L.GridLayer.include({
                    _initTile: function (tile) {
                    originalInitTile.call(this, tile);

                    const tileSize = this.getTileSize();

                    tile.style.width = `${tileSize.x + -0}px`;
                    tile.style.height = `${tileSize.y + -0}px`;
                    }
                });
                }

        // Nominatim does not map some actual addresses
        'use strict';

        let varlat="{{$evento->latitud}}";
        let varlon="{{$evento->longitud}}";
        let varnom="{{$evento->nombre_evento}}"

        // Map
        const map = L.map('map', {
        center: [varlat, varlon],
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

        const marker = L.marker([varlat, varlon]).addTo(map)
            .bindPopup(varnom).openPopup();
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

    </script>

     <!-- SECCION 5. LOGIN -->
     <section class="login">
        <div class="login__contenido">
            <a class="login__cierre" href="">cerrar [X]</a>

            <h2 class="login__heading">Iniciar Sesión 
                <span>¡ Bienvenido !</span> 
            </h2>
            <form class="login__formulario" method="POST" action="{{ route('login') }}">
            @csrf
                <fieldset class="login__fieldset">
                    <legend class="login__legend"> Porfavor ingresa tus credenciales</legend>
                    <label for="correo">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')

                        <strong>{{ $message }}</strong>

                    @enderror

                    <label for="correo">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')

                            <strong>{{ $message }}</strong>

                    @enderror

                    <button class="login___btnIngresar" type="submit">Iniciar sesion</button>
                </fieldset>
                <fieldset class="login__fieldset">
                    <legend class="login__legend"> o Inicia sesión con:</legend>
                    <a class="login__btnGoogle" href="/google-auth/redirect">
                        <div class="login__img--GoogleContainer">
                            <img src="{{url('/images/icon/google-search.png')}}" alt="">
                        </div>
                        <p>Google</p>
                    </a>
                </fieldset>
                <p class="login__paragraph">No tienes una cuenta? <a href="/register">Registrate</a> </p>  
            </form>
            
        </div>
        <div class="login__contenido">

            <div class="login__petContainer">
                <img src="{{url('/images/pet-corp/1.png')}}" alt="">
            </div>
        </div>
    </section> 


@endsection