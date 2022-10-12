<x-app-layout>

    <x-slot name="title">Publicar una propiedad</x-slot>

    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/js/multistep.js', 'resources/css/nucleo-svg.css', ])


    <body>


    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://www.byverdleds.com/blog/wp-content/uploads/2019/08/LedSalon.jpg');">
        <span class="mask bg-gradient-dark opacity-5"></span>

        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="text-white">Registre su propiedad</h1>
                </div>
            </div>
            <div class="card h-100 align-content-xxl-center">


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
                            <form class="multisteps-form__form" action="{{route('publicaciones.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <!--PANEL TIPO DE PROPIEDAD-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Tipo de Propiedad</h3>
                                    <div class="multisteps-form__content">

                                        <div class="form-row mt-4 shadow-none p-3 mb-5 bg-light rounded">


                                            <select class="multisteps-form__select form-control" name="tipo_propiedad">
                                                <option selected="selected">Seleccione el tipo de propiedad</option>
                                                @foreach($tiposPropiedad as $tipo_propiedad)
                                                    <option value="{{$tipo_propiedad->id}}" @if(old('tipo_propiedad') == $tipo_propiedad->id) selected @endif>{{$tipo_propiedad->nombre_tipo_propiedad}}</option>
                                                @endforeach
                                            </select>

                                            @error('tipo_propiedad')
                                            <small style="color:red">{{$message}}</small>
                                            @enderror

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
                                                <input class="form-control" name="calle" type="text" placeholder="Calle" value="{{old('calle')}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-4 shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input class="form-control" name="altura" type="number" placeholder="Altura" value="{{old('altura')}}">
                                            </div>
                                        </div>


                                        <div class="form-row mt-4 shadow-none p-3 mb-5 bg-light rounded">
                                            <select class="multisteps-form__select form-control" name="provincia" >
                                                <option selected="selected" name="provincia">Seleccione la provincia</option>
                                                @foreach($provincias as $provincia)
                                                    <option value="{{$provincia->id}}"
                                                            @if(old('provincia') == $provincia->id)
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
                                                            @if(old('ciudad') == $ciudade->id)
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
                                                <input class="form-control" name="ambientes" type="number" placeholder="Ambientes" value="{{old('ambientes')}}">
                                            </div>
                                        </div>


                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input class="form-control" name="dormitorios" type="number" placeholder="Dormitorios" value="{{old('dormitorios')}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input class="form-control" name="baños" type="number" placeholder="Baños" value="{{old('baños')}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input class="form-control" name="cocheras" type="number" placeholder="Cocheras" value="{{old('cocheras')}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input class="form-control" name="cubierta" type="number" placeholder="Superficie cubierta" value="{{old('cubierta')}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input class="form-control" name="total_terreno" type="number" placeholder="Superficie total del terreno" value="{{old('total_terreno')}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input class="form-control" name="precio" type="number" placeholder="Precio" value="{{old('precio')}}">
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
                                                <input class="form-control" name="titulo" type="text" placeholder="Titulo de la publicacion" value="{{old('titulo')}}">
                                                @error('titulo')
                                                <small style="color:red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <textarea class="form-control" name="descripcion" placeholder="Descripcion de la publicacion">{{old('descripcion')}}</textarea>
                                                @error('descripcion')
                                                <small style="color:red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input name="file" type="file" accept="image/*" value="{{old('imagen')}}">
                                                @error('file')
                                                <small style="color:red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input name="file1" type="file" accept="image/*" value="{{old('imagen')}}">
                                                @error('file')
                                                <small style="color:red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input name="file2" type="file" accept="image/*" value="{{old('imagen')}}">
                                                @error('file')
                                                <small style="color:red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input name="file3" type="file" accept="image/*" value="{{old('imagen')}}">
                                                @error('file')
                                                <small style="color:red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <input name="file4" type="file" accept="image/*" value="{{old('imagen')}}">
                                                @error('file')
                                                <small style="color:red">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        {{--                            <Label>Imegenes de la propiedad</Label>--}}
                                        {{--                            <div action="/file-upload"--}}
                                        {{--                                 name="file"--}}
                                        {{--                                 class="dropzone"--}}
                                        {{--                                 style="background: #f5f5f5; border: 2px dashed rgba(215,83,105,0.54); border-radius: 5px; min-height: 150px; padding: 20px 54px;"--}}
                                        {{--                                 id="my-awesome-dropzone">--}}
                                        {{--                            </div>--}}

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
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

    <script>
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            //agregar token csrf dropzone
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    formData.append("_token", "{{ csrf_token() }}");
                });
            },
            dictDefaultMessage: "Puede arrastrar hasta 5 imagenes aqui para subirlas en su publicacion",
            aceptedFiles: "image/*",
            maxFilesize: 2, // MB
            maxFiles: 5,
        };
    </script>
    </body>


























{{--    <h1 class="text-center">Publicar una propiedad</h1>--}}

{{--    <form action="{{route('publicaciones.store')}}" method="POST">--}}
{{--        @csrf--}}
{{--        <!-- Progress bar -->--}}
{{--        <div class="progressbar">--}}
{{--            <div class="progress" id="progress"></div>--}}

{{--            <div class="progress-step progress-step-active" data-title="Tipo de Propiedad"></div>--}}
{{--            <div class="progress-step" data-title="Ubicacion"></div>--}}
{{--            <div class="progress-step" data-title="Caracteristicas"></div>--}}
{{--            <div class="progress-step" data-title="Imagenes"></div>--}}
{{--            <div class="progress-step" data-title="Caracteristicas especificas"></div>--}}
{{--        </div>--}}

{{--        <div class="form-step form-step-active">--}}
{{--            <div class="select-group">--}}
{{--                <label>Tipo de Propiedad</label>--}}
{{--                <input name="tipo_propiedad" type="text" value="{{old('tipo_propiedad')}}">--}}
{{--                <select name="tipo_propiedad">--}}
{{--                    <option>Seleccione el tipo de propiedad</option>--}}
{{--                    <option value="Departamento">Departamento</option>--}}
{{--                    <option value="Casa">Casa</option>--}}
{{--                </select>--}}
{{--                @error('tipo_propiedad')--}}
{{--                <small style="color:red">{{$message}}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="input-group">--}}
{{--                <label>Subtipo de Propiedad</label>--}}
{{--                <input name="subtipo_propiedad" type="text" value="{{old('subtipo_propiedad')}}">--}}
{{--                <select name="subtipo_propiedad">--}}
{{--                    <option>Seleccione el tipo de propiedad</option>--}}
{{--                    <option value="Chalet">Chalet</option>--}}
{{--                    <option value="Monoambiente">Monoambiente</option>--}}
{{--                </select>--}}
{{--                @error('subtipo_propiedad')--}}
{{--                <small style="color:red">{{$message}}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="">--}}
{{--                <a href="#" class="btn btn-next width-50 ml-auto">Next</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-step">--}}
{{--            <div class="input-group">--}}
{{--                <label>Direccion (Ingrese calle y altura)</label>--}}
{{--                <input name="direccion" type="text" value="{{old('direccion')}}">--}}
{{--                @error('direccion')--}}
{{--                <small style="color:red">{{$message}}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="input-group">--}}
{{--                <label>Provincia</label>--}}
{{--                <input name="provincia" type="text" value="{{old('provincia')}}">--}}
{{--                <select name="provincia">--}}
{{--                    <option>Seleccione la provincia</option>--}}
{{--                    @foreach($publicacion as $publicacions)--}}
{{--                        <option value="{{$publicacions->tipo_propiedad}}">{{$publicacions->tipo_propiedad}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                @error('provincia')--}}
{{--                <small style="color:red">{{$message}}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="input-group">--}}
{{--                <label>Ciudad</label>--}}
{{--                <input name="ciudad" type="text" value="{{old('ciudad')}}">--}}
{{--                <select name="ciudad" >--}}
{{--                    <option>Seleccione la ciudad</option>--}}
{{--                    <option value="Posadas">Posadas</option>--}}
{{--                </select>--}}
{{--                @error('ciudad')--}}
{{--                <small style="color:red">{{$message}}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="input-group">--}}
{{--                <label>Ubicacion de la Propiedad</label>--}}
{{--                <input name="#" type="file" value="{{old('#')}}">--}}
{{--            </div>--}}
{{--            <div class="btns-group">--}}
{{--                <a href="#" class="btn btn-prev">Previous</a>--}}
{{--                <a href="#" class="btn btn-next">Next</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-step">--}}
{{--            <div>--}}
{{--                <label>Caracteristicas Generales</label>--}}
{{--                <div class="input-group">--}}
{{--                    <label>Ambientes</label>--}}
{{--                    <input name="ambientes" type="text" value="{{old('ambientes')}}">--}}
{{--                    @error('ambientes')--}}
{{--                    <small style="color:red">{{$message}}</small>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="input-group">--}}
{{--                    <label>Dormitorios</label>--}}
{{--                    <input name="dormitorios" type="text" value="{{old('dormitorios')}}">--}}
{{--                    @error('dormitorios')--}}
{{--                    <small style="color:red">{{$message}}</small>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="input-group">--}}
{{--                    <label>Baños</label>--}}
{{--                    <input name="baños" type="text" value="{{old('baños')}}">--}}
{{--                    @error('baños')--}}
{{--                    <small style="color:red">{{$message}}</small>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="input-group">--}}
{{--                    <label>Cocheras</label>--}}
{{--                    <input name="cocheras" type="text" value="{{old('cocheras')}}">--}}
{{--                    @error('cocheras')--}}
{{--                    <small style="color:red">{{$message}}</small>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label>Superficie de la propiedad</label><br>--}}
{{--                <div class="input-group">--}}
{{--                    <label>Cubierta(Lo que ocupa la casa)</label>--}}
{{--                    <input name="cubierta" type="text" value="{{old('cubierta')}}">--}}
{{--                    @error('cubierta')--}}
{{--                    <small style="color:red">{{$message}}</small>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="input-group">--}}
{{--                    <label>Total(El valor del terreno completo)</label>--}}
{{--                    <input name="total_terreno" type="text" value="{{old('total_terreno')}}">--}}
{{--                    @error('total_terreno')--}}
{{--                    <small style="color:red">{{$message}}</small>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label>Precio</label><br>--}}
{{--                <div class="input-group">--}}
{{--                    <label>Precio Total</label>--}}
{{--                    <input name="precio" type="text" value="{{old('precio')}}">--}}
{{--                    @error('precio')--}}
{{--                    <small style="color:red">{{$message}}</small>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <label>Descripcion</label>--}}
{{--            <div class="input-group">--}}
{{--                <label>Titulo de la Publicacion</label>--}}
{{--                <input name="titulo" type="text" value="{{old('titulo')}}">--}}
{{--                @error('titulo')--}}
{{--                <small style="color:red">{{$message}}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="text-group">--}}
{{--                <label>Descripcion</label>--}}
{{--                <textarea name="descripcion" >{{old('descripcion')}}</textarea>--}}
{{--                @error('descripcion')--}}
{{--                <small style="color:red">{{$message}}</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="btns-group">--}}
{{--                <a href="#" class="btn btn-prev">Previous</a>--}}
{{--                <a href="#" class="btn btn-next">Next</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-step">--}}
{{--            <div class="input-group">--}}
{{--                <label>Foto de la propiedad Puede cargar hasta 3 imagenes en formatro.....</label>--}}
{{--                <input name="ciudad" type="file" value="{{old('ciudad')}}">--}}
{{--            </div>--}}
{{--            <div class="btns-group">--}}
{{--                <a href="#" class="btn btn-prev">Previous</a>--}}
{{--                <a href="#" class="btn btn-next">Next</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-step">--}}
{{--            <div id="container">--}}
{{--                <div class="tres">--}}
{{--                    <h5>Caracteristicas especificas</h5>--}}
{{--                </div>--}}
{{--                <div class="tres">--}}
{{--                    <li><label>Acceso para personas con discapacidad<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Permiten mascotas<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div id="container">--}}
{{--                <div class="tres">--}}
{{--                    <h5>Caracteristicas</h5>--}}
{{--                </div>--}}
{{--                <div class="tres">--}}
{{--                    <li><label>Aire acondicionado<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Amoblado<input type="checkbox" value="Amoblado" name="Amoblado"></label></li>--}}
{{--                    <li><label>Calefaccion<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Cocina equipada<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                </div>--}}
{{--                <div class="tres">--}}
{{--                   <li> <label>Lavarropas<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Termotanque<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Vigilancia<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div id="container">--}}
{{--                <div class="tres">--}}
{{--                    <h5>Servicios</h5>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <li><label>Ascensor<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Internet/Wifi<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                   <li> <label>Lavanderia<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Servicio de limpieza<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div id="container">--}}
{{--                <div class="tres">--}}
{{--                    <h5>Ambientes</h5>--}}
{{--                </div>--}}
{{--                <div class="tres">--}}
{{--                    <li><label>Balcon<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Cocina<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Comedor<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Hall<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Jardin<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Lavadero<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                </div>--}}
{{--                <div class="tres">--}}
{{--                    <li><label>Living<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Living comedor<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Patio<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                    <li><label>Sotano<input type="checkbox" value="val" name="name"></label></li>--}}
{{--                    <li><label>Terraza<input type="checkbox" value="val" name="name2"></label></li>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="btns-group">--}}
{{--                <a href="#" class="btn btn-prev">Previous</a>--}}
{{--                <button type="submit">Publicar</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

{{--    <a href="{{route('publicaciones.index')}}">Regresar</a>--}}

</x-app-layout>
