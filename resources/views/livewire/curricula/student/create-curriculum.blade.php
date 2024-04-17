<form class="px-5 lg:p-0.5 space-y-10 lg:space-y-20 md:mb-10" wire:submit.prevent="storeStudentCurriculum" novalidate>
    {{-- @csrf --}}
    {{-- Datos Personales --}}
    <div class="space-y-5">
        <h2 class="text-2xl uppercase font-semibold">Datos personales</h2>
        {{-- Nombre y Apellidos --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Nombre --}}
            <div>
                <label for="name" class="block mb-1 text-xl font-semibold">Nombre <span
                        class="text-enlace-red">*</span></label>
                <input id="name" type="text" wire:model="name"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ingrese el nombre o los nombres pila del estudiante">
                @error('name')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
            {{-- Apellidos --}}
            <div>
                <label for="last_name" class="block mb-1 text-xl font-semibold">Apellidos <span
                        class="text-enlace-red">*</span></label>
                <input id="last_name" type="text" wire:model="last_name"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ingrese el apellido o los apellidos del estudiante">
                @error('last_name')
                    <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                @enderror
            </div>
        </div>

        {{-- Correo y Telefono --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Correo --}}
            <div>
                <label for="email" class="block mb-1 text-xl font-semibold">Correo <span
                        class="text-enlace-red">*</span></label>
                <input id="email" type="email" wire:model="email"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ejemplo: micorreo@email.com">
                @error('email')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
            {{-- Apellidos --}}
            <div>
                <label for="phone" class="block mb-1 text-xl font-semibold">Telefono <span
                        class="text-enlace-red">*</span></label>
                <input id="phone" type="number" wire:model="phone"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ejemplo: 123 456 7890">
                @error('phone')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="w-full">
            {{-- Acerca de mi --}}
            <div>
                <label for="about-me" class="block mb-1 text-xl font-semibold">Acerca de mi <span
                        class="text-enlace-red">*</span></label>
                <textarea id="about-me" wire:model.live="about_me"
                    class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                    placeholder="Ingrese una breve descripción del estudiante"></textarea>
                <div class="flex justify-between relative">
                    @error('about_me')
                        <span class="text-sm text-enlace-red">{{ $message }}</span>
                    @enderror
                    <p class="text-sm absolute right-0 text-enlace-dark-gray">{{ Str::length($about_me) }}/500</p>
                </div>
                <div>
                </div>
            </div>
        </div>

    </div>

    {{-- Datos academicos --}}
    <div class="space-y-5">
        <h2 class="text-2xl uppercase font-semibold">Datos académicos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Programa de estudios --}}
            <div>
                <label for="study_program_id" class="block mb-1 text-xl font-semibold">Programa de estudios <span
                        class="text-enlace-red">*</span></label>
                <select id="study_program_id" wire:model="study_program_id"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
                    <option>-- Selecciona una opcion --</option>
                    <option class="uppercase font-semibold" disabled>Licenciaturas</option>
                    @foreach ($study_programs_undergraduate as $spu)
                        <option value="{{ $spu->id }}">{{ $spu->name }}</option>
                    @endforeach
                    <option class="uppercase font-semibold" disabled>Postgrados</option>
                    @foreach ($study_programs_graduate as $spg)
                        <option value="{{ $spg->id }}">{{ $spg->name }}</option>
                    @endforeach
                </select>
                @error('study_program_id')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
            {{-- Semestre --}}
            <div>
                <label for="semester" class="block mb-1 text-xl font-semibold">Semestre <span
                        class="text-enlace-red">*</span></label>
                <select id="semester" wire:model="semester"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
                    <option selected>-- Selecciona una opcion --</option>
                    <option value=1>1°</option>
                    <option value=2>2°</option>
                    <option value=3>3°</option>
                    <option value=4>4°</option>
                    <option value=5>5°</option>
                    <option value=6>6°</option>
                    <option value=7>7°</option>
                    <option value=8>8°</option>
                    <option value=9>9°</option>
                    <option value=10>10°</option>
                    <option value=11>Egresado</option>
                </select>
                @error('semester')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Logros académicos --}}
            <div>
                <label for="academic_achievement" class="block mb-1 text-xl font-semibold">Logros académicos</label>
                <input id="academic_achievement" type="text" wire:model="academic_achievement"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ejemplo: cursos, diplomados o talleres">
                @error('academic_achievement')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>

            {{-- Programa Académico --}}
            <div>
                <label class="block mb-1 text-xl font-semibold">Programa académico <span
                        class="text-enlace-red">*</span></label>
                <div class="flex items-center gap-2">
                    <input type="radio" id="professional_practices" name="academic_program"
                        wire:model="academic_program" value="practices">
                    <label for="professional_practices" class="font-semibold">Prácticas profesionales</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="radio" id="employment" name="academic_program" wire:model="academic_program"
                        value="job">
                    <label for="employment" class="font-semibold">Empleo</label>
                </div>
                @error('academic_program')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Experiencia --}}
    <div class="space-y-5">
        <h2 class="text-2xl uppercase font-semibold">Experiencia</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Experiencia --}}
            <div>
                <label for="experience" class="block mb-1 text-xl font-semibold">Experiencia</label>
                <input id="experience" type="text" wire:model="experience"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ingrese un área de experiencia">
                @error('experience')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
            {{-- Proyectos --}}
            <div>
                <label for="project" class="block mb-1 text-xl font-semibold">Proyectos</label>
                <input id="project" type="text" wire:model="project"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ejemplo: Proyecto de vinos">
                @error('project')
                    <span class="text-sm text-enlace-red">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Referencias --}}
    <div class="space-y-5">
        <h2 class="text-2xl uppercase font-semibold">Referencias</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Experiencia --}}
            <div>
                <label for="#" class="block mb-1 text-xl font-semibold">Datos de la persona o empresa <span
                    class="text-enlace-red">*</span></label>
                <div class="space-y-2">
                    {{-- Nombre de la referencia --}}
                    <div class="flex items-center bg-enlace-gray rounded-lg content-center">
                        <label for="reference_name"
                            class="w-32 px-5 hidden md:block text-normal font-semibold rounded-l-lg border-r border-enlace-dark-gray">Nombre</label>
                        <input id="reference_name" type="text" wire:model="reference.name"
                            class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                            placeholder="Ingrese el nombre de la referencia">
                        </div>
                        @error('reference.name')
                            <span class="text-sm text-enlace-red">{{ $message }}</span>
                        @enderror
                    {{-- Correo de la referencia --}}
                    <div class="flex items-center bg-enlace-gray rounded-lg">
                        <label for="reference_email"
                            class="w-32 px-5 hidden md:block text-normal font-semibold rounded-l-lg border-r border-enlace-dark-gray">Email</label>
                        <input id="reference_email" type="email" wire:model="reference.email"
                            class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                            placeholder="Ingrese el correo de la referencia">
                        </div>
                        @error('reference.email')
                            <span class="text-sm text-enlace-red">{{ $message }}</span>
                        @enderror

                    {{-- Telefono de la referencia --}}
                    <div class="flex items-center bg-enlace-gray rounded-lg">
                        <label for="reference_phone"
                            class="w-32 px-5 hidden md:block text-normal font-semibold rounded-l-lg border-r border-enlace-dark-gray">Teléfono</label>
                        <input id="reference_phone" type="number" wire:model="reference.phone"
                            class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                            placeholder="Ingrese el teléfono de la referencia">
                        </div>
                        @error('reference.phone')
                            <span class="text-sm text-enlace-red">{{ $message }}</span>
                        @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex justify-center">
        <button
            class="uppercase font-semibold text-white bg-enlace-red hover:bg-enlace-red-hover transition-all px-5 py-2 rounded-lg"
            type="submit">Guardar registro</button>
    </div>
</form>
