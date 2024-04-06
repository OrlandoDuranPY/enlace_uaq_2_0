@extends('web.layout')

@section('title')
    Curriculums
@endsection

@section('content')
    <div class="flex-1 flex py-10 container mx-auto gap-10 overflow-hidden">
        {{-- Buscador y Curriculums --}}
        <div class="h-full w-3/5 space-y-10 flex flex-col">
            {{-- Buscador --}}
            <x-curricula-search-bar />
            <h1 class="text-2xl font-semibold uppercase">Curriculums</h1>
            <!-- ========================================
                   Grid de curriculums
                ======================================== -->
            <div class="h-5/6 overflow-y-auto scrollbar-thin">
                <!-- Contenido del grid aquí -->
                <div class="grid grid-cols-3 gap-5">

                    @for ($i = 0; $i < 20; $i++)
                        <x-curriculum-card />
                    @endfor
                </div>
            </div>
        </div>
        <!-- ========================================
                Preview sin item seleccionado
            ======================================== -->
        <x-no-selected-item-preview>
            Da clic en una ficha para cargar la información de la persona.
        </x-no-selected-item-preview>

        <!-- ========================================
           Preview con item seleccionado
        ======================================== -->
    </div>
@endsection