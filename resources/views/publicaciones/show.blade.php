<x-app-layout>


    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/js/multistep.js', 'resources/css/nucleo-svg.css'])
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">



    <body class="container bg-gray-200">
    <div class="container-fluid ">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5 mt-10">
                <div id="carousel-1" class="carousel slide shadow-lg" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active ratio ratio-1x1 "><img class="rounded" style="object-fit:cover; height:100%; width: 100%;" src="{{asset('img/rents/1.webp')}}" alt="Slide Image" /></div>
                        <div class="carousel-item ratio ratio-1x1 "><img class="rounded" style="object-fit:cover; height:100%; width: 100%;" src="{{asset('img/rents/2.webp')}}" alt="Slide Image" /></div>
                        <div class="carousel-item ratio ratio-1x1 "><img class="rounded" style="object-fit:cover; height:100%; width: 100%;" src="{{asset('img/rents/3.webp')}}" alt="Slide Image" /></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                    </ol>
                </div>
            </div>

            <div class="col-lg-7 pb-5 mt-10">
                <h3 class="font-weight-semi-bold">{{$publicacion->titulo_publicacion}}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">$ {{$publicacion->precio_publicacion}}</h3>

{{--                <%--                agregar a favoritos y contacto--%>--}}
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2 ms-2 me-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Agregar a favoritos</a>
                    </div>
                    <div class="text-primary mr-2 ms-2 me-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Contactar</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary p-2 mr-3 rounded-circle position-relative" style="height: 32px; width: 32px;"><i class="fas fa-bed text-white w-50 h-50 position-absolute"></i></div>
                            <div>
                                <h6 class="font-weight-semi-bold ms-2 mb-0">{{$publicacion->dormitorios_publicacion}} Habitaciones</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary p-2 mr-3 rounded-circle position-relative" style="height: 32px; width: 32px;"><i class="fas fa-bath text-white w-50 h-50 position-absolute"></i></div>
                            <div>
                                <h6 class="font-weight-semi-bold ms-2 mb-0">{{$publicacion->banios_publicacion}} Baños</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary p-2 mr-3 rounded-circle position-relative" style="height: 32px; width: 32px;"><i class="fas fa-ruler-combined text-white w-50 h-50 position-absolute"></i></div>
                            <div>
                                <h6 class="font-weight-semi-bold ms-2 mb-0">{{$publicacion->superficie_total_terreno}} m2</h6>
                                <small class="text-muted ms-2">Superficie total</small>
                            </div>
                        </div>
                    </div>

                    <c:if  test="${publicacion.cocheraPublicacion > 0}">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary p-2 mr-3 rounded-circle position-relative" style="height: 32px; width: 32px;"><i class="fas fa-car text-white w-50 h-50 position-absolute"></i></div>
                                <div>
                                    <h6 class="font-weight-semi-bold ms-2 mb-0">{{$publicacion->cochera_publicacion}} Cochera</h6>
                                </div>
                            </div>
                        </div>
                    </c:if>
                </div>
            </div>
            <div class="row px-xl-5">
                <div class="col">
{{--                    <%--            map--%>--}}
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="font-weight-semi-bold">Ubicación</h5>
                                    <p class="text-muted">{{$publicacion->calle_publicacion}} - {{$publicacion->altura_publicacion}} - {{$publicacion->id_ciudad}}</p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center justify-content-lg-end">
                                        <div class="bg-primary p-2 mr-3 rounded-circle position-relative" style="height: 32px; width: 32px;"><i class="fas fa-map-marker-alt text-white w-50 h-50 position-absolute"></i></div>
                                        <div>
                                            <h6 class="font-weight-semi-bold ms-2 mb-0">Ver en el mapa</h6>
                                            <small class="text-muted ms-2">{{$publicacion->calle_publicacion}} - {{$publicacion->altura_publicacion}} - {{$publicacion->id_ciudad}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="font-weight-semi-bold">Descripción</h5>
                            <p class="text-muted">{{$publicacion->descripcion_publicacion}}</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    </body>

{{--    <!DOCTYPE html>--}}
{{--    <html lang="en" class="mb-xxl-5">--}}

{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--        <title>PropiedadPublicada1</title>--}}
{{--        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">--}}
{{--        <link rel="stylesheet" href="assets/css/styles.min.css">--}}
{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">--}}
{{--    </head>--}}

{{--    <body class="mb-xxl-0 pb-xxl-0 ms-xxl-0 pt-xxl-0 mt-xxl-0 ps-xxl-0 pe-xxl-0">--}}
{{--    <!-- Start: Navbar Centered Links -->--}}
{{--    <nav class="navbar navbar-light navbar-expand-md py-3">--}}
{{--        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span--}}
{{--                    class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg--}}
{{--                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"--}}
{{--                        class="bi bi-bezier">--}}
{{--            <path fill-rule="evenodd"--}}
{{--                  d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">--}}
{{--            </path>--}}
{{--            <path--}}
{{--                d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">--}}
{{--            </path>--}}
{{--          </svg></span><span>Easy-Rent</span></a><button data-bs-toggle="collapse" class="navbar-toggler"--}}
{{--                                                         data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span--}}
{{--                    class="navbar-toggler-icon"></span></button>--}}
{{--            <div class="collapse navbar-collapse" id="navcol-3">--}}
{{--                <ul class="navbar-nav mx-auto">--}}
{{--                    <li class="nav-item"><a class="nav-link active me-xxl-2 ms-xxl-2" href="#">Inicio</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link ms-xxl-2 me-xxl-2" href="#">Publicar</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link ms-xxl-2 me-xxl-2" href="#">Alquilar</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link me-xxl-2 ms-xxl-2" href="#">About</a></li>--}}
{{--                </ul><button class="btn btn-primary" type="button">Iniciar Sesion</button><button class="btn btn-primary ms-2"--}}
{{--                                                                                                  type="button">Registrarse</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav><!-- End: Navbar Centered Links -->--}}
{{--    <section class="pt-xxl-0 pb-xxl-0 mb-xxl-0 mt-xxl-4">--}}
{{--        <!-- Start: cuerpo_publicacion_particular -->--}}
{{--        <div class="mb-xxl-5 pb-xxl-5">--}}
{{--            <h1 class="pb-xxl-3 mb-xxl-0 mt-xxl-0 pt-xxl-0" style="text-align: center;">[Titulo de propiedad]</h1>--}}
{{--            <!-- Start: imagen_publicacion_particular -->--}}
{{--            <div class="pt-xxl-3 pb-xxl-5 mb-xxl-3 mb-0 pb-0">--}}
{{--                <div class="container pe-5 ps-4"><img width="1200" height="500" style="width: 1200px;height: 500px;"--}}
{{--                                                      class="pe-0 me-4 ps-0 ms-4" src="assets/img/maxresdefault.jpg"></div>--}}
{{--            </div><!-- End: imagen_publicacion_particular -->--}}
{{--            <!-- Start: informacion_publicacion_particular -->--}}
{{--            <div>--}}
{{--                <h3 class="text-center pt-0">Información del alquiler</h3>--}}
{{--                <p>Información especifica(Ver que mostrar)</p>--}}
{{--            </div><!-- End: informacion_publicacion_particular -->--}}
{{--            <!-- Start: ubicacion_publicacion_particular -->--}}
{{--            <div>--}}
{{--                <h4 class="text-center pt-0">Ubicacion&nbsp;</h4>--}}
{{--                <p>Esta propiedad se ecnuentra ubicada en (Calle altura y ciudad)</p><iframe allowfullscreen="" frameborder="0"--}}
{{--                                                                                             src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="400"></iframe>--}}
{{--            </div><!-- End: ubicacion_publicacion_particular -->--}}
{{--        </div><!-- End: cuerpo_publicacion_particular -->--}}
{{--    </section>--}}
{{--    <script src="assets/bootstrap/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>--}}
{{--    <script src="assets/js/script.min.js"></script>--}}
{{--    </body>--}}

{{--    </html>--}}

<a href="{{route('publicaciones.index')}}">Regresar</a>

</x-app-layout>
