{{--importar la navbar de jetstream--}}
<x-app-layout>


    @vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/js/multistep.js', 'resources/css/nucleo-svg.css', ])

    <x-slot name="title">Alquileres</x-slot>
    <body class="about-us bg-gray-200">



    <div class="card card-body shadow-xl mx-md-4 ">
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-5 mt-7">
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


</x-app-layout>
