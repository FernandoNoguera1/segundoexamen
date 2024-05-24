<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITAR PROVEDOR</title>
</head>
<body>
    <form action="{{route('provedor.update',$provedor->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre
            <input type="text" name="nombre" value="{{$provedor->nombre}}">
        </label>
        <br>
        <label>
            Código
            <input type="number" name="codigo" value="{{$provedor->codigo}}">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>