<x-app-layout>
    @section('title', 'Event')
    <x-slot name="header">
        <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
            Event
        </div>
        <div class="font-normal text-xl text-white dark:text-gray-200 leading-tight pt-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Odit ipsa consequatur, illum est cum, expedita
            repudiandae accusamus nesciunt inventore architecto sed
            amet magni facilis eius nulla doloribus rerum commodi
            quibusdam?
        </div>
    </x-slot>

    <section class="mt-7 dark:bg-gray-800 dark:text-gray-100">
       @livewire('index-post')
    </section>

</x-app-layout>
