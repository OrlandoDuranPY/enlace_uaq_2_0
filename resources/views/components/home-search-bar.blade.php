<div class="space-y-5 flex flex-col items-center">
    {{-- Logo --}}
    <img class="h-28" src="{{asset('img/logo-color.svg')}}" alt="Logo Enlace Color">

    {{-- Frase --}}
    <p class="text-enlace-dark-gray text-center">Et laboris elit proident sit in ullamco. Sint eiusmod ut duis ea exercitation Lorem.</p>

    {{-- Contenedor de fitros --}}
    <form class="flex flex-col md:flex-row gap-5 w-full">
        {{-- Buscador --}}
        <input type="text" class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray" placeholder="Buscar...">

        {{-- Filtro de curriculums o vacantes --}}
        <select class="focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
            <option>-- Selecciona una opcion --</option>
            <option>Curriculums</option>
            <option>Vacantes</option>
        </select>

        {{-- Submit --}}
        <button class="bg-enlace-red py-2 px-5 rounded-lg text-white uppercase font-semibold" type="submit">Buscar</button>
    </form>
</div>
