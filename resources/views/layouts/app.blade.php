<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>

    <body>
    <nav>
        <a href="/nosotros">nosotros</a>
        <a href="/"></a>
        <a href="/"></a>
    </nav>

    <h1>@yield('titulo')</h1> <!-- directiva yield = resgistra esto como un contenedor -->

    <hr>

    @yield('contenido')
    </body>

</html>