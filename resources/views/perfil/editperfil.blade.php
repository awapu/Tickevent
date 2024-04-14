@extends('layout.perfil')

@section('contenido')

    <!-- SECCION EDICION DE CUENTAS -->
    <main class="adminCtas">
        @foreach($users as $user)
        <div class="contenedor adminCtas__container">
            <form class="ctasForm" action="{{ route('editprofile.update', $user->id )}}" method="post" enctype="multipart/form-data">
                <!-- CONTENEDOR GRUPO DE CAMPOS DE CUENTA PERSONAL -->
                @csrf
                @method('PATCH')
                <div class="fieldsGrup fieldsGrup--ctaPersonal">
                    <!--SECCION ENCABEZADO  # 1 -->
                    <a class="ctasForm__encabezado">
                        <div class="ctasForm__encabezadoContainer">
                            <div class="ctasForm__h2Encabezado">
                                <h2 class="ctasForm__h2">PERFIL PERSONAL</h2>
                            </div>
                        </div>
                    </a>
    
                    <!-- GRUPO CAMPOS CUENTA PERSONAL # 1 -->
                    <fieldset class="ctasForm__fieldset ctasForm__fieldset--fotoPerfil ctasForm__fieldset--fotoPerfilPersonal">
                        <legend>FOTO DE PERFIL</legend>
                        
                            
                        
                        <div class="ctas__campo">
                            <div class="ctasCampo__auxContainer">
                                <div class="ctasCampo__auxContainerFile">
                                    <label id="campo__label0201" class="ctasCampo__btn" for="inputUploadImg0201">cargar imágen</label>
                                    <input id="inputUploadImg0201" class="inputSet__data" class="" type="file"  name="imgusr" accept="image/*" {{$errors->has('imgusr') ? 'is-invalid' : ''}}>   
                                    @error('imgusr')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                </div>

                            </div>

                            @if(!empty($user->imgusr))
                                <div class="ctasCampo__imgContainer">
                                    <img id="campo__img0201" class="ctasCampo__img" src="{{asset('storage').'/'.$user->imgusr}}" alt="">
                                </div>
                            @else
                                <div class="ctasCampo__imgContainer">
                                    <img id="campo__img0201" class="ctasCampo__img" src="{{url('images/perfil/foto_bg_blanco_1.png')}}" alt="">
                                </div>
                            @endif


                        </div>
                    </fieldset>               
                    <!-- GRUPO CAMPOS CUENTA PERSONAL # 2 -->
                    <fieldset class="ctasForm__fieldset ctasForm__fieldset--ctaPersonal">
                        <legend>DATOS PERSONALES</legend>
                        <div class="ctasForm__fieldsetContainer ctasForm__fieldsetContainer--ctaPersonal">

                            <div class="ctas__campo">
                                <label for="nombres">Nombres:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/nombres.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="text" id="name" name="name" value="{{ old('name') ??  $user->name }}" {{$errors->has('name') ? 'is-invalid' : ''}} >   
                                    @error('name')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="ctas__campo">
                                <label for="apellidos">Apellidos:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/apellidos.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') ??  $user->apellidos }}" {{$errors->has('apellidos') ? 'is-invalid' : ''}}>   
                                    @error('apellidos')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>
                            <div class="ctas__campo">
                                <label for="identificacion">No Identificacion:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/identificacion.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="number" id="cedula" name="cedula" value="{{ old('cedula') ??  $user->cedula }}" {{$errors->has('cedula') ? 'is-invalid' : ''}}>   
                                    @error('cedula')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>
                            <div class="ctas__campo">
                                <label for="nacimiento">Fecha de nacimiento:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/cumpleanios.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') ??  $user->fecha_nacimiento }}" {{$errors->has('fecha_nacimiento') ? 'is-invalid' : ''}}>   
                                    @error('fecha_nacimiento')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>

                            <div class="ctas__campo">
                                <label for="apodo">Nickname:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/apodo.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="text" id="apodo" name="apodo" value="{{ old('apodo') ??  $user->apodo }}" {{$errors->has('apodo') ? 'is-invalid' : ''}}>   
                                    @error('apodo')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>

                            <div class="ctas__campo">
                                <label for="user">Tipo Usuario:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/tipo_usuario.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="text" id="tipo_user" name="tipo_user" value="{{ old('tipo_user') ??  $user->tipo_user }}" {{$errors->has('tipo_user') ? 'is-invalid' : ''}}>   
                                    @error('tipo_user')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="ctas__campo">
                                <label for="email">Correo:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/correo.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="email" id="email" name="email" value="{{ old('email') ??  $user->email }}" {{$errors->has('email') ? 'is-invalid' : ''}}>   
                                    @error('email')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                    
                            </div>                   
                            
                
                            <div class="ctas__campo">
                                <label for="celular">Celular:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/celular.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="tel" id="celular" name="celular" value="{{ old('celular') ??  $user->celular }}" {{$errors->has('celular') ? 'is-invalid' : ''}}>   
                                    @error('celular')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>                   
                                
                        </div>
                    </fieldset>                   
                </div>


                <!-- CONTENEDOR GRUPO DE CAMPOS DE CUENTA PROMOTOR -->
                <div class="fieldsGrup fieldsGrup--ctaPromotor">
                    <!--SECCION ENCABEZADO CUENTA PROMOTOR # 1 -->
                    <a class="ctasForm__encabezado">
                        <div class="ctasForm__encabezadoContainer">
                            <div class="ctasForm__h2Encabezado">
                                <h2 class="ctasForm__h2">PERFIL PROMOTOR</h2>
                            </div>
                        </div>
                    </a>
                    <!-- GRUPO CAMPOS CUENTA PROMOTOR # 1 -->
                    <fieldset class="ctasForm__fieldset ctasForm__fieldset--fotoPerfil">
                        <legend>FOTO DE PERFIL</legend>

                        <div class="ctas__campo">
                            <div class="ctasCampo__auxContainer">
                                <div class="ctasCampo__auxContainerFile">
                                    <label id="campo__label0202" class="ctasCampo__btn" for="inputUploadImg0202">cargar imágen</label>
                                    <input id="inputUploadImg0202" class="inputSet__data" class="" type="file" name="imgbussines" accept="image/*" {{$errors->has('imgbussines') ? 'is-invalid' : ''}}>                          
                                </div>
                                @error('celular')
                                <div style="background: #E57373; color: white;">{{ $message }}</div>
                                @enderror 
                            </div>

                            @if(!empty($user->imgusr))
                            <div class="ctasCampo__imgContainer">
                                <img id="campo__img0202" class="ctasCampo__img" src="{{asset('storage').'/'.$user->imgbussines}}" alt="">
                            </div>
                            @else 
                            <div class="ctasCampo__imgContainer">
                                <img id="campo__img0202" class="ctasCampo__img" src="{{url('images/perfil/foto_bg_blanco_1.png')}}" alt="" >
                            </div>     
                            @endif

                        </div>
                    </fieldset>               

                    <!-- GRUPO CAMPOS CUENTA PROMOTOR # 2 -->
                    <fieldset class="ctasForm__fieldset ctasForm__fieldset--ctaPromotor">
                        <legend>DATOS DE LA EMPRESA</legend>
        
                        <div class="ctasForm__fieldsetContainer ctasForm__fieldsetContainerPromotor">

                            <div class="ctas__campo">
                                <label for="nombres">NIT:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/nit.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="text" id="nit" name="nit" value="{{ old('nit') ??  $user->nit }}" {{$errors->has('nit') ? 'is-invalid' : ''}}>   
                                    @error('nit')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="ctas__campo">
                                <label for="apellidos">Razon Social:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/apellidos.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="text" id="razonSocial" name="razonSocial" value="{{ old('razonSocial') ??  $user->razonSocial }}" {{$errors->has('razonSocial') ? 'is-invalid' : ''}}>   
                                    @error('razonSocial')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>
                            <!--
                            <div class="ctas__campo">
                                <label for="identificacion">No Identificacion:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="number" id="identificacion" name="identificacion" value=" 'is-invalid' : ''}}>   
                                   
                                    <div style="background: #E57373; color: white;"></div>
                                   
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div> 
                        -->                                      
                                
                        </div>
                    </fieldset>                   
                    <!-- GRUPO CAMPOS CUENTA PROMOTOR # 3 -->
                    <fieldset class="ctasForm__fieldset ctasForm__fieldset--ctaPromotor">
                        <legend>OBJETO SOCIAL</legend>
        
                        <div class="ctasForm__fieldsetContainer ctasForm__fieldsetContainerPromotor ctasForm__fieldsetContainerPromotorObjetoSocial">


                            <div class="ctas__campo ctas__campo--ctaPromotorDescripcion">
                                <label for="descripcion">Descripcion:</label>
                                <div class="ctasForm_inputContainer  ctasForm_inputContainer--ctaPromotorDescripcion">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/textarea/objeto_social.png')}}" alt="">
                                    </figure>
                                    <textarea name="descripcion" id="desc_empresa" cols="16" rows="30"  class="inputSet__data" name="desc_empresa" {{$errors->has('desc_empresa') ? 'is-invalid' : ''}}>{{ old('desc_empresa') ??  $user->desc_empresa }}</textarea>
                                    
                                    @error('desc_empresa')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>                                      
                                
                        </div>
                    </fieldset>                   
                    <!-- GRUPO CAMPOS CUENTA PROMOTOR # 4 -->
                    <fieldset class="ctasForm__fieldset ctasForm__fieldset--ctaPromotor">
                        <legend>DOMICILIO</legend>
        
                        <div class="ctasForm__fieldsetContainer ctasForm__fieldsetContainerPromotor">

                            <div class="ctas__campo ctas__campo--ctaPromotorDireccion">
                                <label for="direccion">Direccion:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/direccion_empresa.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="text" id="direccion" name="direccion" value="{{ old('direccion') ??  $user->direccion }}" {{$errors->has('direccion') ? 'is-invalid' : ''}}>   
                                    @error('direccion')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>                         
                        </div>
                    </fieldset>                   
                    <!-- GRUPO CAMPOS CUENTA PROMOTOR # 5 -->
                    <fieldset class="ctasForm__fieldset ctasForm__fieldset--ctaPromotor">
                        <legend>CONTACTO</legend>
        
                        <div class="ctasForm__fieldsetContainer ctasForm__fieldsetContainerPromotor">

                            <div class="ctas__campo">
                                <label for="corp_email">correo:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/correo.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="email" id="corp_email" name="corp_email" value="{{ old('corp_email') ??  $user->corp_email }}" {{$errors->has('corp_email') ? 'is-invalid' : ''}}>   
                                    @error('corp_email')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div> 

                            <div class="ctas__campo">
                                <label for="telefono">Telefono:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/telefono.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="numeric" id="telefono" name="telefono" value="{{ old('telefono') ??  $user->telefono }}" {{$errors->has('telefono') ? 'is-invalid' : ''}}>   
                                    @error('telefono')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>                         

                            <div class="ctas__campo">
                                <label for="corp_celular">Celular:</label>
                                <div class="ctasForm_inputContainer">
                                    <figure class="ctasForm_iconInputContainer">
                                        <img class="ctasForm_iconInput" src="{{url('images/icon/input/celular.png')}}" alt="">
                                    </figure>
                                    <input class="inputSet__data" type="tel" id="corp_celular" name="corp_celular" {{$errors->has('corp_celular') ? 'is-invalid' : ''}}>   
                                    @error('corp_celular')
                                    <div style="background: #E57373; color: white;">{{ $message }}</div>
                                    @enderror 
                                    <div class="ctasForm__btnContainer">
                                        <a class="ctasForm__btn btn_edicionFieldsForm--inlineEstatic">editar</a>
                                    </div>
                                </div>                   
                            </div>                         
                        </div>
                    </fieldset>  
                    @endforeach                 
                </div>
                <div class="ctasForm__btnContainer">
                    
                    <input class="ctasForm__btn btn_gris--inlineBlockEstatic24" type="submit" value="GUARDAR CAMBIOS" >
                </div>
            </form>
        </div>

    </main>

@endsection