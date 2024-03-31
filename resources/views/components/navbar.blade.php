<nav class="bg-enlace-red py-3">
    <div class="container mx-auto flex items-center justify-between">
        {{-- Logo Enlace --}}
        <a href="/" class=""><img src="{{ asset('img/logo-white.svg') }}" alt="Logo Enlace"></a>

        {{-- Menu del navbar --}}
        <div class="space-x-5 text-white uppercase font-semibold flex">
            <a href="{{route('home')}}">Inicio</a>
            <a href="{{route('curricula.index')}}">Curriculums</a>
            <a href="{{route('vacancies.index')}}">Vacantes</a>
            {{-- Dropdown de formularios --}}
    <div class="relative inline-block text-left">
        <button class="uppercase flex items-center justify-between focus:outline-none">
            Registrar
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M6 9l6 6l6 -6" />
            </svg>
        </button>
        {{-- Opciones del dropdown --}}
        <div class="absolute right-0 mt-2 w-56 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Docente</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Egresado</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Estudiante</a>
        </div>
    </div>
        </div>

        {{-- Inicio de sesion --}}
        <a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor" />
            <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" stroke-width="0" fill="currentColor" />
          </svg></a>

    </div>
</nav>
