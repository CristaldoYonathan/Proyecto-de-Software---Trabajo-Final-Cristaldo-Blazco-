<x-app-layout>

<h1>{{$publicacion->titulo_publicacion}}</h1>
    <h3>{{$publicacion->precio_publicacion}}</h3>

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
