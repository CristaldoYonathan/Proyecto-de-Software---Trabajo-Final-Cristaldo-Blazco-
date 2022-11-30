<x-guest-layout >
    <x-slot name="title">Iniciar Sesión</x-slot>



@vite(['resources/css/material-kit.css', 'resources/css/nucleo-icons.css','resources/css/multistep.css', 'resources/js/multistep.js', 'resources/css/nucleo-svg.css','resources/js/material-kit.js' ])

{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs-rtl.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs-rtl.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs-rtl.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs-rtl.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs-rtl.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/introjs-rtl.min.css">--}}
{{--    incorporar CDN intro.js--}}

{{--    <link rel="stylesheet">--}}

{{--    --}}{{--    incorporar CDN intro.js javascript--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js"></script>--}}
    {{--    incorporar CDN intro.js javascript--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/6.0.0/intro.min.js"></script>--}}


<div class="page-header align-items-start min-vh-100" style="background-image: url('https://www.byverdleds.com/blog/wp-content/uploads/2019/08/LedSalon.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <a href="{{ route('dashboard') }}"> <h3  class="text-white font-weight-bolder text-center mt-2 mb-0" >Easy-Rent</h3></a>

                            <h6 id="introduction" class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar sesión</h6>
                            <div class="row mt-4">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form role="form" class="text-start"   method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group input-group-outline my-3">
{{--                                <label class="form">Email</label>--}}
{{--                                <input type="email" class="form-control">--}}
                                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Correo electrónico" />
                            </div>
                            <div class="input-group input-group-outline mb-3">
{{--                                <label class="form">Contraseña</label>--}}
{{--                                <input type="password" class="form-control">--}}

                                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña" />
                            </div>

                            <div class="form-check form-switch d-flex align-items-center mb-3">
{{--                                <input class="form-check-input bg-gradient-primary" type="checkbox" id="rememberMe" checked>--}}
                                <x-jet-checkbox id="remember_me" class="form-check-input bg-gradient-primary" name="remember" />
                                <label class="form-check-label mb-0 ms-3" for="rememberMe">Recuerdame</label>
                            </div>


                            <div class="text-center">

                                @if (Route::has('password.request'))
                                    <a class="text-body text-decoration-none" href="{{ route('password.request') }}"> ¿Olvidaste tu contraseña </a>
                                @endif

                            </div>
                            <div class="text-center">
                                <x-jet-button class="btn bg-gradient-primary w-100 my-4 mb-2"> Iniciar sesión </x-jet-button>
                            </div>
                            <div class="align-content-center text-center">
                                <a class="mt-4 text-sm text-center" href="{{ route('register') }}">
                                    Aun no tiene una cuenta?
                                </a>
                            </div>
                            <div>
                                <a id="ayuda" href="#">Ayuda</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{{--    </x-jet-authentication-card>--}}

    <script>
        const intro = introJs();

        intro.setOptions({
            steps: [
                {
                    element: '#introduction',
                    intro: "Bienvenido a Easy-Rent, le invitamos a que inicie sesion para poder acceder a nuestro sistema de alquileres."
                },
                {
                    element: '#email',
                    intro: "Ingrese su correo electronico para poder iniciar sesion."
                },
                {
                    element: '#password',
                    intro: "Ingrese su contraseña para poder iniciar sesion."
                },
                {
                    element: '#remember_me',
                    intro: "Si desea que su sesion sea permanente seleccione esta opcion."
                },
                {
                    element: '.btn',
                    intro: "Presione este boton para iniciar sesion."
                },
                {
                    element: '.text-sm',
                    intro: "Si aun no tiene una cuenta presione aqui para registrarse."
                },
                {
                    element: '.text-body',
                    intro: "Si olvido su contraseña presione aqui para recuperarla."
                },
            ]
        });

        document.querySelector('#ayuda').addEventListener('click',function(){
            intro.start();
        });

    </script>



{{--    <x-guest-layout >--}}

{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />        --}}{{-- asdasdas--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />     --}}{{--asdasdasdas--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-jet-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>    --}}{{--asdasdasd--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--            boton de registrarse--}}
{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">--}}
{{--                    {{ __('Registrarse') }}--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
</x-guest-layout>
