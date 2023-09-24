<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>JhonChat - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
</head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">JhonChat</h1>

                <nav class="flex justify-around bg-white w-60">
                    <a class="font-bold uppercase text-grey-600 text-sm" href="/">Home</a>
                    <a class="font-bold uppercase text-grey-600 text-sm" href="">Login</a>
                    <a class="font-bold uppercase text-grey-600 text-sm" href="{{ route('register') }}">Crear Cuenta</a>
                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
            JhonChat - todo los derechos reservados {{ now()->year }}
        </footer>
    </body>
</html>