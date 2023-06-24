<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') - Portal Alumni </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css">
    @livewireStyles
    <!-- Scripts -->
    @livewireScripts
    @wireUiScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-w-screen font-sans text-gray-900 antialiased">
    <section class="relative flex flex-wrap h-screen items-center">
    <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
        <div class="flex flex-col mx-auto max-w-lg text-center">
            <a class="self-center h-20 w-20 mb-2" href="{{ route('landing') }}"><x-application-logo class="self-center h-20 w-20 mb-2"></x-application-logo></a>
            <h1 class="text-2xl font-bold sm:text-3xl text-red-600">Portal Alumni</h1>

            <p class="mx-auto mt-2 mb-4 font-semibold w-[30ch] sm:w-full text-gray-500">
                Selamat datang di Portal Alumni Universitas Hasanuddin
            </p>
        </div>

        {{ $slot }}
    </div>
    <div class="hidden lg:block h-64 w-full lg:h-full lg:w-1/2">
        @livewire('register-page-banner')
    </div>
</section>
</body>
</html>
