<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

{{--    <link href="{{public_path('css/app.css')}}" rel="stylesheet" type="text/css">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">Lista de Usuarios registrados</h1>
&nbsp;
<table class="table table-striped text-center">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

