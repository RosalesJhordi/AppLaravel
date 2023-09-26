
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@vite('resources/js/app.js')
@extends('Layouts.app')

@section('titulo')
    crea una nueva publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="/iamges" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-co justify-center items-center">

            </form>
        </div>
        <div class="md:w-1/2 p-6 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div>
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        titulo
                    </label>
                    <input id="titulo" name="titulo" type="text" placeholder="Tu Titulo" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value={{ old('name') }}>
                    {{-- si el campo esta vacio --}}
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descipcion
                    </label>
                    <textarea id="descripcion" name="descripcion" placeholder="Tu Descipcion" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">{{ old('titulo') }}</textarea>
                    {{-- si el campo esta vacio --}}
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear Publicacion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full border p-3  text-white rounded-lg mt-10">
            </form>
        </div>
    </div>
@endsection