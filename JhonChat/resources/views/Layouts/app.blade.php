<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>JhonChat - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script><script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
        @vite('resources/css/app.css')
</head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">JhonChat</h1>

                {{-- verificar usuario autenticado --}}
                @if (auth()->user())
                    <nav class="flex justify-between bg-white w-80 items-center">
                        <a class="flex items-center gap-2 bg-white border p-1 text-gray-600 rounded text-sm uppercase font-bold cursor-pointer" href="{{ route('posts.create')}}">
                            <i class="text-2xl fa-regular fa-image"></i>
                            Crear
                        </a>
                        <a class="font-boldtext-grey-900 text-sm "  href="{{route('post.index', auth()->user()->username)}}">Hola: {{ auth()->user()->username}}</a>
                        <form method="POST" action="{{ route('logout')}}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-grey-600 text-sm">Cerrar sesion</button>
                        </form>
                    </nav>
                @else
                    <nav class="flex justify-around bg-white w-60">
                        <a class="font-bold uppercase text-grey-600 text-sm" href="/">Home</a>
                        <a class="font-bold uppercase text-grey-600 text-sm" href="{{ route('login')}}">Login</a>
                        <a class="font-bold uppercase text-grey-600 text-sm" href="{{ route('register')}}">Crear Cuenta</a>
                    </nav>
                @endif
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