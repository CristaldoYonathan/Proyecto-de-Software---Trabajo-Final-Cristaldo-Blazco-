<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titulo}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-layouts.navigation></x-layouts.navigation>

@if(session('estado_publicacion'))
    <div>
        {{session('estado_publicacion')}}
    </div>
@endif

{{$slot}}

</body>
</html>
