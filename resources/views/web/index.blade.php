@extends('web.layout')

@section('title')
    Inicio
@endsection

@section('content')
    {{-- Espacio restante de la pantalla --}}
    <div class="flex-1 flex items-center">
        {{-- Buscador centrado --}}
        <div class="mx-auto">
            <x-home-search-bar />
        </div>
    </div>
@endsection
