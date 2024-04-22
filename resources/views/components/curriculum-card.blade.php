{{-- Propiedades que se van a usar en el componente --}}
@props(['curriculum'])

<div class="bg-enlace-gray rounded-lg relative overflow-hidden cursor-pointer h-44">
    {{-- Contenedor de datos --}}
    <div class="px-3 py-2">
        <!-- ========================================
           Datos para docente
        ======================================== -->
        @if ($curriculum->type === 'teacher')
        {{-- Titulo principal --}}
        <p class="text-sm text-right font-semibold text-enlace-dark-gray">{{$curriculum->main_degree}}</p>
        <div class="flex flex-col">
            {{-- Nombre de la persona --}}
            <span class="text-sm font-semibold">{{ $curriculum->name . ' ' . $curriculum->last_name }}</span>
            {{-- Perfil de la persona --}}
                <span class="text-xs font-semibold text-enlace-dark-gray">Docente</span>
        </div>
        <div>
            <span class="text-sm font-semibold">Experiencia</span>
            <ul class="text-xs list-disc ml-5 text-enlace-dark-gray">
                @foreach (json_decode($curriculum->experience) as $key => $experience)
                    @if ($key < 3)
                        <li class="ml-5 text-gray-400">{{ Str::limit($experience, 25) }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        @else
            <!-- ========================================
           Datos para estudiantes
        ======================================== -->
            @if ($curriculum->academic_program === 'practices')
                <p class="text-sm text-right font-semibold text-enlace-dark-gray">Prácticas Profesionales</p>
            @elseif ($curriculum->academic_program === 'job')
                <p class="text-sm text-right font-semibold text-enlace-dark-gray">Empleo</p>
            @endif
            <div class="flex flex-col">
                {{-- Nombre de la persona --}}
                <span class="text-sm font-semibold">{{ $curriculum->name . ' ' . $curriculum->last_name }}</span>
                {{-- Perfil de la persona --}}
                @if ($curriculum->type === 'student')
                    <span class="text-xs font-semibold text-enlace-dark-gray">Estudiante</span>
                @elseif ($curriculum->type === 'graduate')
                    <span class="text-xs font-semibold text-enlace-dark-gray">Egresado</span>
                @endif
            </div>
            <div>
                <span class="text-sm font-semibold">Experiencia</span>
                <ul class="text-xs list-disc ml-5 text-enlace-dark-gray">
                    @foreach (json_decode($curriculum->experience) as $key => $experience)
                        @if ($key < 3)
                            <li class="ml-5 text-gray-400">{{ Str::limit($experience, 25) }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <p
        class="bg-enlace-green flex p-1 justify-center text-sm font-semibold uppercase text-white absolute bottom-0 w-full">
        Ver CV</p>
</div>
