<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JhonChat - @yield('titulo')</title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
        {{-- @vite('') --}}
        @vite(['resources/js/app.js'])
</head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">JhonChat</h1>

                {{-- verificar usuario autenticado --}}
                @if (auth()->user())
                    <nav class="flex justify-between bg-white w-80 items-center">
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


        <div class="md:w-1/2 px-10">
            <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-co justify-center items-center">
                @csrf
            </form>
        </div>


        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
            JhonChat - todo los derechos reservados {{ now()->year }}
        </footer>
    </body>
</html>