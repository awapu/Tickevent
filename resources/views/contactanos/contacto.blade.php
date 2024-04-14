@extends('layout.about')

@section('contenido')


    <!-- SECCION 1. SECCION DE CONTENIDO PRINCIPAL -->
    <main class="sectionContacto">
        <section class="contenedor sectionContacto__container">
            <!-- SECCION 1.1 OPCIONES CONTACTO -->
            <div class="opcionesContacto">
                <div class="opcionesContacto__opcion">
                    <figure class="opcionesContacto__imgContainer">
                        <img class="opcionesContacto__img" src="{{url('images/contacto/telefono.png')}}" alt="">
                    </figure>
                    <div class="opcionesContacto__txtContainer">
                        <h3 class="opcionesContacto__txt opcionesContacto__h3">Numero de atencion</h3>
                        <p class="opcionesContacto__txt opcionesContacto__numero">+57 3002001010</p>
                    </div>
                </div>
                <div class="opcionesContacto__opcion">
                    <figure class="opcionesContacto__imgContainer">
                        <img class="opcionesContacto__img" src="{{url('images/contacto/correo-electronico.png')}}" alt="">
                    </figure>
                    <div class="opcionesContacto__txtContainer">
                        <h3 class="opcionesContacto__txt opcionesContacto__h3">correo electronico</h3>
                        <p class="opcionesContacto__txt opcionesContacto__correo">nfo@tickevent.app</p>                        
                    </div>

                </div>
                <div class="opcionesContacto__opcion">
                    <figure class="opcionesContacto__imgContainer">
                        <img class="opcionesContacto__img" src="{{url('images/contacto/calendario.png')}}" alt="">
                    </figure>
                    <div class="opcionesContacto__txtContainer">
                        <h3 class="opcionesContacto__txt opcionesContacto__h3">horarios de atencion</h3>
                        <p class="opcionesContacto__txt opcionesContacto__diaAttend">Lunes-viernes 8:00 am- 5:00 pm</p>
                        <p class="opcionesContacto__txt opcionesContacto__diaAttend">Sábado 10:00 am- 2:00 pm</p>                        
                    </div>

                </div>
                
            </div>
            <!-- SECCION 1.2 FORMULARIO PARA CCONTACTO -->
            <div class="opcionesContacto opcionesContacto--formContainer">
                <div class="opcionesContacto__h1Container">
                    <h1 class="opcionesContacto__h1">CONTACTENOS</h1>
                </div>

                <form class="optionsForm" action="">
                    <div class="optionsForm__inputTxtContainer">
                        <input class="optionsForm__input" placeholder="NOMBRE" type="text">
                        <input class="optionsForm__input" placeholder="APELLIDO" type="text">
                        <input class="optionsForm__input" placeholder="CORREO ELECTRONICO" type="email">
                        <input class="optionsForm__input" placeholder="NUMERO DE TELEFONO" type="tel">
                    </div>
                    <div class="optionsForm__textareaContainer">
                        <textarea class="optionsForm__textarea" name="" id="" cols="30" rows="10">
                        </textarea>
                    </div>
                    <div class="optionsForm__btnContainer">
                        <input class="btn_amarillo--inlineBlockEstatic24" type="submit" value="ENVIAR">
                    </div>
                </form>
            </div>
        </section>
    </main>

    <section class="seccionContactoUbicados">
        <div class="contenedor bannerEvento_mapaContainer">
            <div class="bannerEvento_mapa" id="map"></div>                    
        </div>
    </section>

        <!-- SECCION . SCRIPT PARA MAPGOOGLE -->
        <script>

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
            document.getElementById('latitude').value = marker.getLatLng().lat;
            document.getElementById('longitude').value = marker.getLatLng().lng;
            map.panTo([lat,lng]);
            }
            }
        </script>


@endsection