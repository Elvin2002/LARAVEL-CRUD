<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Llenar Datos</title>
</head>
<body>
    <div class="formulario">


        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)? $empleado->Nombre:'' }}"> 

        <label for="ApellidoPaterno">ApellidoPaterno</label>
        <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)? $empleado->ApellidoPaterno:'' }}"> 

        <label for="ApellidoMaterno">ApellidoMaterno</label>
        <input type="text" name="ApellidoMaterno" id="ApellinoMaterno" value="{{ isset($empleado->ApellidoMaterno)? $empleado->ApellidoMaterno:'' }}"> 

        <label for="Correo">Correo</label>
        <input type="text" name="Correo" id="Correo"  value=" {{isset($empleado->Correo)? $empleado->Correo:'' }}">  <br>
        <br>

        @if(isset($empleado->Foto))
        <img src="{{asset('storage').'/' .$empleado->Foto  }}" alt="" width="100">
        @endif

        <input type="file" name="Foto" id="Foto"  value=""><br>
             <br>
             <br>
        <div>
            <input type="submit" value="Guardar">
            <a href="{{ url('empleado')}}" onclick="return confirm('Quiere Canselar')" class="cancelar">CANCELAR</a>
        </div>
        
    </div>
</body>
</html>
