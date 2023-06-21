<x-app-layout>
    @section('title', 'Database')
    <x-slot name="header">
    </x-slot>
    <section class="py-10 px-0 sm:px-7 ">
        <div class="mb-10">
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
                        <img src={{ asset('assets/image/web_Ucapan-Wisuda-Februari-2024-1140x400.png') }}
                            class="block w-auto h-auto  max-w-full max-h-full mx-auto object-contain object-center  rounded-md" alt="Wild Landscape" />
                    </div>
                    <!--Second item-->
                    <div class="relative float-left -mr-[100%] hidden w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none bg-blue-50"
                        data-te-carousel-fade data-te-carousel-item>
                        <img src={{ asset('assets/image/BANNER1.png') }} class="block w-auto h-auto max-w-full max-h-full mx-auto object-contain object-center  rounded-md" alt="Camera" />
                    </div>
                    <!--Third item-->
                    <div class="relative float-left -mr-[100%] hidden w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none bg-blue-50"
                        data-te-carousel-fade data-te-carousel-item>
                        <img src={{ asset('assets/image/BANNER2.png') }} class="block w-auto h-auto max-w-full max-h-full mx-auto object-contain object-center  rounded-md" alt="Exotic Fruits" />
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

        <div class="container mx-auto my-5">
            <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">
                <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                    <div class="absolute inset-0 w-full h-full object-fill object-center bg-opacity-30 bg-cover bg-bottom bg-[url('/public/assets/image/foto-unhas.jpg')]"></div>
                    <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                        <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">Dana Abadi Untuk Unhas Maju</h3>
                    </div>
                    <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                </div>
        
                <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
                    <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                        <h3 class="hidden md:block font-bold text-2xl text-gray-700">Dana Abadi Untuk Unhas Maju</h3>
                        <p class="text-gray-600 text-justify">Dana Abadi UNHAS merupakan dana investasi yang diperoleh dari donasi para alumni dan simpatisan
                            Universitas Hasanuddin. Dana abadi bersifat simpanan yang akan dikembangkan dan hasilnya akan
                            dimanfaatkan untuk meringankan beban biaya pendidikan yang harus dibayarkan mahasiswa dalam
                            menempuh studinya, serta akan dimanfaatkan oleh dosen dan mahasiswa dalam mengembangkan riset,
                            dan melakukan pengabdian kepada masyarakat.</p>
                        <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900" href="https://alumni.unhas.ac.id/dana-abadi">
                            <span>Donasi</span>
                            <span class="text-xs ml-1">&#x279c;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12 ">
            <article class="">
                <div class="space-y-2 text-center">
                    <h2 class="text-3xl font-poppins font-bold underline decoration-blue-900">NEWS</h2>
                </div>
                <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8 justify-center">
                    <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <div class="px-3 py-4">
                            <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </article>
                    <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="https://cdn.pixabay.com/photo/2021/07/24/01/42/zebra-dove-6488440_960_720.jpg"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <div class="px-3 py-4">
                            <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </article>
                    <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="https://cdn.pixabay.com/photo/2021/08/03/11/01/stairs-6519085_960_720.jpg"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <div class="px-3 py-4">
                            <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </article>
                    <article class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
                        <div class="relative w-full h-80 md:h-64 lg:h-44">
                            <img src="https://cdn.pixabay.com/photo/2021/09/12/17/43/parrot-feathers-6619082_960_720.jpg"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="w-full h-full object-center object-cover">
                        </div>
                        <div class="px-3 py-4">
                            <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </article>
                </div>
                <a class="flex justify-end items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900" href="https://alumni.unhas.ac.id/dana-abadi">
                    <span>Liat Berita Selengkapnya</span>
                    <span class="text-xs ml-1">&#x279c;</span>
                </a>
            </article>
        </div>
        
      <div class="flex items-center bg-stone-100 lg:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl py-4 mx-auto lg:py-6 md:px-6">
            <div class="px-4 mb-10 md:text-center md:mb-20">
                <p class="mb-2 text-lg font-semibold text-blue-500 dark:text-gray-400">
                    Tentang Kami
                </p>
                <h2 class="pb-2 text-2xl font-bold text-gray-800 md:text-4xl dark:text-gray-300">
                    Apa yang Kami Berikan
                </h2>
                <div class="flex w-32 mt-1 mb-6 overflow-hidden rounded md:mx-auto md:mb-14">
                    <div class="flex-1 h-2 bg-blue-200">
                    </div>
                    <div class="flex-1 h-2 bg-prusblue">
                    </div>
                    <div class="flex-1 h-2 bg-blue-300">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center">
                <div class="w-full px-4 mb-10 md:w-1/2 lg:mb-0 ">
                    <h2 class="mb-4 text-2xl font-bold text-gray-700 dark:text-gray-300">
                        Kami menyediakan fasilitas yang lebih baik
                    </h2>
                    <p class="mb-4 text-base leading-7 text-gray-500 dark:text-gray-400">
                        Portal Alumni ini didirikan sebagai wadah untuk menjaga hubungan antara alumni, universitas, dan mahasiswa saat ini. Tujuan kami adalah memfasilitasi interaksi dan kolaborasi antara alumni, berbagi pengalaman, informasi karir, dan membangun jejaring yang bermanfaat.
                    </p>
                    <ul class="mb-10">
                        <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                            <span class="mr-3 text-blue-500 dark:text-blue-400 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-5 h-5 bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </span>
                            Profil Alumni
                        </li>
                        <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                            <span class="mr-3 text-blue-500 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-5 h-5 bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </span>
                            Pencarian Alumni
                        </li>
                        <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                            <span class="mr-3 text-blue-500 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-5 h-5 bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </span>
                            Berita Acara dan Lowongan Pekerjaan
                        </li>
                        <li class="flex items-center mb-4 text-base text-gray-600 dark:text-gray-400">
                            <span class="mr-3 text-blue-500 dark:text-blue-400 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-5 h-5 bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                </svg>
                            </span>
                            Diskusi dan Forum
                        </li>
                    </ul>
                </div>
                <div class="relative w-full px-4 mb-10 md:w-1/2 lg:mb-0">
                    <img src="https://i.postimg.cc/HsSPvTq8/pexels-fauxels-3184357.jpg" alt=""
                        class="relative z-40 object-cover w-full rounded-md md:h-96 h-44">
                    <div class="absolute top-0 right-0 items-center justify-center hidden -mt-16 lg:inline-flex">
                        <svg width="290" height="166" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="290"
                                height="166">
                                <path fill="url(#paint0_linear_228_431)" d="M0 0H290V165.838H0z" />
                            </mask>
                            <g mask="url(#a)" fill-rule="evenodd" clip-rule="evenodd">
                                <path
                                    d="M-.146 77.865c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zm21.236-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm16.185 2.468c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zm21.236-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm72.314 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.395 0-2.525-1.105-2.525-2.469zm-18.709 0c0-1.363 1.13-2.468 2.524-2.468 1.395 0 2.525 1.105 2.525 2.468 0 1.364-1.13 2.469-2.525 2.469-1.394 0-2.524-1.105-2.524-2.469zm-16.187-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.525-1.105-2.525-2.469zm58.655-16.824c-1.395 0-2.525 1.105-2.525 2.468 0 1.364 1.13 2.469 2.525 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.524-2.468 1.395 0 2.525 1.105 2.525 2.468 0 1.364-1.13 2.469-2.525 2.469-1.394 0-2.524-1.105-2.524-2.469zm-16.187-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.525-1.105-2.525-2.469zm-16.184-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.236 2.468c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zM21.09 61.041c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zM-.146 63.509c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zM133.35 46.684c-1.395 0-2.525 1.106-2.525 2.469 0 1.363 1.13 2.469 2.525 2.469 1.394 0 2.524-1.106 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.469c0-1.363 1.13-2.468 2.524-2.468 1.395 0 2.525 1.105 2.525 2.468s-1.13 2.469-2.525 2.469c-1.394 0-2.524-1.106-2.524-2.469zm-16.187-2.468c-1.394 0-2.524 1.105-2.524 2.468s1.13 2.469 2.524 2.469c1.394 0 2.524-1.106 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468s-1.13 2.469-2.524 2.469c-1.394 0-2.525-1.106-2.525-2.469zm-16.184-2.468c-1.394 0-2.524 1.105-2.524 2.468s1.13 2.469 2.524 2.469c1.394 0 2.524-1.106 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.236 2.468c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468s-1.13 2.469-2.524 2.469c-1.394 0-2.524-1.106-2.524-2.469zM21.09 46.685c-1.394 0-2.524 1.105-2.524 2.468s1.13 2.469 2.524 2.469c1.394 0 2.524-1.106 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zM-.146 49.153c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468s-1.13 2.469-2.524 2.469c-1.394 0-2.524-1.106-2.524-2.469zM133.35 32.328c-1.395 0-2.525 1.105-2.525 2.469 0 1.363 1.13 2.468 2.525 2.468 1.394 0 2.524-1.105 2.524-2.468s-1.13-2.469-2.524-2.469zm-21.234 2.469c0-1.363 1.13-2.469 2.524-2.469 1.395 0 2.525 1.105 2.525 2.469 0 1.363-1.13 2.468-2.525 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.187-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468s-1.13-2.469-2.525-2.469zm-21.234 2.469c0-1.363 1.13-2.469 2.525-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.525-1.105-2.525-2.468zm-16.184-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468s-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.363 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zM21.09 32.328c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468s-1.13-2.469-2.524-2.469zM-.146 34.797c0-1.363 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zM133.35 17.972c-1.395 0-2.525 1.105-2.525 2.469 0 1.363 1.13 2.468 2.525 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.524-2.469 1.395 0 2.525 1.105 2.525 2.469 0 1.363-1.13 2.468-2.525 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.187-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468 0-1.364-1.13-2.469-2.525-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.525-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.525-1.105-2.525-2.468zm-16.184-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zM21.09 17.972c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zM-.146 20.441c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zM133.35 3.619c-1.395 0-2.525 1.105-2.525 2.468 0 1.364 1.13 2.469 2.525 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.524-2.468 1.395 0 2.525 1.105 2.525 2.468 0 1.364-1.13 2.469-2.525 2.469-1.394 0-2.524-1.105-2.524-2.469zM95.929 3.62c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469 0-1.363-1.13-2.468-2.525-2.468zM74.695 6.087c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.525-1.105-2.525-2.469zM58.511 3.62c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zM37.275 6.087c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zM21.09 3.62c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zM-.146 6.087c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469z"
                                    fill="url(#paint1_linear_228_431)" />
                                <path
                                    d="M-.146 163.37c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zm21.236-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm16.185 2.468c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zm21.236-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm72.314 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.395 0-2.525-1.105-2.525-2.469zm-18.709 0c0-1.363 1.13-2.468 2.524-2.468 1.395 0 2.525 1.105 2.525 2.468 0 1.364-1.13 2.469-2.525 2.469-1.394 0-2.524-1.105-2.524-2.469zm-16.187-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.525-1.105-2.525-2.469zm58.655-16.824c-1.395 0-2.525 1.105-2.525 2.468s1.13 2.469 2.525 2.469c1.394 0 2.524-1.106 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.524-2.468 1.395 0 2.525 1.105 2.525 2.468s-1.13 2.469-2.525 2.469c-1.394 0-2.524-1.106-2.524-2.469zm-16.187-2.468c-1.394 0-2.524 1.105-2.524 2.468s1.13 2.469 2.524 2.469c1.394 0 2.524-1.106 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.525-1.105-2.525-2.469zm-16.184-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.236 2.468c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zm-16.185-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.236 2.468c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zm133.496-16.825c-1.395 0-2.525 1.105-2.525 2.469 0 1.363 1.13 2.468 2.525 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.524-2.469 1.395 0 2.525 1.105 2.525 2.469 0 1.363-1.13 2.468-2.525 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.187-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.525-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.525-1.105-2.525-2.468zm-16.184-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.185-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zm133.496-16.825c-1.395 0-2.525 1.105-2.525 2.469 0 1.363 1.13 2.468 2.525 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.524-2.469 1.395 0 2.525 1.105 2.525 2.469 0 1.363-1.13 2.468-2.525 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.187-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468 0-1.364-1.13-2.469-2.525-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.525-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.525-1.105-2.525-2.468zm-16.184-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.185-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zm133.496-16.825c-1.395 0-2.525 1.105-2.525 2.469 0 1.363 1.13 2.468 2.525 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.524-2.469 1.395 0 2.525 1.105 2.525 2.469 0 1.363-1.13 2.468-2.525 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.187-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468 0-1.364-1.13-2.469-2.525-2.469zm-21.234 2.469c0-1.364 1.13-2.469 2.525-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.525-1.105-2.525-2.468zm-16.184-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zm-16.185-2.469c-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.524-1.105 2.524-2.468 0-1.364-1.13-2.469-2.524-2.469zm-21.236 2.469c0-1.364 1.13-2.469 2.524-2.469 1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468zM133.35 89.124c-1.395 0-2.525 1.105-2.525 2.468 0 1.364 1.13 2.469 2.525 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.524-2.468 1.395 0 2.525 1.105 2.525 2.468 0 1.364-1.13 2.469-2.525 2.469-1.394 0-2.524-1.105-2.524-2.469zm-16.187-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469 0-1.363-1.13-2.468-2.525-2.468zm-21.234 2.468c0-1.363 1.13-2.468 2.525-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.525-1.105-2.525-2.469zm-16.184-2.468c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zm-21.236 2.468c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469zM21.09 89.124c-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.524-1.105 2.524-2.469 0-1.363-1.13-2.468-2.524-2.468zM-.146 91.592c0-1.363 1.13-2.468 2.524-2.468 1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469z"
                                    fill="url(#paint2_linear_228_431)" />
                                <path
                                    d="M284.472 77.866c0-1.363-1.131-2.469-2.525-2.469s-2.524 1.106-2.524 2.469c0 1.363 1.13 2.469 2.524 2.469 1.394 0 2.525-1.106 2.525-2.47zm-21.237-2.469c1.394 0 2.524 1.106 2.524 2.469 0 1.363-1.13 2.469-2.524 2.469-1.394 0-2.524-1.106-2.524-2.47 0-1.362 1.13-2.468 2.524-2.468zm-16.184 2.469c0-1.363-1.131-2.469-2.525-2.469s-2.524 1.106-2.524 2.469c0 1.363 1.13 2.469 2.524 2.469 1.394 0 2.525-1.106 2.525-2.47zm-21.237-2.469c1.394 0 2.525 1.106 2.525 2.469 0 1.363-1.131 2.469-2.525 2.469s-2.524-1.106-2.524-2.47c0-1.362 1.13-2.468 2.524-2.468zM153.5 77.866c0-1.363-1.13-2.469-2.524-2.469-1.395 0-2.525 1.106-2.525 2.469 0 1.363 1.13 2.469 2.525 2.469 1.394 0 2.524-1.106 2.524-2.47zm18.709 0c0-1.363-1.13-2.469-2.524-2.469-1.394 0-2.525 1.106-2.525 2.469 0 1.363 1.131 2.469 2.525 2.469s2.524-1.106 2.524-2.47zm16.187-2.469c1.394 0 2.525 1.106 2.525 2.469 0 1.363-1.131 2.469-2.525 2.469s-2.524-1.106-2.524-2.47c0-1.362 1.13-2.468 2.524-2.468zm21.234 2.469c0-1.363-1.13-2.469-2.525-2.469-1.394 0-2.524 1.106-2.524 2.469 0 1.363 1.13 2.469 2.524 2.469 1.395 0 2.525-1.106 2.525-2.47zM150.976 61.04c1.394 0 2.524 1.106 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.395 0-2.525-1.105-2.525-2.468s1.13-2.469 2.525-2.469zm21.233 2.469c0-1.363-1.13-2.469-2.524-2.469-1.394 0-2.525 1.106-2.525 2.469 0 1.363 1.131 2.468 2.525 2.468s2.524-1.105 2.524-2.468zm16.187-2.469c1.394 0 2.525 1.106 2.525 2.469 0 1.363-1.131 2.468-2.525 2.468s-2.524-1.105-2.524-2.468 1.13-2.469 2.524-2.469zm21.234 2.469c0-1.363-1.13-2.469-2.525-2.469-1.394 0-2.524 1.106-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.395 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.525 1.106 2.525 2.469 0 1.363-1.131 2.468-2.525 2.468s-2.524-1.105-2.524-2.468 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.363-1.131-2.469-2.525-2.469s-2.524 1.106-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.524 1.106 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468s1.13-2.469 2.524-2.469zm21.237 2.469c0-1.363-1.131-2.469-2.525-2.469s-2.524 1.106-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zM150.976 46.685c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.47-2.524 2.47-1.395 0-2.525-1.106-2.525-2.47 0-1.363 1.13-2.468 2.525-2.468zm21.233 2.468c0-1.363-1.13-2.468-2.524-2.468-1.394 0-2.525 1.105-2.525 2.468 0 1.364 1.131 2.47 2.525 2.47s2.524-1.106 2.524-2.47zm16.187-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.47-2.525 2.47s-2.524-1.106-2.524-2.47c0-1.363 1.13-2.468 2.524-2.468zm21.234 2.468c0-1.363-1.13-2.468-2.525-2.468-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.47 2.524 2.47 1.395 0 2.525-1.106 2.525-2.47zm16.184-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.47-2.525 2.47s-2.524-1.106-2.524-2.47c0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.47 2.524 2.47 1.394 0 2.525-1.106 2.525-2.47zm16.184-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.47-2.524 2.47-1.394 0-2.524-1.106-2.524-2.47 0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.47 2.524 2.47 1.394 0 2.525-1.106 2.525-2.47zM150.976 32.33c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.395 0-2.525-1.105-2.525-2.469 0-1.363 1.13-2.468 2.525-2.468zm21.233 2.468c0-1.363-1.13-2.468-2.524-2.468-1.394 0-2.525 1.105-2.525 2.468 0 1.364 1.131 2.469 2.525 2.469s2.524-1.105 2.524-2.469zm16.187-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm21.234 2.468c0-1.363-1.13-2.468-2.525-2.468-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.395 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.469-2.525 2.469s-2.524-1.105-2.524-2.469c0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zM150.976 17.973c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.395 0-2.525-1.105-2.525-2.469 0-1.363 1.13-2.468 2.525-2.468zm21.233 2.468c0-1.363-1.13-2.468-2.524-2.468-1.394 0-2.525 1.105-2.525 2.468 0 1.364 1.131 2.469 2.525 2.469s2.524-1.105 2.524-2.469zm16.187-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm21.234 2.468c0-1.363-1.13-2.468-2.525-2.468-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.395 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.469-2.525 2.469s-2.524-1.105-2.524-2.469c0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zM150.976 3.62c1.394 0 2.524 1.106 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.395 0-2.525-1.105-2.525-2.468s1.13-2.469 2.525-2.469zm21.233 2.469c0-1.363-1.13-2.469-2.524-2.469-1.394 0-2.525 1.106-2.525 2.469 0 1.363 1.131 2.468 2.525 2.468s2.524-1.105 2.524-2.468zm16.187-2.469c1.394 0 2.524 1.106 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468s1.13-2.469 2.524-2.469zm21.234 2.469c0-1.363-1.13-2.469-2.525-2.469-1.394 0-2.524 1.106-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.395 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.525 1.106 2.525 2.469 0 1.363-1.131 2.468-2.525 2.468s-2.524-1.105-2.524-2.468 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.363-1.131-2.469-2.525-2.469s-2.524 1.106-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.524 1.106 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468s1.13-2.469 2.524-2.469zm21.237 2.469c0-1.363-1.131-2.469-2.525-2.469s-2.524 1.106-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468z"
                                    fill="url(#paint3_linear_228_431)" />
                                <path
                                    d="M284.472 163.37c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zm-21.237-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm-16.184 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zm-21.237-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.469-2.525 2.469s-2.524-1.105-2.524-2.469c0-1.363 1.13-2.468 2.524-2.468zM153.5 163.37c0-1.363-1.13-2.468-2.524-2.468-1.395 0-2.525 1.105-2.525 2.468 0 1.364 1.13 2.469 2.525 2.469 1.394 0 2.524-1.105 2.524-2.469zm18.709 0c0-1.363-1.13-2.468-2.524-2.468-1.394 0-2.525 1.105-2.525 2.468 0 1.364 1.131 2.469 2.525 2.469s2.524-1.105 2.524-2.469zm16.187-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.469-2.525 2.469s-2.524-1.105-2.524-2.469c0-1.363 1.13-2.468 2.524-2.468zm21.234 2.468c0-1.363-1.13-2.468-2.525-2.468-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.395 0 2.525-1.105 2.525-2.469zm-58.654-16.824c1.394 0 2.524 1.105 2.524 2.468s-1.13 2.469-2.524 2.469c-1.395 0-2.525-1.106-2.525-2.469 0-1.363 1.13-2.468 2.525-2.468zm21.233 2.468c0-1.363-1.13-2.468-2.524-2.468-1.394 0-2.525 1.105-2.525 2.468s1.131 2.469 2.525 2.469 2.524-1.106 2.524-2.469zm16.187-2.468c1.394 0 2.525 1.105 2.525 2.468s-1.131 2.469-2.525 2.469-2.524-1.106-2.524-2.469c0-1.363 1.13-2.468 2.524-2.468zm21.234 2.468c0-1.363-1.13-2.468-2.525-2.468-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.395 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.469-2.525 2.469s-2.524-1.105-2.524-2.469c0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zm-133.496-16.825c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.395 0-2.525-1.105-2.525-2.468 0-1.364 1.13-2.469 2.525-2.469zm21.233 2.469c0-1.364-1.13-2.469-2.524-2.469-1.394 0-2.525 1.105-2.525 2.469 0 1.363 1.131 2.468 2.525 2.468s2.524-1.105 2.524-2.468zm16.187-2.469c1.394 0 2.525 1.105 2.525 2.469 0 1.363-1.131 2.468-2.525 2.468s-2.524-1.105-2.524-2.468c0-1.364 1.13-2.469 2.524-2.469zm21.234 2.469c0-1.364-1.13-2.469-2.525-2.469-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.395 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.525 1.105 2.525 2.469 0 1.363-1.131 2.468-2.525 2.468s-2.524-1.105-2.524-2.468c0-1.364 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.364-1.131-2.469-2.525-2.469s-2.524 1.105-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468 0-1.364 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.364-1.131-2.469-2.525-2.469s-2.524 1.105-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zm-133.496-16.825c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.395 0-2.525-1.105-2.525-2.468 0-1.364 1.13-2.469 2.525-2.469zm21.233 2.469c0-1.364-1.13-2.469-2.524-2.469-1.394 0-2.525 1.105-2.525 2.469 0 1.363 1.131 2.468 2.525 2.468s2.524-1.105 2.524-2.468zm16.187-2.469c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468 0-1.364 1.13-2.469 2.524-2.469zm21.234 2.469c0-1.364-1.13-2.469-2.525-2.469-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.395 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.525 1.105 2.525 2.469 0 1.363-1.131 2.468-2.525 2.468s-2.524-1.105-2.524-2.468c0-1.364 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.364-1.131-2.469-2.525-2.469s-2.524 1.105-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468 0-1.364 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.364-1.131-2.469-2.525-2.469s-2.524 1.105-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zm-133.496-16.825c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.395 0-2.525-1.105-2.525-2.468 0-1.364 1.13-2.469 2.525-2.469zm21.233 2.469c0-1.364-1.13-2.469-2.524-2.469-1.394 0-2.525 1.105-2.525 2.469 0 1.363 1.131 2.468 2.525 2.468s2.524-1.105 2.524-2.468zm16.187-2.469c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468 0-1.364 1.13-2.469 2.524-2.469zm21.234 2.469c0-1.364-1.13-2.469-2.525-2.469-1.394 0-2.524 1.105-2.524 2.469 0 1.363 1.13 2.468 2.524 2.468 1.395 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.525 1.105 2.525 2.469 0 1.363-1.131 2.468-2.525 2.468s-2.524-1.105-2.524-2.468c0-1.364 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.364-1.131-2.469-2.525-2.469s-2.524 1.105-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zm16.184-2.469c1.394 0 2.524 1.105 2.524 2.469 0 1.363-1.13 2.468-2.524 2.468-1.394 0-2.524-1.105-2.524-2.468 0-1.364 1.13-2.469 2.524-2.469zm21.237 2.469c0-1.364-1.131-2.469-2.525-2.469s-2.524 1.105-2.524 2.469c0 1.363 1.13 2.468 2.524 2.468 1.394 0 2.525-1.105 2.525-2.468zM150.976 89.124c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.395 0-2.525-1.105-2.525-2.469 0-1.363 1.13-2.468 2.525-2.468zm21.233 2.468c0-1.363-1.13-2.468-2.524-2.468-1.394 0-2.525 1.105-2.525 2.468 0 1.364 1.131 2.469 2.525 2.469s2.524-1.105 2.524-2.469zm16.187-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm21.234 2.468c0-1.363-1.13-2.468-2.525-2.468-1.394 0-2.524 1.105-2.524 2.468 0 1.364 1.13 2.469 2.524 2.469 1.395 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.525 1.105 2.525 2.468 0 1.364-1.131 2.469-2.525 2.469s-2.524-1.105-2.524-2.469c0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469zm16.184-2.468c1.394 0 2.524 1.105 2.524 2.468 0 1.364-1.13 2.469-2.524 2.469-1.394 0-2.524-1.105-2.524-2.469 0-1.363 1.13-2.468 2.524-2.468zm21.237 2.468c0-1.363-1.131-2.468-2.525-2.468s-2.524 1.105-2.524 2.468c0 1.364 1.13 2.469 2.524 2.469 1.394 0 2.525-1.105 2.525-2.469z"
                                    fill="url(#paint4_linear_228_431)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_228_431" x1="152.25" y1="161.063" x2="154.33"
                                    y2="4.773" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#fff" />
                                    <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_228_431" x1="133.019" y1="80.334" x2="3.944"
                                    y2="3.188" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#246151" />
                                    <stop offset=".422" stop-color="#A7C6BC" />
                                    <stop offset=".865" stop-color="#73CADC" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_228_431" x1="133.019" y1="165.839" x2="3.944"
                                    y2="88.693" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#246151" />
                                    <stop offset=".422" stop-color="#A7C6BC" />
                                    <stop offset=".865" stop-color="#73CADC" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_228_431" x1="151.307" y1="80.335" x2="280.382"
                                    y2="3.188" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#246151" />
                                    <stop offset=".422" stop-color="#A7C6BC" />
                                    <stop offset=".865" stop-color="#73CADC" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_228_431" x1="151.307" y1="165.839" x2="280.382"
                                    y2="88.693" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#246151" />
                                    <stop offset=".422" stop-color="#A7C6BC" />
                                    <stop offset=".865" stop-color="#73CADC" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

</x-app-layout>
