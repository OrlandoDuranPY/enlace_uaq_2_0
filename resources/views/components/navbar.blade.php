<!-- ========================================
   Pantallas grandes
======================================== -->
<nav class="bg-enlace-red py-3 hidden md:block">
    <div class="container mx-auto flex items-center justify-between md:px-5 lg:px-0">
        {{-- Logo Enlace --}}
        <a href="/" class=""><img src="{{ asset('img/logo-white.svg') }}" alt="Logo Enlace"></a>

        {{-- Menu del navbar --}}
        <div class="space-x-10 text-white uppercase font-semibold flex">
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('curricula.index') }}">Curriculums</a>
            <a href="{{ route('vacancies.index') }}">Vacantes</a>
            {{-- Dropdown de formularios --}}

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="uppercase flex items-center justify-between focus:outline-none"" type="button">Registrar <svg
                    class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{ route('curricula.create.student') }}"
                            class="block px-4 py-2 text-enlace-dark-gray hover:bg-enlace-gray">Estudiante</a>
                    </li>
                    <li>
                        <a href="{{ route('curricula.create.teacher') }}"
                            class="block px-4 py-2 text-enlace-dark-gray hover:bg-enlace-gray">Docente</a>
                    </li>
                    <li>
                        <a href="{{ route('vacancies.create') }}" class="block px-4 py-2 text-enlace-dark-gray hover:bg-enlace-gray">Vacante</a>
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

<!-- ========================================
   Pantallas chicas
======================================== -->


<nav class="bg-enlace-red py-2 md:hidden w-full transition-all z-50 absolute">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-5 transition-all relative">
        {{-- Logo Enlace --}}
        <a href="/" class=""><img src="{{ asset('img/logo-white.svg') }}" alt="Logo Enlace"></a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center w-10 h-10 justify-center rounded hover:bg-enlace-red-hover transition-all"
            aria-controls="navbar-default" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-deep" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6h16" />
                <path d="M7 12h13" />
                <path d="M10 18h10" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto transition-all" id="navbar-default">
            <ul
                class="font-semibold flex flex-col md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse uppercase text-white space-y-2">
                <li>
                    @auth
                        <p class="text-white font-semibold py-3 text-right uppercase text-xs">{{ Auth::user()->name }}</p>
                    @endauth
                </li>
                <li>
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'bg-enlace-red-hover text-white' : '' }} block py-2 px-3 rounded hover:bg-enlace-red-hover transition-all"
                        aria-current="page">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('curricula.index') }}"
                        class="{{ request()->routeIs('curricula.index') ? 'bg-enlace-red-hover text-white' : '' }} block py-2 px-3 rounded hover:bg-enlace-red-hover transition-all">Curriculums</a>
                </li>
                <li>
                    <a href="{{ route('vacancies.index') }}"
                        class="{{ request()->routeIs('vacancies.index') ? 'bg-enlace-red-hover text-white' : '' }} block py-2 px-3 rounded hover:bg-enlace-red-hover transition-all">Vacantes</a>
                </li>
                <hr class="border-enlace-red-hover">
                <li>
                    <a href="{{ route('curricula.create.student') }}"
                        class="{{ request()->routeIs('curricula.create.student') ? 'bg-enlace-red-hover text-white' : '' }} block py-2 px-3 rounded hover:bg-enlace-red-hover transition-all">Registrar
                        estudiante</a>
                </li>
                <li>
                    <a href="{{ route('curricula.create.teacher') }}"
                        class="{{ request()->routeIs('curricula.create.teacher') ? 'bg-enlace-red-hover text-white' : '' }} block py-2 px-3 rounded hover:bg-enlace-red-hover transition-all">Registrar
                        docente</a>
                </li>
                <li>
                    <a href="{{ route('vacancies.create') }}"
                        class="{{ request()->routeIs('vacancies.create') ? 'bg-enlace-red-hover text-white' : '' }} block py-2 px-3 rounded hover:bg-enlace-red-hover transition-all">Registrar
                        vacante</a>
                </li>
                <hr class="border-enlace-red-hover">
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit"
                            class="w-full flex gap-2 py-2 px-3 rounded hover:bg-enlace-red-hover transition-all"><svg
                                xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                <path d="M9 12h12l-3 -3" />
                                <path d="M18 15l3 -3" />
                            </svg> Cerrar sesión</button>
                    </form>

                </li>
            </ul>
        </div>
    </div>
</nav>
