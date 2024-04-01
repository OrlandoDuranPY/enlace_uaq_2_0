@extends('web.layout')

@section('title')
    Registrar estudiante
@endsection

@section('content')
    <div class="flex-1 flex flex-col py-10 container mx-auto overflow-hidden gap-10">
        {{-- Formulario de registro --}}
        <h1 class="text-3xl uppercase text-enlace-red font-semibold mx-auto">Registrar estudiante</h1>
        <form class="px-5 lg:p-0.5">
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
                        <label for="email" class="block mb-1 text-xl font-semibold">Acerca de mi</label>
                        <textarea
                            class="w-full resize-none focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none bg-enlace-gray placeholder-enlace-dark-gray pl-5 pr-10 py-2"
                            placeholder="Ingrese una breve descripción del estudiante"
                            ></textarea>
                    </div>
                </div>

            </div>

        </form>
    </div>
@endsection
