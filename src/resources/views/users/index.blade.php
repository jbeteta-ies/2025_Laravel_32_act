<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>

<body>
    <h1>Listado de Usuarios</h1>

    @if ($usuarios->isEmpty())
        <p>No hay usuarios disponibles.</p>
    @else
        @foreach ($usuarios as $usuario)
            @switch(true)
                @case($usuario->age < 18)
                    <p>{{ $usuario->name }} es menor de edad.</p>
                @break

                @case($usuario->age >= 18 && $usuario->age <= 65)
                    <p>{{ $usuario->name }} es adulto.</p>
                @break

                @default
                    <p>{{ $usuario->name }} es jubilado.</p>
            @endswitch
        @endforeach
    @endif
</body>

</html>
