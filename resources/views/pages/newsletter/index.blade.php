<x-app-layout>
    @section('title','Newsletter')
    <x-slot name="header">
        <img src="/assets/image/header-bg.png" alt="alumni unhas" class="w-full h-64 sm:h-60">
        <div class="max-w-7xl mx-auto px-12 sm:px-10 lg:px-20 absolute inset-0 py-10 z-10">
            <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
                Newsletter
            </div>
            <div class="font-normal text-xl text-white dark:text-gray-200 leading-tight pt-2">
                Jelajahi E-Bulletin dan temukan kisah-kisah menarik dari para alumni inspiratif yang memperkaya perjalanan hidupmu.
            </div>
        </div>
    </x-slot>

    <div class="bg-white mt-6">
        <div class="flex flex-col justify-center mx-auto">
            @livewire('show-newsletters')
        </div>
    </div>

</x-app-layout>
