<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-20 leading-tight">
            Halo {{ Auth::user()->name }}! SELAMAT DATANG DI PORTAL ALUMNI
            UNIVERSITAS HASANUDDIN
        </div>
        <div class="font-medium text-base text-gray-800 dark:text-gray-200 leading-tight pt-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Odit ipsa consequatur, illum est cum, expedita
            repudiandae accusamus nesciunt inventore architecto sed
            amet magni facilis eius nulla doloribus rerum commodi
            quibusdam?
        </div>
    </x-slot>

    <div class="py-14">
        <div class="max-w-20xl mx-auto sm:px-6 lg:px-8 flex justify-between md:justify-between gap-2.5">
            <div class="bg-white dark:bg-gray-800 overflow-hidde rounded-md">
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

            <div class='w-full max-w-lg py-8 flex flex-row items-center justify-center mx-auto bg-[#FFFFFF] rounded-md'>
                <div class="flex flex-col md:flex-row w-3/4 md:w-5/6 space-x-0 md:space-x-8">
                    <div class="w-full md:w-2/5 flex flex-col items-center justify-center">
                        <figure class="w-1/2 md:w-full  rounded-full overflow-hidden">
                            <img src="https://images.pexels.com/photos/1820559/pexels-photo-1820559.jpeg?auto=compress&cs=tinysrgb&w=600" alt="woman wearing a headwrap and an Africa-shaped earring while smiling"
                        </figure>
                    </div>
                    <div class="w-full md:w-3/5 space-y-4 flex flex-col justify-center items-center">
                        <div class="flex flex-col justify-center">
                            <h1 class="text-center md:text-left text-2xl font-bold text-gray-900">{{ Auth::user()->name }}</h1>
                            <p class="inline text-gray-700 font-normal leading-6 w-full text-base">UX Researcher, Co-host of the Interesting Design podcast
                                and a proud mother of three children</p>
                        </div>
                        <ul class="space-y-4 md:space-y-0 space-x-0 md:space-x-4 flex flex-col md:flex-row text-left justify-center">
                            <li class="flex items-center text-sm"><i class="iconoir-calendar mr-2"></i>Teknik Informatika 1990 </li>
                        </ul>


                        <x-primary-button class="transition-colors !bg-red-600 p-2 rounded-sm w-full text-white text-hover shadow-md">
                            Perbarui Profil
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
