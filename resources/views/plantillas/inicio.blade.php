<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <title> @yield('tituloPagina') </title>
</head>

<body>
    @yield('Contenido')
</body>
<script src="{{ asset('/js/menu.js') }}"></script>

</html>
