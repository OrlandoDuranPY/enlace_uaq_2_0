@extends('web.layout')

@section('title')
    Vacantes
@endsection

@section('content')
    <div class="flex-1 flex py-10 container mx-auto gap-10 overflow-hidden">
        {{-- Buscador y Vacantes --}}
        <div class="h-full w-3/5 space-y-10 flex flex-col">
            {{-- Buscador --}}
            <x-vacancies-search-bar />
            <h1 class="text-2xl font-semibold uppercase">Vacantes</h1>
            <!-- ========================================
                   Grid de Vacantes
                ======================================== -->
            <div class="h-5/6 overflow-y-auto scrollbar-thin">
                <!-- Contenido del grid aquí -->
                <div class="grid grid-cols-3 gap-5">

                    @for ($i = 0; $i < 20; $i++)
                        <x-vacancy-card />
                    @endfor
                </div>
            </div>
        </div>
        <!-- ========================================
                Preview sin item seleccionado
            ======================================== -->
        <x-no-selected-item-preview>
            Da clic en una ficha para cargar la información de la vacante.
        </x-no-selected-item-preview>

        <!-- ========================================
           Preview con item seleccionado
        ======================================== -->
    </div>
@endsection
