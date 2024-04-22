    {{-- Formulario de registro --}}
    <form class="px-5 lg:p-0.5 space-y-10 lg:space-y-20 md:mb-10" wire:submit.prevent="storeTeacherCurriculum">
        <x-title title="Registrar docente" />
        {{-- @csrf --}}
        {{-- Datos Personales --}}
        <div class="space-y-5">
            <x-sub-title subtitle="Datos personales" />
            {{-- Nombre y Apellidos --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Nombre --}}
                <div>
                    <x-required-label name="name" title="Nombre" />
                    <input id="name" type="text" wire:model="name"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el nombre o los nombres pila del estudiante">
                    @error('name')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
                {{-- Apellidos --}}
                <div>
                    <x-required-label name="last_name" title="Apellidos" />
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
                    <x-required-label name="email" title="Correo" />
                    <input id="email" type="email" wire:model="email"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: micorreo@email.com">
                    @error('email')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
                {{-- Telefono --}}
                <div>
                    <x-required-label name="phone" title="Teléfono" />
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
                    <x-required-label name="about_me" title="Acerca de mi" />
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
            <x-sub-title subtitle="Datos académicos" />
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Nivel de estudios --}}
                <div>
                    <div>
                        <x-add-input title="Nivel de estudios" name="study_level" :required="true" />
                        <div class="space-y-2">
                            @foreach ($study_level as $index => $std_lvl)
                                <x-remove-input name="study_level" :index="$index"
                                    placeholder="Ejemplo: Licenciatura en..., Maestría en..., Doctorado en..." />
                                @error('study_level.' . $index)
                                    <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                                @enderror
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- Titulo Principal --}}
                <div>
                    <x-required-label name="main_degree" title="Título principal" />
                    <input id="main_degree" type="text" wire:model="main_degree"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: Ingeniero Químico">
                        @error('main_degree')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Logros académicos --}}
                <div>
                    <x-add-input title="Logros académicos" name="academic_achievement" :required="false" />
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
            </div>
        </div>

        {{-- Experiencia --}}
        <div class="space-y-5">
            <x-sub-title subtitle="Datos experiencia" />
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Experiencia --}}
                <div>
                    <x-add-input title="Experiencia" name="experience" :required="false" />
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
                    <x-add-input title="Projectos" name="project" :required="false" />
                    <div class="space-y-2">
                        @foreach ($project as $index => $exp)
                            <x-remove-input name="project" :index="$index" placeholder="Ejemplo: Proyecto de vinos" />
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
            <x-sub-title subtitle="Datos referencias" />
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10 mb-5">
                <div>
                    <x-required-label name="reference_name" title="Datos de la persona o empresa" />
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
