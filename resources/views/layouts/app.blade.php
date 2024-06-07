<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>DevStagram - @yield('titulo')</title>
    </head>

    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">DevStagram</h1>

                @auth
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold text-gray-600" href="/login">
                            Hola: <span class="font-normal">{{ auth()->user()->username()}}</span>
                        </a>
                        <form method="POST" action="{{ route('logout')}}">
                            @csrf // directiva
                            <button type="submit" class="font-bold uppercase text-gray-600" href="{{ route('register') }}">
                                Cerrar Sesión    
                            </button>
                        </form>
                    </nav>
                @endauth

                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600" href="/login">
                            Login</a>
                        <a class="font-bold uppercase text-gray-600" href="{{ route('register') }}">
                            Crear Cuenta</a>
                    </nav>
                @endguest

                
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo') <!-- yield = directiva -->
            </h2>
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            DevStagram - Todos los derechos reservados {{ now()->year }}
        </footer>
    </body>

</html>