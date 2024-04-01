<nav class="bg-enlace-red py-3">
    <div class="container mx-auto flex items-center justify-between">
        {{-- Logo Enlace --}}
        <a href="/" class=""><img src="{{ asset('img/logo-white.svg') }}" alt="Logo Enlace"></a>

        {{-- Menu del navbar --}}
        <div class="space-x-10 text-white uppercase font-semibold flex">
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('curricula.index') }}">Curriculums</a>
            <a href="{{ route('vacancies.index') }}">Vacantes</a>
            {{-- Dropdown de formularios --}}

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="uppercase flex items-center justify-between focus:outline-none""
                type="button">Registrar <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{route('create.student.curricula')}}"
                            class="block px-4 py-2 text-enlace-dark-gray hover:bg-enlace-gray">Estudiante</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-enlace-dark-gray hover:bg-enlace-gray">Docente</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-enlace-dark-gray hover:bg-enlace-gray">Vacante</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Inicio de sesion --}}
        <a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-user-filled" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0"
                    fill="currentColor" />
                <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z"
                    stroke-width="0" fill="currentColor" />
            </svg></a>

    </div>
</nav>
