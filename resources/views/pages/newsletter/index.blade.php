<x-app-layout>
    @section('title','Newsletter')
    <x-slot name="header">
        <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
            Newsletter
        </div>
        <div class="font-normal text-xl text-white dark:text-gray-200 leading-tight pt-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing
            elit.
        </div>
    </x-slot>

    <div class="bg-white mt-6">
        <div class="p-4 flex flex-col justify-center mx-auto">
            @livewire('show-newsletters')
        </div>
    </div>

</x-app-layout>
