@extends('web.layout')

@section('title')
    Registrar estudiante
@endsection

@section('content')
    <div class="flex-1 flex flex-col py-10 container mx-auto overflow-hidden">
        {{-- Formulario de registro --}}
        <h1 class="text-3xl uppercase text-enlace-red font-semibold mx-auto">Registrar estudiante</h1>
        <form class="px-5 lg:p-0.5 space-y-10">
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

                {{-- Acerca de mi --}}
                <div class="w-full">
                    {{-- Correo --}}
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
                {{-- Programa de estudios --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 mb-5">
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
                            <label for="study-program" class="block mb-1 text-xl font-semibold">Programa de estudios</label>
                            <select id="study-program"
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
            </div>

        </form>
    </div>
@endsection
