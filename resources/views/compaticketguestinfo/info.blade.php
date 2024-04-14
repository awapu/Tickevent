@extends('layout.info')

@section('contenido')

        <!-- SECCION 1. REGISTRO -->
        <main class="registroMain">
            <section class="registro contenedor">
    
                    <!-- SECCION 1.1 CONTAINER DEL FORMULARIO DE REGISTRO -->
                    <div class="registro__contenido registro__contenido--confirmacionPage">
            
                        <!-- SECCION 1.1.1 FORMULARIO REGISTRO -->
                        <form class="registro__formulario registro__formulario--confirmacionPage">
                            <!-- <div class="registro__logoContainer">
                                <a href=""><img src="../build/img/logotipo/logo_1.png" alt=""></a>
                            </div> -->
                            <fieldset class="registro__fieldset utl-border-color-transparente">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">{{ __('Verifique su correo electrónico') }}</div>
                                                <br>
                                                <div class="card-body">
                                                    
                                                    {{ __('Se ha enviado a su correo electronico la informavion para la anetrada al evento') }}

                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </fieldset>

    
                        </form>
                        <p class="registro__paragraph registro__paragraph--captchaGoogle"> </p>  
                        
                    </div>
                    <!-- SECCION 1.2 CONTAINER DEL BANNER -->
                    <div class="registro__contenido registro__contenido--confirmacionPage registro__contenido--banner">
    
                        <!-- SECCION 1.2.1 CONTAINER DEL IMG BANNER -->
                        <div class="registro__img registro__img--confirmacionPage registro__img--bannerContainer">
                            <img src="{{url('/images/pet-corp/tapar_ojos/1.png')}}" alt="">
                        </div>
                    </div>
            </section>
    
        </main>

@endsection
