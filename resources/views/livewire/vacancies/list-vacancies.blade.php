<div class="flex-1 flex container mx-auto gap-10 overflow-hidden px-5 lg:px-0 mt-5 md:mt-0">
    {{-- Buscador y Vacantes --}}
    <div class="h-full w-full lg:w-3/5 space-y-5 md:space-y-10 flex flex-col">
        {{-- Buscador --}}
        <x-vacancies-search-bar :search="$search"/>
        <h1 class="text-xl lg:text-2xl font-semibold uppercase">Vacantes</h1>
        <!-- ========================================
               Grid de Vacantes
            ======================================== -->
        <div class="h-5/6 overflow-y-auto scrollbar-none pb-5 lg:pb-0">
            <!-- Contenido del grid aquí -->
            <div class="grid md:grid-cols-3 gap-5 p-0.5">
                @foreach ($vacancies as $vacancy)
                    <x-vacancy-card :vacancy="$vacancy" :selectedCard="$selectedCard"/>
                @endforeach
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
