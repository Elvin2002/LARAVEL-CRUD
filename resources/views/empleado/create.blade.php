<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <ul>
            <li> <a href=""><img class="home" src="{{ asset('img/house-solid.svg') }}" alt="" width="30"> INICIO </a> </li>
            <li> <a href="{{ url('/empleado') }}"><img src="{{ asset('img/address-card-solid.svg') }}" alt="" width="30">VER DATOS</a> </li>

        </ul>
    </div>
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form')
    
</form>
</body>
</html>
