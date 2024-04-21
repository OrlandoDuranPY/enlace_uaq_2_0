<form class="px-5 lg:p-0.5 space-y-10 lg:space-y-20 md:mb-10" wire:submit.prevent="storeStudentCurriculum" novalidate>
    <x-title title="Registrar estudiante"/>
    {{-- @csrf --}}
    {{-- Datos Personales --}}
    <div class="space-y-5">
        <x-sub-title subtitle="Datos personales"/>
        {{-- Nombre y Apellidos --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Nombre --}}
            <div>
                <x-required-label id="name" name="Nombre"/>
                <input id="name" type="text" wire:model="name"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ingrese el nombre o los nombres pila del estudiante">
                @error('name')
                <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                @enderror
            </div>
            {{-- Apellidos --}}
            <div>
                <x-required-label id="last_name" name="Apellidos"/>
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
                <x-required-label id="email" name="Correo"/>
                <input id="email" type="email" wire:model="email"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ejemplo: micorreo@email.com">
                @error('email')
                    <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                @enderror
            </div>
            {{-- Telefono --}}
            <div>
                <x-required-label id="phone" name="Teléfono"/>
                <input id="phone" type="number" wire:model="phone"
                    class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                    placeholder="Ejemplo: 123 456 7890">
                @error('phone')
                    <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                @enderror
            </div>
        </div>

        <div class="w-full">
            {{-- Acerca de mi --}}
            <div>
                <x-required-label id="about_me" name="Acerca de mi"/>
                <textarea id="about_me" wire:model.live="about_me"
                    class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                    placeholder="Ingrese una breve descripción del estudiante"></textarea>
                <div class="flex justify-between relative">
                    @error('about_me')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
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
        <x-sub-title subtitle="Datos académicos"/>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Programa de estudios --}}
            <div>
                <x-required-label id="study_program_id" name="Programa de estudios"/>
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
                    <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                @enderror
            </div>
            {{-- Semestre --}}
            <div>
                <x-required-label id="semester" name="Semestre"/>
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
                    <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Logros académicos --}}
            <div>
                <x-add-input title="Logros académicos" name="academic_achievement" />
                <div class="space-y-2">
                    @foreach ($academic_achievement as $index => $exp)
                        <x-remove-input name="academic_achievement" :index="$index"
                            placeholder="Ejemplo: Cursos, diplomados o talleres" />
                        @error('academic_achievement.' . $index)
                            <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                        @enderror
                    @endforeach
                </div>
            </div>

            {{-- Programa Académico --}}
            <div>
                <x-required-label id="professional_practices" name="Programa académico"/>
                <div class="flex items-center gap-2">
                    <input type="radio" id="professional_practices" name="academic_program"
                        wire:model="academic_program" value="practices">
                    <label for="professional_practices" class="font-semibold">Prácticas profesionales</label>
                </div>
                <div class="flex items-center gap-2">
                    <input  type="radio" id="employment" name="academic_program" wire:model="academic_program"
                        value="job">
                    <label for="employment" class="font-semibold">Empleo</label>
                </div>
                @error('academic_program')
                    <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                @enderror
            </div>
        </div>
    </div>

    {{-- Experiencia --}}
    <div class="space-y-5">
        <x-sub-title subtitle="Datos experiencia"/>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
            {{-- Experiencia --}}
            <div>
                <x-add-input title="Experiencia" name="experience" />
                <div class="space-y-2">
                    @foreach ($experience as $index => $exp)
                        <x-remove-input name="experience" :index="$index"
                            placeholder="Ingrese un área de experiencia" />
                        @error('experience.' . $index)
                            <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                        @enderror
                    @endforeach
                </div>
            </div>
            {{-- Proyectos --}}
            <div>
                <x-add-input title="Projectos" name="project" />
                <div class="space-y-2">
                    @foreach ($project as $index => $exp)
                        <x-remove-input name="project" :index="$index"
                            placeholder="Ejemplo: Proyecto de vinos" />
                        @error('project.' . $index)
                            <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                        @enderror
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Referencias --}}
    <div class="space-y-5">
        <x-sub-title subtitle="Datos referencias"/>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10 mb-5">
            <div>
                <x-required-label id="reference_name" name="Datos de la persona o empresa"/>
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
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
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
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
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
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
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
