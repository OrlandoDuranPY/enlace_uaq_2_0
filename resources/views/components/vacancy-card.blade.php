<div class="bg-enlace-gray rounded-lg relative overflow-hidden cursor-pointer">
    {{-- Contenedor de datos --}}
    <div class="px-3 py-2">
        {{-- Puesto de trabajo --}}
        <p class="text-sm text-right font-semibold text-enlace-dark-gray">Puesto de trabajo</p>
        <div class="flex flex-col">
            {{-- Nombre de la empresa --}}
            <span class="text-sm font-semibold">Nombre de la empresa</span>
            {{-- Ubicacion --}}
            <span class="text-xs font-semibold text-enlace-dark-gray">Ubicacion de la empresa</span>
        </div>
        <div>
            <span class="text-sm font-semibold">Descripción</span>
            {{-- {{ Str::limit($experience, 25) }} --}}
            <p class="text-xs text-enlace-dark-gray">Officia incididunt consequat sint elit fugiat incididunt officia voluptate tempor
                irure. Ad proident voluptate aliqua proident cillum ...</p>
        </div>
    </div>
    <p class="bg-enlace-green flex p-1 justify-center text-sm font-semibold uppercase text-white">Ver CV</p>
</div>
