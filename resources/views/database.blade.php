<x-app-layout>
    @section('title','Database')
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-20 leading-tight">
            Database Alumni
        </div>
        <div class="font-medium text-base text-gray-800 dark:text-gray-200 leading-tight pt-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Odit ipsa consequatur, illum est cum, expedita
            repudiandae accusamus nesciunt inventore architecto sed
            amet magni facilis eius nulla doloribus rerum commodi
            quibusdam?
        </div>
    </x-slot>

    <div class="bg-white mt-6">
        <div class="p-4 max-w-5xl flex flex-col justify-center mx-auto">
            @livewire('alumni-table')
        </div>
    </div>

</x-app-layout>
