@extends('web.layout')

@section('title')
    Inicio
@endsection

@section('content')
    {{-- Espacio restante de la pantalla --}}
    <div class="flex-1 flex items-center">
        {{-- Buscador centrado --}}
        <div class="mx-auto px-5 md:px-0">
            <x-home-search-bar />
        </div>
    </div>
@endsection
