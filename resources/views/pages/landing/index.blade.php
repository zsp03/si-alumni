<x-app-layout>
    @section('title', 'Database')
    <x-slot name="header">
    </x-slot>
    <section class=" ">
        {{-- carousel --}}
        <div class="mb-10 py-10 px-0 sm:px-7">
            <div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-carousel-slide>
                <!--Carousel indicators-->
                <div class="absolute inset-x-0 bottom-0 z-[2] mb-4 flex list-none justify-center p-0"
                    data-te-carousel-indicators>
                    <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="0"
                        data-te-carousel-active
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="1"
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 2"></button>
                    <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="2"
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-label="Slide 3"></button>
                </div>

                <!--Carousel items-->
                <div
                    class="relative w-full h-72 sm:h-96  overflow-hidden after:clear-both after:block after:content-[''] rounded-none sm:rounded-xl">
                    <!--First item-->
                    <div class=" relative float-left -mr-[100%] w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none bg-blue-50"
                        data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                        <img src="{{ asset('assets/image/B1.png') }}"
                            class="block w-auto h-auto  max-w-full max-h-full mx-auto object-contain object-center  rounded-md"
                            alt="Wild Landscape" />
                    </div>
                    <!--Second item-->
                    <div class="relative float-left -mr-[100%] hidden w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none bg-blue-50"
                        data-te-carousel-fade data-te-carousel-item>
                        <img src="{{ asset('assets/image/B2.png') }}"
                            class="block w-auto h-auto max-w-full max-h-full mx-auto object-contain object-center  rounded-md"
                            alt="Camera" />
                    </div>
                    <!--Third item-->
                    <div class="relative float-left -mr-[100%] hidden w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none bg-blue-50"
                        data-te-carousel-fade data-te-carousel-item>
                        <img src="{{ asset('assets/image/B3.png') }}"
                            class="block w-auto h-auto max-w-full max-h-full mx-auto object-contain object-center  rounded-md"
                            alt="Exotic Fruits" />
                    </div>
                </div>

                <!--Carousel controls - prev item-->
                <button
                    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="prev">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                </button>
                <!--Carousel controls - next item-->
                <button
                    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="next">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                </button>
            </div>
        </div>

        {{-- dana abadi --}}
        <a id="dana-abadi" class="block relative invisible top-[-100px]"></a>
        <div class="container mx-auto my-5">
            <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">
                <div
                    class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                    <div
                        class="absolute inset-0 w-full h-full object-fill object-center bg-opacity-30 bg-cover bg-bottom bg-[url('/public/assets/image/foto-unhas.jpg')]">
                    </div>
                    <div
                        class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                        <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Dana Abadi Untuk Unhas Maju
                        </h3>
                    </div>
                    <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12"
                        viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                </div>

                <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center md:mt-0">
                    <div class="p-8 md:pr-18 md:pl-14 md:pb-9 md:pt-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none ">
                        <h3 class="hidden md:block font-bold text-2xl text-gray-700">Dana Abadi Untuk Unhas Maju</h3>
                        <p class="text-gray-600 text-justify mt-2 lg:text-xl">Dana Abadi yang terkumpul ditampung pada
                            rekening bank Rektor Universitas Hasanuddin. Selanjutnya, dana tersebut tersebut dikelola
                            dan dikembangkan secara terus-menerus dalam berbagai instrumen investasi. </p>
                        <a class="flex items-baseline mt-3 text-blue-600 text-lg font-semibold hover:text-blue-900 focus:text-blue-900"
                            href="https://alumni.unhas.ac.id/dana-abadi">
                            <span>Donasi</span>
                            <span class="text-xs ml-1">&#x279c;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- news --}}
        <a id="news" class="block relative invisible top-[-70px]"></a>
        <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-14 ">
            <article>
                <div class="space-y-2 text-center">
                    <h2 class="text-3xl font-poppins font-bold decoration-blue-900">News and Events</h2>
                </div>
                @livewire('latest-posts')
                <a class="flex justify-end items-baseline mt-6 text-lg font-semibold text-blue-600 hover:text-blue-900 focus:text-blue-900"
                    href="{{ route('event') }}">
                    <span>Lihat Berita Selengkapnya</span>
                    <span class="text-xs ml-1">&#x279c;</span>
                </a>
            </article>
        </div>

        {{-- about us --}}
        <a id="about-us" class="block relative invisible top-[-20px]"></a>
        <div class="py-10 lg:py-20 bg-blue-50 font-poppins dark:bg-gray-800">
            <div class="max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
                <div class="flex flex-wrap ">
                    <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0 ">
                        <div class="lg:max-w-md">
                            <div class="px-4 pl-4 mb-6 border-l-4 border-blue-500">
                                <span class="text-sm text-gray-600 uppercase dark:text-gray-400">Apa yang Kami
                                    Berikan?</span>
                                <h1 class="mt-2 text-3xl font-black text-blue-500 md:text-5xl dark:text-gray-300">
                                    Tentang Kami
                                </h1>
                            </div>
                            <p class="px-4 mb-10 text-base leading-7 text-gray-500 dark:text-gray-400">
                                Portal Alumni ini didirikan sebagai wadah untuk menjaga hubungan antara alumni,
                                universitas,
                                dan mahasiswa saat ini. Tujuan kami adalah memfasilitasi interaksi dan kolaborasi antara
                                alumni, berbagi pengalaman, informasi karir, dan membangun jejaring yang bermanfaat.
                            </p>
                            <div>
                                <ul class="mb-10">
                                    <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                                        <span class="mr-3 text-blue-500 dark:text-blue-400 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-6 h-6 bi bi-check-lg"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                            </svg>
                                        </span>
                                        Profil Alumni
                                    </li>
                                    <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                                        <span class="mr-3 text-blue-500 dark:text-blue-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-6 h-6 bi bi-check-lg"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                            </svg>
                                        </span>
                                        Pencarian Alumni
                                    </li>
                                    <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                                        <span class="mr-3 text-blue-500 dark:text-blue-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-6 h-6 bi bi-check-lg"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                            </svg>
                                        </span>
                                        Berita Acara dan Lowongan Pekerjaan
                                    </li>
                                    <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                                        <span class="mr-3 text-blue-500 dark:text-blue-400 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-6 h-6 bi bi-check-lg"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                            </svg>
                                        </span>
                                        Diskusi dan Forum
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 mb-10 lg:w-1/2 lg:mb-0">
                        <img src="{{ asset('assets/image/gedung.jpg') }}" alt=""
                            class="relative z-40 object-cover w-full h-full rounded-lg shadow-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
