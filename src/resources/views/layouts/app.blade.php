<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Mi Aplicación')</title>
</head>
<body>
    <header>
        <h1>Mi Tienda</h1>
        <!-- Aquí podría ir una barra de navegación -->
    </header>
    <main>
         @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mi Tienda</p>
    </footer>
</body>
</html>