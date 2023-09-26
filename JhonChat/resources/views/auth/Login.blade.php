@extends('Layouts.app')

@section('titulo')
    Inicia sesion en JhonChat
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center" >
        <div class="md:w-6/12">
            <img src="{{ asset('img/Logo_Register.jpg') }}" alt="Logo sesion">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login')}}" novalidate>
                @csrf
                @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif
                <div>
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Tu Email" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value={{old('email')}}>
                    {{-- si el campo esta vacio --}}
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb:5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                    {{-- si el campo esta vacio --}}
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember"><label for="remember" class="text-gray-500 text-sm">Mantener sesion abierta</label>
                </div>
                <input type="submit" value="Iniciar sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full border p-3  text-white rounded-lg mt-10">
            </form>
        </div>
    </div>
@endsection