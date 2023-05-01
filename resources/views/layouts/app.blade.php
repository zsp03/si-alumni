<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') - Portal Alumni</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css">
    @livewireStyles

    <!-- Scripts -->
    @wireUiScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScripts
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-white">
    @include('layouts.navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="relative">
            {{$header}}
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    @include('components.footer')
</div>
</body>
</html>
