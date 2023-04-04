<x-app-layout>
    @section('title',
        'Job Vacancy
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
            <div class="main flex flex-col my-4 max-w-7xl justify-center mx-auto px-6">
                <div class="header">
                    <div class="text-3xl font-bold text-gray-600 mb-4">Lowongan Pekerjaan</div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <a href="https://www.w3schools.com/js/" target="_new">
                        <div
                            class="each w-full flex flex-col lg:flex-row hover:shadow-lg gap-2 select-none p-5 rounded-md border-gray-300 border hover:border-gray-500 cursor-pointer items-center">
                            <div class="flex d-flex justify-center items-center w-fit">
                                <img class="shadow-light-lg w-60 aspect-square"
                                    src="https://api.sdmdigital.id/dowload/get-file?path=logo/c57732ef-fb09-42ce-8bbe-63df45a13e86.png&amp;disk=dts-storage-partnership"
                                    alt="Metrodata Academy">
                            </div>
                            <div class="left flex flex-col w-full gap-1 overflow-hidden">
                                <div class="header text-blue-600 font-semibold text-xl">Metrodata Full Stack</div>
                                <p class="desc text-gray-600 line-clamp-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Aperiam distinctio debitis eligendi quas temporibus voluptas assumenda
                                    explicabo ad cum fugiat, nesciunt quis doloremque sit voluptatibus eius provident
                                    dolores voluptatum iure? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                                    est ducimus doloremque eum deleniti. Eos odit autem, repellendus distinctio quidem
                                    quaerat, quae eius iusto iure dolor vel nesciunt. Labore, porro.</p>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>31-10 November 2023 </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Jakarta Pusat </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Keuangan/Perbankan </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Freelancer </li>
                                    </div>

                                </div>
                            </div>
                            <div class="right m-auto mr-0">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.w3schools.com/js/" target="_new">
                        <div
                            class="each w-full flex flex-col lg:flex-row hover:shadow-lg gap-2 select-none p-5 rounded-md border-gray-300 border hover:border-gray-500 cursor-pointer items-center">
                            <div class="flex d-flex justify-center items-center w-fit">
                                <img class="shadow-light-lg w-60 aspect-square"
                                    src="https://api.sdmdigital.id/dowload/get-file?path=logo/c57732ef-fb09-42ce-8bbe-63df45a13e86.png&amp;disk=dts-storage-partnership"
                                    alt="Metrodata Academy">
                            </div>
                            <div class="left flex flex-col w-full gap-1 overflow-hidden">
                                <div class="header text-blue-600 font-semibold text-xl">Metrodata Full Stack</div>
                                <p class="desc text-gray-600 line-clamp-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Aperiam distinctio debitis eligendi quas temporibus voluptas assumenda
                                    explicabo ad cum fugiat, nesciunt quis doloremque sit voluptatibus eius provident
                                    dolores voluptatum iure? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                                    est ducimus doloremque eum deleniti. Eos odit autem, repellendus distinctio quidem
                                    quaerat, quae eius iusto iure dolor vel nesciunt. Labore, porro.</p>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>31-10 November 2023 </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Jakarta Pusat </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Keuangan/Perbankan </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Freelancer </li>
                                    </div>

                                </div>
                            </div>
                            <div class="right m-auto mr-0">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://www.w3schools.com/js/" target="_new">
                        <div
                            class="each w-full flex flex-col lg:flex-row hover:shadow-lg gap-2 select-none p-5 rounded-md border-gray-300 border hover:border-gray-500 cursor-pointer items-center">
                            <div class="flex d-flex justify-center items-center w-fit">
                                <img class="shadow-light-lg w-60 aspect-square"
                                    src="https://api.sdmdigital.id/dowload/get-file?path=logo/c57732ef-fb09-42ce-8bbe-63df45a13e86.png&amp;disk=dts-storage-partnership"
                                    alt="Metrodata Academy">
                            </div>
                            <div class="left flex flex-col w-full gap-1 overflow-hidden">
                                <div class="header text-blue-600 font-semibold text-xl">Metrodata Full Stack</div>
                                <p class="desc text-gray-600 line-clamp-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Aperiam distinctio debitis eligendi quas temporibus voluptas assumenda
                                    explicabo ad cum fugiat, nesciunt quis doloremque sit voluptatibus eius provident
                                    dolores voluptatum iure? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                                    est ducimus doloremque eum deleniti. Eos odit autem, repellendus distinctio quidem
                                    quaerat, quae eius iusto iure dolor vel nesciunt. Labore, porro.</p>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-1">
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>31-10 November 2023 </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Jakarta Pusat </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Keuangan/Perbankan </li>
                                    </div>
                                    <div class="flex text-secondary text-sm ">
                                        <i class="iconoir-calendar mr-2"></i>Freelancer </li>
                                    </div>

                                </div>
                            </div>
                            <div class="right m-auto mr-0">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </section>
    </x-app-layout>

    {{-- <div class="container space-y-12 ">
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
</div> --}}

    <!-- component -->

    {{-- <div class="row mb-9">
    <div class="col-xl-9 pt-lg-5">
        <div>
            <div class="col-lg mb-5">
                <div class="card rounded-md border p-3 shadow-md">
                    <div class="row gap-x-0 flex">
                        <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                        <div class="col-12 col-md-9 col-lg-9 col-xl-9 d-md-block">
                            <div class="card-body p-3">
                                <div class="mb-0">
                                    <span class="text-dark text-sm "> Lulusan Baru (fres) </span>
                                </div>
                                <div class="d-block mb-2 ">
                                    <h5 class="font-bold mb-3">Metrodata camp: fullstack developer - batch 1 </h5>
                                </div>
                                <ul class="nav mx-n3 d-block flex d-md-flex">
                                    <li class="nav-item px-2 mb-1">
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 d-flex text-secondary">
                                                <i class="iconoir-calendar mr-2"></i>
                                                <div class="text-sm">8-9 febriari 2020</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto flex d-lg-flex place-content-center">
                            <p class="rounded-lg text-sky-500 font-bold bg-sky-100  py-1 px-3 text-sm w-fit h-fit"> $ 5 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 pt-lg-5 px-4">
        <div class="card rounded-md border px-5 pt-6 mb-5"></div>
    </div>
</div> --}}
