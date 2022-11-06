{{--importar la navbar de jetstream--}}

{{--si estás logueado, te muestra x-app-layout--}}

<x-app-layout>

    <x-slot name="title">Alquileres</x-slot>

    @livewire('publicaciones.show-alquileres')

</x-app-layout>

{{--<x-guest-layout>--}}


{{--    <x-slot name="title">Alquileres</x-slot>--}}

{{--    @livewire('publicaciones.show-alquileres')--}}

{{--</x-guest-layout>--}}
