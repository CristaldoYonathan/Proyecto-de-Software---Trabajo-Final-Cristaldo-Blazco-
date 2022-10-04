<x-app-layout >
    <x-slot name="title">Inicio</x-slot>

    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css', 'resources/css/nucleo-svg.css',  'resources/css/nucleo-icons.css'])
        <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">




    <body class="about-us bg-gray-200">
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('https://cdn.loveco-shop.de/magazin/wp-content/uploads/2019/04/alexandra-gorn-485551-unsplash-1060x707.jpg')">
            <span class="mask bg-gradient-dark opacity-5"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class=" text-white" >Easy-Rent</h1>
                        <p class="lead mb-4 text-white opacity-8">Tu proximo lugar esta aca</p>
                        <a class="btn bg-gradient-primary text-white border-radius-lg" href="{{route('alquileres')}}">Quiero buscar un alquiler</a>
                        <span>ㅤㅤ</span>
                        <a class="btn bg-gradient-primary text-white border-radius-lg" href="{{route('publicaciones.index')}}">Quiero publicar un alquiler</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7">
            <div class="container">
                <h3 class="text-center mb-5">Es simple</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="card card-body border-0 shadow-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-shape-primary rounded me-3">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="mb-0">Busca</h5>
                                </div>
                            </div>
                            <p class="mt-3 mb-0">Busca el alquiler que mas te guste, con la mejor ubicacion y el mejor precio.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="card card-body border-0 shadow-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-shape-success rounded me-3">
                                    <i class="fa fa-handshake"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="mb-0">Contacta</h5>
                                </div>
                            </div>
                            <p class="mt-3 mb-0">Contacta al dueño del alquiler y arregla los detalles de la operacion.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="card card-body border-0 shadow-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-shape-warning rounded me-3">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="mb-0">Disfruta</h5>
                                </div>
                            </div>
                            <p class="mt-3 mb-0">Disfruta de tu nuevo hogar y de la mejor experiencia de alquiler.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->
        <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
        <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
            <div class="col">
                <div class="card h-100" style="--bs-btn-hover-bg:100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/1.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Alquiler a la vuelta de la facu</h5>
                        <h2 class="card-text"> $ 10.000</h2>
                        <p class="card-text">
                            Departamento con todos los servicios incluidos, internet agua y luz, con una vista increible a la ciudad.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/2.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Un alquiler 1</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/3.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">hover</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/4.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/5.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/6.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/7.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" style="object-fit:cover; height:100%; width: 100%;" src="img/rents/8.webp" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            This is a longer card with supporting text below as a natural lead-in to additional content.
                            This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>


    </body>

    </html>

</x-app-layout>
