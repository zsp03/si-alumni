<x-app-layout>
    @section('title','Database')
    <x-slot name="header">
        <img src="{{ asset('assets/image/header-bg.png') }}" alt="alumni unhas" class="w-full h-64 sm:h-60">
        <div class="max-w-7xl mx-auto px-12 sm:px-10 lg:px-20 absolute inset-0 py-10 z-10">
            <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
                Database
            </div>
            <div class="font-normal text-xl text-white dark:text-gray-200 leading-tight pt-2">
                Saling terhubung dengan para alumni, kita memperluas jaringan dan membangun kolaborasi.
            </div>
        </div>
    </x-slot>

    <x-wireui.notifications position="top-center" />
    <div class="bg-white mt-6">
        <div class="p-4 max-w-5xl flex flex-col justify-center mx-auto">
            @livewire('alumni-table')
        </div>
    </div>

</x-app-layout>
