<div class="w-1/6 bg-enlace-red px-5 py-10 space-y-10">
    <a href="{{route('home')}}"><img class="h-16" src="{{ asset('img/logo-white.svg') }}" alt="Logo Enlace"></a>
    <nav class="w-full space-y-2">
        {{-- Inicio --}}
        <a href="{{route('admin.index')}}" class="{{ request()->routeIs('admin.index') ? 'bg-white text-enlace-red' : 'text-white' }} flex gap-5 p-3 rounded-lg  font-semibold  text-lg transition-all hover:bg-white hover:text-enlace-red">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-analytics" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                <path d="M7 20l10 0" />
                <path d="M9 16l0 4" />
                <path d="M15 16l0 4" />
                <path d="M8 12l3 -3l2 2l3 -3" />
              </svg>
            <span>Inicio</span>
        </a>

        {{-- Usuarios --}}
        <a href="{{route('admin.users')}}" class="{{ request()->routeIs('admin.users') ? 'bg-white text-enlace-red' : 'text-white' }} flex gap-5 p-3 rounded-lg  font-semibold  text-lg transition-all hover:bg-white hover:text-enlace-red">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
              </svg>
            <span>Usuarios</span>
        </a>

        {{-- Empresas --}}
        <a href="{{route('admin.companies')}}" class="{{ request()->routeIs('admin.companies') ? 'bg-white text-enlace-red' : 'text-white' }} flex gap-5 p-3 rounded-lg  font-semibold  text-lg transition-all hover:bg-white hover:text-enlace-red">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 21l18 0" />
                <path d="M9 8l1 0" />
                <path d="M9 12l1 0" />
                <path d="M9 16l1 0" />
                <path d="M14 8l1 0" />
                <path d="M14 12l1 0" />
                <path d="M14 16l1 0" />
                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
              </svg>
            <span>Empresas</span>
        </a>

        {{-- Programas de estudio --}}
        <a href="{{route('admin.study-programs')}}" class="{{ request()->routeIs('admin.study-programs') ? 'bg-white text-enlace-red' : 'text-white' }} flex gap-5 p-3 rounded-lg  font-semibold  text-lg transition-all hover:bg-white hover:text-enlace-red">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                <path d="M5 8h4" />
                <path d="M9 16h4" />
                <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" />
                <path d="M14 9l4 -1" />
                <path d="M16 16l3.923 -.98" />
              </svg>
            <span>Programas de estudio</span>
        </a>
    </nav>
</div>
