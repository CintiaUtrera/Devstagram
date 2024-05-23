<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>DevStagram - @yield('titulo')</title>

        
    </head>

    <body>
        <h1 class="text-4xl">@yield('titulo')</h1>
        <hr>
        @yield('contenido')
    </body>

</html>