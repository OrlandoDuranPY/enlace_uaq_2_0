@extends('layouts.admin')

@section('title')
    Panel de Administrador | Inicio
@endsection

@section('content')
    <div class="w-5/6 p-10">
        @livewire('tables.activities-datatable')
    </div>
@endsection
