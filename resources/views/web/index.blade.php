@extends('web.layout')

@section('title')
    Inicio
@endsection

@section('content')
    <div class="w-full h-screen flex flex-col">
        {{-- Barra de navegacion --}}
        <x-navbar />

        {{-- Espacio restante de la pantalla --}}
        <div class="flex-1 flex items-center">
            {{-- Buscador centrado --}}
            <div class="mx-auto">
                <x-home-search-bar/>
            </div>
        </div>
    </div>
@endsection
