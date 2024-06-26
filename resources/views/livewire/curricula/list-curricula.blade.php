<div class="flex-1 flex container mx-auto gap-10 overflow-hidden px-5 lg:px-0 mt-5 md:mt-0">
    {{-- Buscador y Curriculums --}}
    <div class="h-full w-full lg:w-3/5 space-y-5 md:space-y-10 flex flex-col p-0.5">
        {{-- Buscador --}}
        <x-curricula-search-bar :search="$search" :type="$type"/>
        {{-- <input type="text" wire:model.live='search'> --}}
        <h1 class="text-xl lg:text-2xl font-semibold uppercase">Curriculums</h1>
        <!-- ========================================
               Grid de curriculums
            ======================================== -->
        <div class="h-5/6 overflow-y-auto scrollbar-none pb-5 lg:pb-0">
            <!-- Contenido del grid aquí -->
            <div class="grid md:grid-cols-3 gap-5">
                @foreach ($curricula as $curriculum)
                    <x-curriculum-card :curriculum="$curriculum" />
                @endforeach
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

