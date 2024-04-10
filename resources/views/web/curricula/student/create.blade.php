@extends('web.form-layout')

@section('title')
    Registrar estudiante
@endsection

@section('content')
    {{-- Formulario de registro --}}
    <h1 class="text-3xl uppercase text-enlace-red font-semibold mx-auto">Registrar estudiante</h1>
    <form class="px-5 lg:p-0.5 space-y-10 md:mb-10">
        @csrf
        {{-- Datos Personales --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Datos personales</h2>
            {{-- Nombre y Apellidos --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 mb-5">
                {{-- Nombre --}}
                <div>
                    <label for="name" class="block mb-1 text-xl font-semibold">Nombre</label>
                    <input id="name" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el nombre o los nombres pila del estudiante">
                </div>
                {{-- Apellidos --}}
                <div>
                    <label for="last_name" class="block mb-1 text-xl font-semibold">Apellidos</label>
                    <input id="last_name" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el apellido o los apellidos del estudiante">
                </div>
            </div>

            {{-- Correo y Telefono --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 mb-5">
                {{-- Correo --}}
                <div>
                    <label for="email" class="block mb-1 text-xl font-semibold">Correo</label>
                    <input id="email" type="email"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: micorreo@email.com">
                </div>
                {{-- Apellidos --}}
                <div>
                    <label for="phone" class="block mb-1 text-xl font-semibold">Telefono</label>
                    <input id="phone" type="number"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: 123 456 7890">
                </div>
            </div>

            <div class="w-full">
                {{-- Acerca de mi --}}
                <div>
                    <label for="about-me" class="block mb-1 text-xl font-semibold">Acerca de mi</label>
                    <textarea id="about-me"
                        class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                        placeholder="Ingrese una breve descripción del estudiante"></textarea>
                </div>
            </div>

        </div>

        {{-- Datos academicos --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Datos académicos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 mb-5">
                {{-- Programa de estudios --}}
                <div>
                    <label for="study-program" class="block mb-1 text-xl font-semibold">Programa de estudios</label>
                    <select id="study-program"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
                        <option>-- Selecciona una opcion --</option>
                        <option class="uppercase font-semibold" disabled>Licenciaturas</option>
                        <option>Ingeniero en Biotecnología - Plan 2012</option>
                        <option>Ingeniero Agroquímico - Plan 2014</option>
                        <option>Ingeniero Químico Ambiental - Plan 2014</option>
                        <option>Ingeniero Químico en Alimentos - Plan 2014</option>
                        <option>Ingeniero Químico en Materiales - 2014</option>
                        <option>Químico Farmacéutico Biólogo - Plan 2014</option>
                        <option class="uppercase font-semibold" disabled>Postgrados</option>
                        <option>Especialidad en Bioquímica Clínica - Plan 2013</option>
                        <option>Especialidad en Inocuidad de los Alimentos</option>
                        <option>Maestría en Ciencias de la Energía - Plan 2013</option>
                        <option>Maestría en Ciencias Químico Biológicas - Plan 2015</option>
                        <option>Maestría en Ciencia y Tecnología Ambiental - Plan 2013</option>
                        <option>Maestría en Ciencia y Tecnología de los Alimentos (PROPAC) - Plan 2013</option>
                        <option>Maestría en Química Clínica Diagnóstica</option>
                        <option>Doctorado en Ciencia de los Alimentos (PROPAC) - Plan 2014</option>
                        <option>Doctorado en Ciencias Químico Biológicas - Plan 2013</option>
                        <option>Doctorado en Ciencias de la Energía</option>
                        <option>Doctorado en Ciencia y Tecnología Químico-Ambiental</option>
                    </select>
                </div>
                {{-- Semestre --}}
                <div>
                    <label for="semester" class="block mb-1 text-xl font-semibold">Semestre</label>
                    <select id="semester"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green border-none rounded-lg bg-enlace-gray text-enlace-dark-gray">
                        <option>-- Selecciona una opcion --</option>
                        <option>1°</option>
                        <option>2°</option>
                        <option>3°</option>
                        <option>4°</option>
                        <option>5°</option>
                        <option>6°</option>
                        <option>7°</option>
                        <option>8°</option>
                        <option>9°</option>
                        <option>10°</option>
                        <option>Egresado</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 mb-5">
                {{-- Logros académicos --}}
                <div>
                    <label for="academic-achievements" class="block mb-1 text-xl font-semibold">Logros académicos</label>
                    <input id="academic-achievements" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: cursos, diplomados o talleres">
                </div>

                {{-- Programa Académico --}}
                <div>
                    <label class="block mb-1 text-xl font-semibold">Programa académico</label>
                    <div class="flex items-center gap-2">
                        <input type="radio" id="professional_practices" name="academic_program">
                        <label for="professional_practices" class="font-semibold">Prácticas profesionales</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="radio" id="employment" name="academic_program">
                        <label for="employment" class="font-semibold">Empleo</label>
                    </div>
                </div>
            </div>
        </div>

        {{-- Experiencia --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Experiencia</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 mb-5">
                {{-- Experiencia --}}
                <div>
                    <label for="experience" class="block mb-1 text-xl font-semibold">Experiencia</label>
                    <input id="experience" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese un área de experiencia">
                </div>
                {{-- Proyectos --}}
                <div>
                    <label for="projects" class="block mb-1 text-xl font-semibold">Proyectos</label>
                    <input id="projects" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: Proyecto de vinos">
                </div>
            </div>
        </div>

        {{-- Referencias --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Referencias</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 mb-5">
                {{-- Experiencia --}}
                <div>
                    <label for="experience" class="block mb-1 text-xl font-semibold">Datos de la persona o empresa</label>
                    <div class="space-y-2">
                        {{-- Nombre de la referencia --}}
                        <div class="flex items-center bg-enlace-gray rounded-lg content-center">
                            <label for="reference_name"
                                class="w-32 px-5 hidden md:block text-normal font-semibold rounded-l-lg border-r border-enlace-dark-gray">Nombre</label>
                            <input id="reference_name" type="text"
                                class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                                placeholder="Ingrese el nombre de la referencia">
                        </div>
                        {{-- Correo de la referencia --}}
                        <div class="flex items-center bg-enlace-gray rounded-lg">
                            <label for="reference_email"
                                class="w-32 px-5 hidden md:block text-normal font-semibold rounded-l-lg border-r border-enlace-dark-gray">Email</label>
                            <input id="reference_email" type="email"
                                class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                                placeholder="Ingrese el correo de la referencia">
                        </div>

                        {{-- Telefono de la referencia --}}
                        <div class="flex items-center bg-enlace-gray rounded-lg">
                            <label for="reference_phone"
                                class="w-32 px-5 hidden md:block text-normal font-semibold rounded-l-lg border-r border-enlace-dark-gray">Teléfono</label>
                            <input id="reference_phone" type="number"
                                class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                                placeholder="Ingrese el teléfono de la referencia">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center">
            <button class="uppercase font-semibold text-white bg-enlace-red hover:bg-enlace-red-hover transition-all px-5 py-2 rounded-lg" type="submit">Guardar registro</button>
        </div>
    </form>
@endsection
