<nav class="bg-enlace-red py-3">
    <div class="container mx-auto flex items-center justify-between">
        {{-- Logo Enlace --}}
        <a href="/" class=""><img src="{{ asset('img/logo-white.svg') }}" alt="Logo Enlace"></a>

        {{-- Menu del navbar --}}
        <div class="space-x-5 text-white uppercase font-semibold">
            <a href="{{route('home')}}">Inicio</a>
            <a href="{{route('curricula.index')}}">Curriculums</a>
            <a href="">Vacantes</a>
        </div>

        {{-- Inicio de sesion --}}
        <a href="#" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor" />
            <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" stroke-width="0" fill="currentColor" />
          </svg></a>

    </div>
</nav>
