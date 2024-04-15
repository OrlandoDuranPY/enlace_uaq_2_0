@extends('web.form-layout')

@section('title')
    Registrar vacante
@endsection

@section('content')
    {{-- Formulario de registro --}}
    <h1 class="text-3xl uppercase text-enlace-red font-semibold mx-auto">Registrar vacante</h1>
    <form class="px-5 lg:p-0.5 space-y-10 lg:space-y-20 md:mb-10">
        @csrf
        {{-- Datos Personales --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Datos de la empresa</h2>
            {{-- Nombre y Ubicacion --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Nombre --}}
                <div>
                    <label for="name" class="block mb-1 text-xl font-semibold">Nombre</label>
                    <input id="name" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el nombre de la empresa">
                </div>
                {{-- Ubicacion --}}
                <div>
                    <label for="location" class="block mb-1 text-xl font-semibold">Ubicación</label>
                    <input id="location" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese la dirección de la empresa">
                </div>
            </div>
        </div>

        {{-- Datos de la vacante --}}
        <div class="space-y-5">
            <h2 class="text-2xl uppercase font-semibold">Datos de la vacante</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Nombre del puesto --}}
                <div>
                    <label for="job_title" class="block mb-1 text-xl font-semibold">Nombre del puesto</label>
                    <input id="job_title" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el puesto de la vacante">
                </div>
                {{-- Salario --}}
                <div>
                    <label for="salary" class="block mb-1 text-xl font-semibold">Salario</label>
                    <input id="salary" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: $10,000 - $15,000 MXN mensuales">
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 mb-5">
                {{-- Horario --}}
                <div>
                    <label for="schedule" class="block mb-1 text-xl font-semibold">Horario</label>
                    <input id="schedule" type="text"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ejemplo: Lunes a Viérnes, 8:00 a.m. a 6:00 p.m.">
                </div>
            </div>

            <div class="w-full">
                {{-- Descripción del puesto --}}
                <div>
                    <label for="description" class="block mb-1 text-xl font-semibold">Descripción del puesto</label>
                    <textarea id="description"
                        class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                        placeholder="Ingrese una breve descripción del puesto"></textarea>
                </div>
            </div>

            <div class="w-full">
                {{-- Observaciones --}}
                <div>
                    <label for="observations" class="block mb-1 text-xl font-semibold">Observaciones</label>
                    <textarea id="observations"
                        class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                        placeholder="Ingrese puntos que quiera resaltar sobre la vacante"></textarea>
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
                    <label for="phone" class="block mb-1 text-xl font-semibold">Teléfono</label>
                    <input id="phone" type="number"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el teléfono de contacto">
                </div>
                {{-- Correo --}}
                <div>
                    <label for="email" class="block mb-1 text-xl font-semibold">Correo</label>
                    <input id="email" type="email"
                        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
                        placeholder="Ingrese el correo de contacto">
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center">
            <button
                class="uppercase font-semibold text-white bg-enlace-red hover:bg-enlace-red-hover transition-all px-5 py-2 rounded-lg"
                type="submit">Guardar registro</button>
        </div>
    </form>
@endsection
