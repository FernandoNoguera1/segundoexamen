<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ELIMINAR</title>
</head>
<body>
    <form action="{{route('provedor.destroy',$id)}}" method="POST">
        @csrf
        @method('DELETE')
        <p>¿Deseas eliminar?</p>
        <div>
            <button type="submit">Confirmar</button>
            <a href="{{route('provedor.index')}}">Cancelar</a>
        </div>
    </form>
</body>
</html>