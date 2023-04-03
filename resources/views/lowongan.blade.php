<x-app-layout>
    @section('title', 'Job Vacancy
    ')
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-20 leading-tight">
            Job Vacancy
        </div>
        <div class="font-medium text-base text-gray-800 dark:text-gray-200 leading-tight pt-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Odit ipsa consequatur, illum est cum, expedita
            repudiandae accusamus nesciunt inventore architecto sed
            amet magni facilis eius nulla doloribus rerum commodi
            quibusdam?
        </div>
    </x-slot>

    <section class="mt-6 py-4 lg:mt-11 dark:bg-gray-800 dark:text-gray-100 bg-white">
        <div class="container space-y-12 ">
            <div class="flex flex-col overflow-hidden shadow-lg lg:flex-row pt-7">
                <div class="h-80 flex items-center aspect-video justify-center bg-cover"
                    style="background-image: url('{{ asset('assets/image/uniqlo.jpeg') }}');">
                </div>
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                    <h3 class="text-3xl font-bold">
                        UNIQLO MANAGER CANDIDATE
                    </h3>
                    <div class="my-2 mt-7 dark:text-gray-400 text-green-500">
                        <span class="">
                            Open:
                        </span>
                        <span class="font-bold">
                            11 January 2023
                        </span>
                    </div>
                    <div class="my-2 mb-7 dark:text-gray-400 text-red-500">
                        <span class="">
                            Close:
                        </span>
                        <span class="font-bold">
                            31 January 2023
                        </span>
                    </div>
                    <div class="flex">
                        <div
                            class="inline-block mx-auto ml-0 mr-2 rounded-full bg-primary-100 px-4 pt-[6px] pb-[5px] text-xs font-medium uppercase text-primary-700 font-semibold mb-7">
                            manajemen
                        </div>
                        <div
                            class="pointer-events-none inline-block mx-auto ml-0 rounded-full bg-primary-100 px-4 pt-[6px] pb-[5px] text-xs font-medium uppercase text-primary-700 font-semibold mb-7">
                            Jakarta
                        </div>
                    </div>
                    <x-primary-button onclick="window.location='{{ route('loker') }}'"
                        class="self-start !w-36 rounded-md !bg-red-600">
                        Find Out More
                    </x-primary-button>
                </div>
            </div>
            <div class="flex flex-col overflow-hidden shadow-lg lg:flex-row-reverse">
                <img src="https://source.unsplash.com/640x480/?2" alt=""
                    class="h-80 dark:bg-gray-500 aspect-video" />
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                    <h3 class="text-3xl font-bold">
                        We're not reinventing the wheel
                    </h3>
                    <p class="my-6 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Dolor aliquam possimus quas,
                        error esse quos.
                    </p>
                    <x-primary-button class="self-start !w-36 rounded-md !bg-red-600">
                        Find Out More
                    </x-primary-button>
                </div>
            </div>
            <div class="flex flex-col overflow-hidden shadow-lg lg:flex-row">
                <img src="https://source.unsplash.com/640x480/?3" alt=""
                    class="h-80 dark:bg-gray-500 aspect-video" />
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                    <span class="text-xs uppercase dark:text-gray-400">
                        Join, it's free
                    </span>
                    <h3 class="text-3xl font-bold">
                        We're not reinventing the wheel
                    </h3>
                    <p class="my-6 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Dolor aliquam possimus quas,
                        error esse quos.
                    </p>
                    <x-primary-button class="self-start !w-36 rounded-md !bg-red-600">
                        Find Out More
                    </x-primary-button>
                </div>
            </div>
            <div class="flex flex-col overflow-hidden shadow-lg lg:flex-row-reverse">
                <img src="https://source.unsplash.com/640x480/?2" alt=""
                    class="h-80 dark:bg-gray-500 aspect-video" />
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                    <span class="text-xs uppercase dark:text-gray-400">
                        Join, it's free
                    </span>
                    <h3 class="text-3xl font-bold">
                        We're not reinventing the wheel
                    </h3>
                    <p class="my-6 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Dolor aliquam possimus quas,
                        error esse quos.
                    </p>
                    <x-primary-button class="self-start !w-36 rounded-md !bg-red-600">
                        Find Out More
                    </x-primary-button>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
