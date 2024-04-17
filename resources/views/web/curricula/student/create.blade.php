@extends('web.form-layout')

@section('title')
    Registrar estudiante
@endsection

@section('content')
    {{-- Formulario de registro --}}
    <h1 class="text-3xl uppercase text-enlace-red font-semibold mx-auto">Registrar estudiante</h1>
    @livewire('curricula.student.create-curriculum')
@endsection
