    {{-- Formulario de registro --}}
    <form class="px-5 lg:p-0.5 space-y-10 lg:space-y-20 md:mb-10" wire:submit.prevent="storeVacancy">
        <x-title title="Registrar vacante" />
        {{-- @csrf --}}
        {{-- Datos Personales --}}
        <div class="space-y-5">
            <x-sub-title subtitle="Datos de la empresa" />
            {{-- Nombre y Ubicacion --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Nombre --}}
                <div>
                    <x-required-label name="company_name" title="Nombre" />
                    <input id="company_name" type="text" wire:model='company_name'
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el nombre de la empresa">
                    @error('company_name')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
                {{-- Ubicacion --}}
                <div>
                    <x-required-label name="company_location" title="Ubicación" />
                    <input id="company_location" type="text" wire:model='company_location'
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese la dirección de la empresa">
                    @error('company_location')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
            </div>
        </div>

        {{-- Datos de la vacante --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Datos de la vacante</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Nombre del puesto --}}
                <div>
                    <x-required-label name="job_title" title="Nombre del puesto" />
                    <input id="job_title" type="text" wire:model='job_title'
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el puesto de la vacante">
                    @error('job_title')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
                {{-- Salario --}}
                <div>
                    <x-label name="salary" title="Salario" />
                    <input id="salary" type="text" wire:model='salary'
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: $10,000 - $15,000 MXN mensuales">
                    @error('salary')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Horario --}}
                <div>
                    <x-required-label name="schedule" title="Horario" />
                    <input id="schedule" type="text" wire:model='schedule'
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: Lunes a Viérnes, 8:00 a.m. a 6:00 p.m.">
                    @error('schedule')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-full">
                {{-- Descripción del puesto --}}
                <div>
                    <x-required-label name="description" title="Descripción del puesto" />
                    <textarea id="description" wire:model.live='description'
                        class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                        placeholder="Ingrese una breve descripción del puesto"></textarea>
                    <div class="flex justify-between relative">
                        @error('description')
                            <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                        @enderror
                        <p class="text-sm absolute right-0 {{Str::length($description) <= 1500 ? 'text-enlace-dark-gray' : 'text-enlace-red'}}">{{ Str::length($description) }}/1500
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full">
                {{-- Observaciones --}}
                <div>
                    <x-label name="observations" title="Observaciones" />
                    <textarea id="observations" wire:model.live='observations'
                        class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                        placeholder="Ingrese puntos que quiera resaltar sobre la vacante"></textarea>
                    <div class="flex justify-between relative">
                        @error('observations')
                            <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                        @enderror
                        <p class="text-sm absolute right-0 {{Str::length($observations) <= 500 ? 'text-enlace-dark-gray' : 'text-enlace-red'}}">{{ Str::length($observations) }}/500
                        </p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Datos de Contacto --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Datos de contacto</h2>
            {{-- Telefono y Correo --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Telefono --}}
                <div>
                    <x-required-label name="contact_phone" title="Teléfono" />
                    <input id="contact_phone" type="number" wire:model='contact_phone'
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el teléfono de contacto">
                        @error('contact_phone')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
                {{-- Correo --}}
                <div>
                    <x-required-label name="contact_email" title="Correo" />
                    <input id="contact_email" type="email" wire:model='contact_email'
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el correo de contacto">
                        @error('contact_email')
                        <span class="text-sm text-enlace-red">{{ __($message) }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center">
            <button
                class="uppercase font-semibold text-white bg-enlace-red hover:bg-enlace-red-hover transition-all px-5 py-2 rounded-lg"
                type="submit">Guardar registro</button>
        </div>
    </form>
