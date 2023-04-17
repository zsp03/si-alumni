<x-app-layout>
    @section('title', 'Home')
    <x-slot name="header">
        <img src="/assets/image/wave-4.png" alt="" class="w-full !h-2/3 sm:h-60">
        <div class="max-w-7xl mx-auto px-12 sm:px-10 lg:px-20 absolute inset-0 py-10 z-10">
            <div class="font-semibold text-4xl text-white dark:text-gray-20 leading-tight">
                Halo, {{ Auth::user()->name }}
            </div>
            <div class="font-normal text-2xl text-white dark:text-gray-200 leading-tight pt-2">
                Selamat Datang di Portal Alumni Universitas Hasanuddin!
            </div>

        </div>
    </x-slot>

    <section class="flex flex-col w-full pt-16  sm:flex-row shadow-md">
        <div class="relative flex-1 px-6 pt-6 bg-gray-100 sm:p-0">
            <img class="object-cover object-center w-full h-full pb-px rounded-lg sm:rounded-none"
                src={{ asset('assets/image/foto-unhas.jpg') }} alt="">
            <div
                class="absolute inset-y-0 right-0 hidden w-16 h-full transform translate-x-1/2 skew-x-6 bg-gray-100 sm:block">
            </div>
        </div>
        <div class="flex-1 bg-gray-100">
            <div class="flex flex-col justify-center h-full max-w-xl p-6 sm:p-8 sm:pl-16 md:p-20">
                <h2 class="text-3xl text-gray-800">
                    <span class="flex justify-start mt-2">
                        <span class="inline-block overflow-hidden text-primary-600">
                            Enjoy
                        </span>
                    </span>
                </h2>
                <p class="mt-6 text-lg text-gray-600">
                    We picked our office location to maximize our team's enjoyment! SF's best restaurants
                    are within walking distance, as well are some of the finest coffee shops in the world.
                    Come visit us and you'll agree.
                </p>
            </div>
        </div>
    </section>
</x-app-layout>
