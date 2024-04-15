<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
        <link rel="icon" href="{{ asset('img/logo-color.svg') }}" type="image/svg+xml">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="w-full h-screen flex flex-col bg-gray-50">
        <x-navbar />
        <div class="flex-1 flex flex-col lg:py-20 container mx-auto overflow-hidden mt-16 lg:mt-0">
            @yield('content')
        </div>
    </body>
</html>
