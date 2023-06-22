<x-app-layout>
    @section('title', 'Job Vacancy')
    <x-slot name="header">
        <img src="/assets/image/header-bg.png" alt="alumni unhas" class="w-full h80 sm:h-60">
        <div class="max-w-7xl mx-auto px-12 sm:px-10 lg:px-20 absolute inset-0 py-10 z-10">
            <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
                Job Vacancy
            </div>
            <div class="font-normal text-xl text-white dark:text-gray-200 leading-tight pt-2">
                <p>Temukan info terkini tentang lowongan pekerjaan di portal alumni.</p>
                <div class="mt-4 flex flex-col sm:flex-row gap-2 sm:items-center">
                    <p>Jelajahi peluang kerja lainnya di</p>
                    <a href="https://cdc.unhas.ac.id/lowongan" target="_blank" class="btn btn-sm w-fit">CDC UNHAS</a>
                </div>

            </div>
        </div>
    </x-slot>

    <section class="py-4 bg-white">
        <div class="main flex flex-col max-w-7xl justify-center mx-auto px-6">
            @livewire('index-jobs')
        </div>
    </section>
</x-app-layout>
