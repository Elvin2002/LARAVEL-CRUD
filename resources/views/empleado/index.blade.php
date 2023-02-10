<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Inicio</title>
</head>
<body>
<div class="nav">
        <ul>
            <li> <a href="{{ url('/empleado/create') }}"><img class="home" src="{{ asset('img/house-solid.svg') }}" alt="" width="30"> INICIO </a> </li>
            <li> <a href="{{ url('/empleado') }}"><img src="{{ asset('img/address-card-solid.svg') }}" alt="" width="30">VER DATOS</a> </li>

        </ul>
    </div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Appelino Materno</th>
                <th>Correo</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado )
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApellidoPaterno}}</td>
                <td>{{$empleado->ApellidoMaterno}}</td>
                <td>{{$empleado->Correo}}</td>
                <td><img src="{{ asset('storage').'/' .$empleado->Foto  }}" alt="" width="100"></td>

                <div class="butom" >

                    <td><a  class="editar" href="{{ url('/empleado/' . $empleado->id. '/edit') }}"> editar</a>  
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="eliminar" onclick="return confirm('Quiere Borrar')">
                        </form>
                    </td>
                </div>
            </tr>
            @endforeach
        </tbody>
        
    </div>
</table>
<a class="canselar" href="{{ asset('empleado/create')}}">Nuevo</a>




</body>
</html>
