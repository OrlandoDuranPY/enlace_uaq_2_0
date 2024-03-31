@extends('web.layout')

@section('title')
    Inicio
@endsection

@section('content')
    <div class="flex-1 flex py-10 container mx-auto gap-10 overflow-hidden">
        {{-- Buscador y Curriculums --}}
        <div class="h-full w-3/5 space-y-10 flex flex-col">
            {{-- Buscador --}}
            <x-curricula-search-bar />
            <h1 class="text-2xl font-semibold uppercase">Curriculums</h1>
            {{-- Grid con scroll --}}
            <div class="h-5/6 overflow-y-auto scrollbar-thin">
                <!-- Contenido del grid aquí -->
                <div class="grid grid-cols-3 gap-5">
                    {{-- Card --}}
                    @for ($i = 0; $i < 100; $i++)
                        <div class="p-5 bg-blue-100">Curriculum</div>
                    @endfor
                </div>
            </div>
        </div>
        <!-- ========================================
                   Preview sin item seleccionado
                ======================================== -->
        <div class="bg-enlace-gray w-2/5 rounded-lg flex items-center justify-center">
            <div class="space-y-10 w-4/5 text-center">
                <img class="mx-auto" src="{{ asset('img/preview-icon.svg') }}" alt="Icono Preview">
                <p class="text-enlace-dark-gray text-2xl">Da clic en una ficha para cargar la información de la persona.</p>
            </div>
        </div>
    </div>
@endsection
