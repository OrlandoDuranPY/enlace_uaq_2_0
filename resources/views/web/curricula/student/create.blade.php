@extends('web.form-layout')

@section('title')
    Registrar estudiante
@endsection

@section('content')
    {{-- Formulario de registro --}}
    @livewire('curricula.student.create-curriculum')
@endsection
