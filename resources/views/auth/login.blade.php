@extends('layout.info')

@section('contenido')

        <!-- SECCION 1. REGISTRO -->
        <main class="registroMain">
            <section class="registro contenedor">
    
                    <!-- SECCION 1.1 CONTAINER DEL FORMULARIO DE REGISTRO -->
                    <div class="registro__contenido registro__contenido--confirmacionPage">
            
                        <!-- SECCION 1.1.1 FORMULARIO REGISTRO -->
                        <form class="registro__formulario registro__formulario--confirmacionPage" method="POST" action="{{ route('login') }}">
                            <!-- <div class="registro__logoContainer">
                                <a href=""><img src="../build/img/logotipo/logo_1.png" alt=""></a>
                            </div> -->
                            <legend class="registro__legend"> Porfavor ingresa tus datos</legend>
                            <fieldset class="registro__fieldset utl-border-color-transparente">

                                <br>
                                <div>
                                @csrf
                                
                                    <div >
                                        <label for="email" >{{ __('Correo') }}</label>
                                        <div>
                                            <input id="email" type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                           <br>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                                            <div >
                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
                                                     <div >
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div >
                                            <div >
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <br>
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recordarme') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div >
                                            <div >
                                                <button type="submit" class="registro__btn">
                                                    {{ __('Login') }}
                                                </button>
                                                            @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Recordar Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <br>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                        </li>
                                </form>
  
                                </div>
                                <p class="registro__paragraph registro__paragraph--politicas">Al registrarme, acepto los <a href="">términos</a> y <a href="">políticas</a> de privacidad.</p>


                            </fieldset>
                            <!-- <fieldset class="registro__fieldset registro__fieldset--google utl-border-color-transparente">
                                <legend class="registro__legend"> o registrate con:</legend>
                                <a class="registro__btn registro__btn--Google" href="">
                                    <div class="registro__img--GoogleContainer">
                                        <img src="../build/img/icon/google-search.png" alt="">
                                    </div>
                                    <p class="registro__paragraph">Google</p>
                                </a>
                            </fieldset> -->
                        </form>
                        <p class="registro__paragraph registro__paragraph--captchaGoogle">Este sitio está protegido por reCAPTCHA y se aplican la <a href="">política de privacidad</a> y los <a href="">términos de servicios</a> de <span>Google.</span>  </p>  
                        
                        </div>
                        <!-- SECCION 1.2 CONTAINER DEL BANNER -->
                        <div class="registro__contenido registro__contenido--confirmacionPage registro__contenido--banner">
        
                            <!-- SECCION 1.2.1 CONTAINER DEL IMG BANNER -->
                            <div class="registro__img registro__img--confirmacionPage registro__img--bannerContainer">
                                <img src="{{url('/images/pet-corp/tapar_ojos/8.png')}}" alt="">
                            </div>
                        </div>
                </section>
    
        </main>
@endsection
