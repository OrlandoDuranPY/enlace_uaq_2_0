<div wire:click="selectCard({{$vacancy->id}})" class="bg-enlace-gray rounded-lg relative overflow-hidden cursor-pointer h-44 {{ $vacancy->id == $selectedCard ? 'ring-enlace-green ring-2' : '' }}">
    {{-- Contenedor de datos --}}
    <div class="px-3 py-2">
        {{-- Puesto de trabajo --}}
        <p class="text-sm text-right font-semibold text-enlace-dark-gray">{{ $vacancy->job_title }}</p>
        <div class="flex flex-col">
            {{-- Nombre de la empresa --}}
            <span class="text-sm font-semibold">{{ Str::limit($vacancy->company_name, 35) }}</span>
            {{-- Ubicacion --}}
            <span class="text-xs font-semibold text-enlace-dark-gray">{{ $vacancy->company_location }}</span>
        </div>
        <div>
            <span class="text-sm font-semibold">Descripción</span>
            {{-- {{ Str::limit($experience, 25) }} --}}
            <p class="text-xs text-enlace-dark-gray">{{ Str::limit($vacancy->description, 130) }}</p>
        </div>
    </div>
    <p class="bg-enlace-green flex p-1 justify-center text-sm font-semibold uppercase text-white absolute bottom-0 w-full">
        Ver vacante</p>
</div>
