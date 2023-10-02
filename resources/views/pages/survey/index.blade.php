<x-app-layout>
    @section('title','Survey')
    <x-slot name="header">
        <img src="/assets/image/header-bg.png" alt="alumni unhas" class="w-full h-64 sm:h-60">
        <div class="max-w-7xl mx-auto px-12 sm:px-10 lg:px-20 absolute inset-0 py-10 z-10">
            <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
                Survey Penjaringan Alumni
            </div>
            <div class="font-normal text-xl text-white dark:text-gray-200 leading-tight pt-2">
                Survey ini ditujukan untuk para alumni unhas yang lulus pada tahun 2010 dan tahun-tahun sebelumnya
            </div>
        </div>
    </x-slot>

    <div class="md:mx-auto my-5 max-w-7xl">
        @livewire('penjaringan-alumni')
    </div>
</x-app-layout>