<!-- ========================================
   Formulario para pantallas medianas y grandes
======================================== -->
<form class="hidden md:flex gap-5 ml-0.5" onsubmit="return false;">
    <input type="text" wire:model.live="search"
        class="w-4/6 focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
        placeholder="Buscar...">
    {{-- Filtro de alumnos, egresadod o docentes --}}
    <select
        wire:model.live="type"
        class="w-2/6 focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
        <option value="">-- Todos --</option>
        <option value="student">Estudiantes</option>
        <option value="graduate">Egresados</option>
        <option value="teacher">Docentes</option>
    </select>
</form>

<!-- ========================================
   Formulario para pantallas chicas
======================================== -->
<form class="flex flex-col gap-5 ml-0.5 md:hidden p-0.5" onsubmit="return false;">
    <input type="text" wire:model.live="search"
        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
        placeholder="Buscar...">
    <div class="flex gap-5">
        {{-- Filtro de alumnos, egresadod o docentes --}}
        <select
        wire:model.live="type"
            class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
            <option value="">-- Todos --</option>
            <option value="student">Estudiantes</option>
            <option value="graduate">Egresados</option>
            <option value="teacher">Docentes</option>
        </select>
    </div>
</form>
