<x-app-layout>
    <x-slot name="title">Modificar una propiedad publicada</x-slot>

    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/js/multistep.js', 'resources/css/nucleo-svg.css'])

    <body>


    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://www.byverdleds.com/blog/wp-content/uploads/2019/08/LedSalon.jpg');">
    <span class="mask bg-gradient-dark opacity-5"></span>

    <div class="container my-auto mt-9">
        <div class="row">
            <div class="col-lg-7 col-md-10">
                <h1 class="text-white">Modificar su propiedad</h1>
            </div>
        </div>
        <div class="card h-100 align-content-xxl-center mt-3">

            <div class="multisteps-form">
        <!--progress bar-->
        <div class="row mt-5">
            <div class=" ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Tipo de Propiedad</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Address">Ubicación</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Order Info">Características</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Comments">Imágenes</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Comments">Caracerísticas específicas</button>
                </div>
            </div>
        </div>
        <!--form panels-->
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form" action="{{route('publicaciones.update', $publicacion)}}" method="POST">
                    @csrf @method('Patch')

                    <!--PANEL TIPO DE PROPIEDAD-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Tipo de Propiedad</h3>
                        <div class="multisteps-form__content">

                            <div class="form-row mt-4 shadow-none p-3 mb-5 bg-light rounded">
                                <select class="multisteps-form__select form-control" name="tipo_propiedad">
                                    @foreach($tiposPropiedad as $tipoPropiedad)
                                        <option value="{{$tipoPropiedad->id}}"
                                                @if($tipoPropiedad->id == $publicacion->id_tipo_propiedad)
                                                    selected
                                                 @endif
                                        >{{$tipoPropiedad->nombre_tipo_propiedad}}</option>
                                    @endforeach
                                </select>

{{--                                @error('tipo_propiedad')--}}
{{--                                <small style="color:red">{{$message}}</small>--}}
{{--                                @enderror--}}

                            </div>

                            <div class="button-row d-flex mt-4">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
                            </div>
                        </div>
                    </div>


                    <!--PANEL UBICACIÓN-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Direccion</h3>
                        <div class="multisteps-form__content">



                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="calle" type="text" value="{{old('calle',$publicacion->calle_publicacion)}}">
                                </div>
                            </div>

                            <div class="form-row mt-4 shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="altura" type="number" placeholder="Altura" value="{{old('altura',$publicacion->altura_publicacion)}}">
                                </div>
                            </div>


                            <div class="form-row mt-4 shadow-none p-3 mb-5 bg-light rounded">
                                <select class="multisteps-form__select form-control" name="provincia">
                                    <option selected="selected" name="provincia">Seleccione la provincia</option>
                                    @foreach($provincias as $provincia)
                                        <option value="{{$provincia->id}}"
                                                @if($provincia->id == $publicacion->id_provincia)
                                                    selected
                                                @endif
                                        >{{$provincia->nombre_provincia}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-row mt-4 shadow-none p-3 mb-5 bg-light rounded">
                                <select class="multisteps-form__select form-control" name="ciudad">
                                    <option selected="selected" name="ciudad">Seleccione la localidad</option>
                                    @foreach($ciudades as $ciudade)
                                        <option value="{{$ciudade->id}}"
                                                @if($ciudade->id == $publicacion->id_ciudad)
                                                    selected
                                                @endif
                                        >{{$ciudade->nombre_ciudad}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="button-row d-flex mt-4 " >
                            <div class="col">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                            </div>
                            <div class="col text-md-end">
                                <button class="btn btn-primary js-btn-next " type="button" title="Next">Siguiente</button>
                            </div>
                        </div>
                    </div>


                    <!--PANEL CARACTERÍSTICAS-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Caracteristicas Generales</h3>
                        <div class="multisteps-form__content">

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="ambientes" type="number" placeholder="Ambientes" value="{{old('ambientes',$publicacion->ambientes_publicacion)}}">
                                </div>
                            </div>


                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="dormitorios" type="number" placeholder="Dormitorios" value="{{old('dormitorios', $publicacion->dormitorios_publicacion)}}">
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="baños" type="number" placeholder="Baños" value="{{old('baños', $publicacion->banios_publicacion)}}">
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="cocheras" type="number" placeholder="Cocheras" value="{{old('cocheras', $publicacion->cochera_publicacion)}}">
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="cubierta" type="number" placeholder="Superficie cubierta" value="{{old('cubierta', $publicacion->superficie_cubierta_casa)}}">
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="total_terreno" type="number" placeholder="Superficie total del terreno" value="{{old('total_terreno', $publicacion->superficie_total_terreno)}}">
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="precio" type="number" placeholder="Precio" value="{{old('precio', $publicacion->precio_publicacion)}}">
                                </div>
                            </div>

                        </div>

                        <div class="button-row d-flex mt-4 " >
                            <div class="col">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                            </div>
                            <div class="col text-md-end">
                                <button class="btn btn-primary js-btn-next " type="button" title="Next">Siguiente</button>
                            </div>
                        </div>

                    </div>

                    <!--PANEL IMAGENES-->
                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Fotos de la propiedad. Puede cargar hasta 5 imagenes</h3>
                        <div class="multisteps-form__content">

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input class="form-control" name="titulo" type="text" placeholder="Titulo de la publicacion" value="{{old('titulo', $publicacion->titulo_publicacion)}}">
                                    @error('titulo')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <textarea class="form-control" name="descripcion" placeholder="Descripcion de la publicacion">{{old('descripcion', $publicacion->descripcion_publicacion)}}</textarea>
                                    @error('descripcion')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input type="file" placeholder="Imagen"/>
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input type="file" placeholder="Imagen"/>
                                </div>
                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <div class="col">
                                    <input type="file" placeholder="Imagen"/>
                                </div>
                            </div>


                        </div>

                        <div class="button-row d-flex mt-4 " >
                            <div class="col">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                            </div>
                            <div class="col text-md-end">
                                <button class="btn btn-primary js-btn-next " type="button" title="Next">Siguiente</button>
                            </div>
                        </div>

                    </div>


                    <!--single form panel-->

                    <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Comodidades</h3>
                        <div class="multisteps-form__content">

                            @foreach($comodidades as $comodidad)
                                <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                    <h6 class="p-2" >{{$comodidad->nombre_comodidad}}</h6>
                                    @foreach($caracteristicasComodidades->where('id_comodidad',$comodidad->id) as $caracteristica)
                                        <div class="col form-check-inline">
                                            <input type="checkbox" name="caracteristicas[]" value="{{$caracteristica->id}}" id="{{$caracteristica->id}}" class="form-check-input ">
                                            <label for="{{$caracteristica->id}}">{{$caracteristica->nombre_caracteristica_comodidad}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach

                        </div>
                        <div class="button-row d-flex mt-4 " >
                            <div class="col">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                            </div>
                            <div class="col text-md-end">
                                <button class="btn btn-success ml-auto" type="submit" title="Send">Enviar</button>
                            </div>
                        </div>

                    </div>


             <!--       <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                        <h3 class="multisteps-form__title">Comodidades</h3>
                        <div class="multisteps-form__content">

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <h6 class="p-2" >Caracteristicas especificas</h6>
                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Acceso para personas con discapacidad</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Permiten mascotas</label>
                                </div>

                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <h6 class="p-2" >Caracteristicas</h6>
                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input ">
                                    <label class="form-check-label" for="exampleCheck1">Aire acondicionado</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input ">
                                    <label class="form-check-label" for="exampleCheck1">Amoblado</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input ">
                                    <label class="form-check-label" for="exampleCheck1">Calefaccion</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input ">
                                    <label class="form-check-label" for="exampleCheck1">Cocina equipada</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Lavarropas</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Termotanque</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Vigilancia</label>
                                </div>

                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <h6 class="p-2">Servicios</h6>
                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Ascensor</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Internet/Wifi</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Lavanderia</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input ">
                                    <label class="form-check-label" for="exampleCheck1">Servicio de limpieza</label>
                                </div>

                            </div>

                            <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                <h6 class="p-2">Ambientes</h6>
                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Balcon</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Cocina</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Comedor</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Hall</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Jardin</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Lavadero</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Living</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Living comedor</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Patio</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Sotano</label>
                                </div>

                                <div class="col form-check-inline">
                                    <input type="checkbox" class="form-check-input " >
                                    <label class="form-check-label" for="exampleCheck1">Terraza</label>
                                </div>

                            </div>

                        </div>



                        <div class="button-row d-flex mt-4 " >
                            <div class="col">
                                <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                            </div>
                            <div class="col text-md-end">
                                <button class="btn btn-success ml-auto" type="submit" title="Send">Enviar</button>
                            </div>
                        </div>

                    </div>
-->

                </form>
            </div>
        </div>
    </div>

            <a href="{{route('publicaciones.index')}}">Regresar</a>


        </div>

    </div>
    </div>
    </body>
</x-app-layout>

{{--    <input name="dormitorios" type="text" value="{{old('dormitorios',$publicacion->dormitorios_publicacion)}}">--}}



 {{--   <form action="{{route('publicaciones.update', $publicacion)}}" method="POST">
        @csrf @method('Patch')
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Tipo de Propiedad"></div>
            <div class="progress-step" data-title="Ubicacion"></div>
            <div class="progress-step" data-title="Caracteristicas"></div>
            <div class="progress-step" data-title="Imagenes"></div>
            <div class="progress-step" data-title="Caracteristicas especificas"></div>
        </div>

        <div class="form-step form-step-active">
            <div class="select-group">
                <label>Tipo de Propiedad</label>
                --}}{{--                <input name="tipo_propiedad" type="text" value="{{old('tipo_propiedad')}}">--}}{{--
                <select name="tipo_propiedad">
                    <option>Seleccione el tipo de propiedad</option>
--}}{{--                    @foreach($publicacion as $publicacions)--}}{{--
--}}{{--                        <option value="{{$publicacions->tipo_propiedad}}">{{$publicacions->tipo_propiedad}}</option>--}}{{--
--}}{{--                    @endforeach--}}{{--
                </select>
                @error('tipo_propiedad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
--}}{{--            <div class="input-group">--}}{{--
--}}{{--                <label>Subtipo de Propiedad</label>--}}{{--
--}}{{--                --}}{{----}}{{--                <input name="subtipo_propiedad" type="text" value="{{old('subtipo_propiedad')}}">--}}{{--
--}}{{--                <select name="subtipo_propiedad">--}}{{--
--}}{{--                    <option>Seleccione el tipo de propiedad</option>--}}{{--
--}}{{--                    <option value="Chalet">Chalet</option>--}}{{--
--}}{{--                    <option value="Monoambiente">Monoambiente</option>--}}{{--
--}}{{--                </select>--}}{{--
--}}{{--                @error('subtipo_propiedad')--}}{{--
--}}{{--                <small style="color:red">{{$message}}</small>--}}{{--
--}}{{--                @enderror--}}{{--
--}}{{--            </div>--}}{{--
            <div class="">
                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label>Direccion (Ingrese calle y altura)</label>
--}}{{--                <input name="direccion" type="text" value="{{old('direccion',$publicacion->direccion_propiedad)}}">--}}{{--
--}}{{--                @error('direccion')--}}{{--
--}}{{--                <small style="color:red">{{$message}}</small>--}}{{--
--}}{{--                @enderror--}}{{--
            </div>
            <div class="input-group">
                <label>Provincia</label>
--}}{{--                                <input name="provincia" type="text" value="{{old('provincia')}}">--}}{{--
--}}{{--                <select name="provincia" value="{{old('provincia',$publicacion->provincia_propiedad)}}">--}}{{--
--}}{{--                    <option>Seleccione la provincia</option>--}}{{--
--}}{{--                    <option value="Misiones" >Misiones</option>--}}{{--
--}}{{--                </select>--}}{{--
--}}{{--                @error('provincia')--}}{{--
--}}{{--                <small style="color:red">{{$message}}</small>--}}{{--
--}}{{--                @enderror--}}{{--
            </div>
            <div class="input-group">
                <label>Ciudad</label>
                --}}{{--                <input name="ciudad" type="text" value="{{old('ciudad')}}">--}}{{--
                <select name="ciudad">
                    <option>Seleccione la ciudad</option>
                    <option value="Posadas">Posadas</option>
                </select>
                @error('ciudad')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="input-group">
                <label>Ubicacion de la Propiedad</label>
                <input name="#" type="file" value="{{old('#')}}">
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div>
                <label>Caracteristicas Generales</label>
                <div class="input-group">
                    <label>Ambientes</label>
                    <input name="ambientes" type="text" value="{{old('ambientes',$publicacion->ambientes_publicacion)}}">
                    @error('ambientes')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Dormitorios</label>
                    <input name="dormitorios" type="text" value="{{old('dormitorios',$publicacion->dormitorios_publicacion)}}">
                    @error('dormitorios')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Baños</label>
                    <input name="baños" type="text" value="{{old('baños',$publicacion->banios_publicacion)}}">
                    @error('baños')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Cocheras</label>
                    <input name="cocheras" type="text" value="{{old('cocheras',$publicacion->cochera_publicacion)}}">
                    @error('cocheras')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div>
                <label>Superficie de la propiedad</label><br>
                <div class="input-group">
                    <label>Cubierta(Lo que ocupa la casa)</label>
                    <input name="cubierta" type="text" value="{{old('cubierta',$publicacion->superficie_cubierta_casa)}}">
                    @error('cubierta')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="input-group">
                    <label>Total(El valor del terreno completo)</label>
                    <input name="total_terreno" type="text" value="{{old('total_terreno',$publicacion->superficie_total_terreno)}}">
                    @error('total_terreno')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div>
                <label>Precio</label><br>
                <div class="input-group">
                    <label>Precio Total</label>
                    <input name="precio" type="text" value="{{old('precio',$publicacion->precio_publicacion)}}">
                    @error('precio')
                    <small style="color:red">{{$message}}</small>
                    @enderror
                </div>
--}}{{--                <div class="input-group">--}}{{--
--}}{{--                    <label>Monto Inicial</label>--}}{{--
--}}{{--                    <input name="#" type="text" value="{{old('#')}}">--}}{{--
--}}{{--                    @error('#')--}}{{--
--}}{{--                    <small style="color:red">{{$message}}</small>--}}{{--
--}}{{--                    @enderror--}}{{--
--}}{{--                </div>--}}{{--
            </div>
            <label>Descripcion</label>
            <div class="input-group">
                <label>Titulo de la Publicacion</label>
                <input name="titulo" type="text" value="{{old('titulo', $publicacion->titulo_publicacion)}}">
                @error('titulo')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="text-group">
                <label>Descripcion</label>
                <textarea name="descripcion" >{{old('descripcion',$publicacion->descripcion_publicacion)}}</textarea>
                @error('descripcion')
                <small style="color:red">{{$message}}</small>
                @enderror
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label>Foto de la propiedad Puede cargar hasta 3 imagenes en formatro.....</label>
                <input name="ciudad" type="file" value="{{old('ciudad')}}">
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>
        <div class="form-step">
            <div id="container">
                <div class="tres">
                    <h5>Caracteristicas especificas</h5>
                </div>
                <div class="tres">
                    <li><label>Acceso para personas con discapacidad<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Permiten mascotas<input type="checkbox" value="val" name="name2"></label></li>
                </div>
            </div>
            <div id="container">
                <div class="tres">
                    <h5>Caracteristicas</h5>
                </div>
                <div class="tres">
                    <li><label>Aire acondicionado<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Amoblado<input type="checkbox" value="Amoblado" name="Amoblado"></label></li>
                    <li><label>Calefaccion<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Cocina equipada<input type="checkbox" value="val" name="name2"></label></li>
                </div>
                <div class="tres">
                    <li> <label>Lavarropas<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Termotanque<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Vigilancia<input type="checkbox" value="val" name="name"></label></li>
                </div>
            </div>
            <div id="container">
                <div class="tres">
                    <h5>Servicios</h5>
                </div>
                <div>
                    <li><label>Ascensor<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Internet/Wifi<input type="checkbox" value="val" name="name"></label></li>
                    <li> <label>Lavanderia<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Servicio de limpieza<input type="checkbox" value="val" name="name"></label></li>
                </div>
            </div>
            <div id="container">
                <div class="tres">
                    <h5>Ambientes</h5>
                </div>
                <div class="tres">
                    <li><label>Balcon<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Cocina<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Comedor<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Hall<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Jardin<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Lavadero<input type="checkbox" value="val" name="name"></label></li>
                </div>
                <div class="tres">
                    <li><label>Living<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Living comedor<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Patio<input type="checkbox" value="val" name="name2"></label></li>
                    <li><label>Sotano<input type="checkbox" value="val" name="name"></label></li>
                    <li><label>Terraza<input type="checkbox" value="val" name="name2"></label></li>
                </div>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <button type="submit">Confirmar cambios</button>
            </div>
        </div>
    </form>--}}


