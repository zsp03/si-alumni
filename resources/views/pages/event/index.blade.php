<x-app-layout>
    @section('title', 'News & Event')
    <x-slot name="header">
        <img src="/assets/image/header-bg.png" alt="alumni unhas" class="w-full h80 sm:h-60">
        <div class="max-w-7xl mx-auto px-12 sm:px-10 lg:px-20 absolute inset-0 py-10 z-10">
            <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
                News & Events
            </div>
            <div class="font-normal text-xl text-white dark:text-gray-200 leading-tight pt-2">
                Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Odit ipsa consequatur, illum est cum, expedita
                repudiandae accusamus nesciunt inventore architecto sed
                amet magni facilis eius nulla doloribus rerum commodi
                quibusdam?
            </div>
        </div>
    </x-slot>

    <section class="mt-7 dark:bg-gray-800 dark:text-gray-100">
        @livewire('index-post')
    </section>

</x-app-layout>
