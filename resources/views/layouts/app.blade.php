<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>DevStagram - @yield('titulo')</title>
    </head>

    <body>
        <header class="p-5 border-b bg-white shadow">
            <h1 class="text-3xl font-black"></h1>
        </header>
    </body>

</html>