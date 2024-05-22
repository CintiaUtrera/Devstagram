<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('titulo')</title>

        
    </head>

    <body>
    <nav>
        <a href="/">Principal</a>
        <a href="/nosotros">Nosotros</a>
        <a href="/"></a>
    </nav>

    <h1>@yield('titulo')</h1> <!-- directiva yield = resgistra esto como un contenedor -->

    <hr>

    @yield('contenido')
    </body>

</html>