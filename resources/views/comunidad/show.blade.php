@extends('layout.info')

@section('contenido')

            <div class="contenedor mapa__container">
                <div class="mapa__containerGoogle" id="map"></div>

            </div>
      
            
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
                                    <img src="images/icon/google-search.png" alt="">
                                </div>
                                <p>Google</p>
                            </a>
                        </fieldset>
                        <p class="login__paragraph">No tienes una cuenta? <a href="/register">Registrate</a> </p>  
                    </form>
                    
                </div>
                <div class="login__contenido">

                    <div class="login__petContainer">
                        <img src="images/pet-corp/1.png" alt="">
                    </div>
                </div>

            </section> 

            


   

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

                



                //ARREGLO DATOS DE EVENTO
                const events = [
                    @foreach($eventosi as $key => $data)
                        [ "{{$data->latitud}}", "{{$data->longitud}}", "{{$data->nombre_evento}}", "{{$data->id_evento}}" ],
                    @endforeach
                ];
            
                //ICONO
                var greenIcon = L.icon({
                    iconUrl: '{{url('/images/icon/locationTT.png')}}',
                    

                    iconSize:     [38, 95], // size of the icon
                    shadowSize:   [50, 64], // size of the shadow
                    iconAnchor:   [24, 94], // point of the icon which will correspond to marker's location
                    shadowAnchor: [10, 62],  // the same for the shadow
                    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
                });

                //CREAR MAPA
                let map = L.map('map').setView([4.716713772370445, -74.06662448808277], 11);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                    maxZoom: 100
                }).addTo(map);
                
                



                

                //AGREGAR PUNTOS
                    if (events.length) {
                        events.forEach(function(data, i) {
                        let [lat, lng] = [data[0], data[1]];
                        let label = "<title3>" + data[2] + "</title3><br><a href='http://tickevent.xyz.com.co/detEvento/" + data[3] + "'>ir al evento</a>";
                        
                        if (lat && lng) {
                        marker = new L.marker([lat, lng],{icon: greenIcon})
                            .bindPopup(label)
                            .addTo(map);
                
                        } else {
                        console.log('No tenemos eventos disponibles: ' + label)
                        }
                    })
                    }


                    
              </script>
@endsection
