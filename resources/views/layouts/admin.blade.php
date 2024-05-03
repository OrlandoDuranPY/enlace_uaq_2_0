<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <link rel="icon" href="{{ asset('img/logo-color.svg') }}" type="image/svg+xml">
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full h-screen flex bg-gray-50">
    {{-- Sidebar --}}
    <x-admin-sidebar />
    {{-- Main --}}
    @yield('content')
    @livewireScripts
</body>

</html>
