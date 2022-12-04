<x-app-layout>

    <x-slot name="title">Publicar una propiedad</x-slot>

    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/js/multistep.js', 'resources/css/nucleo-svg.css','resources/js/material-kit.js'])


    <body>


    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://www.byverdleds.com/blog/wp-content/uploads/2019/08/LedSalon.jpg');">
        <span class="mask bg-gradient-dark opacity-5"></span>

        <div class="container my-auto mt-9">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="text-white">Registre su propiedad</h1>
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
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Encabezado de la publicación</button>
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

                                        <div class="input-group input-group-outline my-3 mt-5 bg-light rounded">
                                            <label class="form-label">Calle</label>
                                            <input class="form-control" name="calle" type="text" value="{{old('calle')}}">
                                        </div>

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label">Altura</label>
                                            <input class="form-control" name="altura" type="number" value="{{old('altura')}}">
                                        </div>

                                        <div class="form-row shadow-none p-2 mb-5 bg-light rounded mt-5">
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

                                        <div class="form-row mt-5 shadow-none p-2 mb-5 bg-light rounded">
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

                                    <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                        <div class="col">

                                            <div id="map" style="width: 100%; height:450px"></div>

                                            <input type="hidden" id="latitud" name="latitud" />
                                            <input type="hidden" id="longitud" name="longitud" />
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

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label">Ambientes</label>
                                            <input class="form-control" name="ambientes" type="number"  value="{{old('ambientes')}}">
                                        </div>

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label">Dormitorios</label>
                                            <input class="form-control" name="dormitorios" type="number" value="{{old('dormitorios')}}">
                                        </div>

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label">Baños</label>
                                            <input class="form-control" name="baños" type="number"  value="{{old('baños')}}">
                                        </div>

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label">Cocheras</label>
                                            <input class="form-control" name="cocheras" type="number"  value="{{old('cocheras')}}">
                                        </div>

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label">Superficie cubierta</label>
                                            <input class="form-control" name="cubierta" type="number"  value="{{old('cubierta')}}">
                                        </div>

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label">Superficie total del terreno</label>
                                            <input class="form-control" name="total_terreno" type="number"  value="{{old('total_terreno')}}">
                                        </div>

                                        <div class="input-group input-group-outline mt-5 bg-light rounded">
                                            <label class="form-label ">Precio</label>
                                            <input class="form-control " name="precio" type="number"  value="{{old('precio')}}">
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
                                    <h3 class="multisteps-form__title">Título y descripción de la propiedad</h3>
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

{{--                                     Esta imagen va a ser la primera que aparezca --}}
                                        <h3 class="mt-4">Imagenes</h3>
                                        <div class="form-row mt-4  shadow-none p-3 mb-5 bg-light rounded">
                                            <div class="col">
                                                <h6>Esta sera la imagen de portada de la publicacion</h6>
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





{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFRitCKrHHCHbh9KlJed9j697DDQEW-Go&callback=iniciarMap"></script>--}}

    <script>

        function iniciarMap(){

            // Lista de tareas
            // - Visualizar la posicion del usuario
            // - Mostrar un marcador en el mapa
            // - Mostrar un cuadro de dialogo con la informacion del marcador
            // - Permitir que el usuario pueda agregar solamente un marcadores
            // - Indicar ruta desde el punto actual hasta el marcador

            // establecer un marker con el imagen map-marker-2-512.png
            // var icono = {
            //     url: '../../assets/img/map-marker-2-512.png',
            //     scaledSize: new google.maps.Size(30, 30),
            //     origin: new google.maps.Point(0,0),
            //     anchor: new google.maps.Point(16, 31)
            //
            // };

            // Obtenemos la posicion del usuario
            navigator.geolocation.getCurrentPosition(function(posicion){
                // Creamos un objeto con las coordenadas del usuario
                var coords = new google.maps.LatLng(posicion.coords.latitude, posicion.coords.longitude);
                // Creamos un objeto mapa y especificamos el elemento DOM donde se va a mostrar
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: coords
                });
                // Creamos el marcador en el mapa con sus propiedades
                // para nuestro obetivo tenemos que poner el atributo draggable en true
                // position pondremos las mismas coordenas que obtuvimos en la geolocalizacion
                var marker = new google.maps.Marker({
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: coords
                    // icon: icono
                });

                // Creamos un evento que detecta el click sobre el marcador
                // y muestra la informacion del mismo en un cuadro de dialogo de Google Maps
                marker.addListener('click', function(event){


                    // Creamos la ventana de informacion
                    infoWindow = new google.maps.InfoWindow({
                        content: '<p>Latitud: ' + marker.getPosition().lat() + '</p><p>Longitud: ' + marker.getPosition().lng() + '</p>'
                    });

                    // Abrimos la ventana de informacion
                    infoWindow.open(map, marker);

                    console.log("HOLA MUNDO");
                });

                google.maps.event.addListener(marker, 'dragend', function(event){
                    // enviamos la posicion del marcador al input de latitud y longitud
                    document.getElementById('latitud').value = this.getPosition().lat();
                    document.getElementById('longitud').value = this.getPosition().lng();

                    // imprimir longitud y latitud
                    console.log("Latitud: " + this.getPosition().lat());
                    console.log("Longitud: " + this.getPosition().lng());
                });

            });



        }


    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFRitCKrHHCHbh9KlJed9j697DDQEW-Go&callback=iniciarMap"></script>



    </body>

</x-app-layout>
