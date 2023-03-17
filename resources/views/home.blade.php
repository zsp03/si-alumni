<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Selamat Datang, {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-14">
        <div class="max-w-20xl mx-auto sm:px-6 lg:px-8 flex justify-between md:justify-between gap-2.5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden">
                <div class="dark:bg-gray-800 dark:text-gray-50">
                    <div class="container grid grid-cols-12 mx-auto dark:bg-gray-900">
                        <div class="bg-no-repeat bg-cover dark:bg-gray-700 col-span-full lg:col-span-4"
                            style="
                        background-image:url('https://source.unsplash.com/random/640x480');
                        background-position:center center;
                        background-blend-mode:multiply;
                        background-size:cover;">
                        </div>
                        <div class="flex flex-col p-6 col-span-full row-span-full lg:col-span-8 lg:p-10">
                            <div class="flex justify-start">
                                <span class="px-2 py-1 text-xs rounded-full dark:bg-violet-400 dark:text-gray-900">
                                    Label
                                </span>
                            </div>
                            <h1 class="text-3xl font-semibold">
                                Lorem ipsum dolor sit.
                            </h1>
                            <p class="flex-1 pt-2">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iste, reprehenderit
                                adipisci tempore voluptas laborum quod.
                            </p>
                            <a rel="noopener noreferrer" href="#"
                                class="inline-flex items-center pt-2 pb-6 space-x-2 text-sm dark:text-violet-400">
                                <span>Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fillRule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <div class="flex space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5 dark:text-gray-400">
                                        <path fillRule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clipRule="evenodd" />
                                    </svg>
                                    <span class="self-center text-sm">
                                        by Leroy Jenkins
                                    </span>
                                </div>
                                <span class="text-xs">
                                    3 min read
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden">
                <div class="bg-white h-full shadow-md overflow-hidden md:max-w-md">
                    <div class="md:flex">
                        <div class="flex flex-col gap-2 p-4">
                            <div class="flex justify-center">
                                <div class="relative">
                                    <img src="https://source.unsplash.com/150x150/?portrait?3" class="rounded-full"
                                        width=80 />
                                </div>
                            </div>
                            <div class="flex flex-col text-center">
                                <span class="text-2xl font-medium">
                                    {{ Auth::user()->name }}
                                </span>
                                <span class="text-md text-gray-400">
                                    Teknik Informatika 1990
                                </span>
                            </div>
                            <p class="text-center text-md text-gray-800">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, labore illum. Similiq
                            </p>
                            <div class="px-20 mt-1">
                                <x-primary-button
                                    class="h-8 text-xs bg-navy w-full whitespace-nowrap text-white rounded hover:shadow hover:bg-blue-800">
                                    Ganti Profil
                                </x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
