<x-app-layout>
    @section('title', 'Welcome')
    <x-slot name="header">
    </x-slot>
    <section class=" ">
        {{-- carousel --}}
        @livewire('front-banner')

        {{-- dana abadi --}}
        <a id="dana-abadi" class="block relative invisible top-[-100px]"></a>
        <div class="mx-4 md:mx-auto my-5 max-w-7xl">
            <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">
                <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                    <div class="absolute inset-0 w-full h-full object-fill object-center bg-opacity-30 bg-cover bg-bottom bg-[url('/public/assets/image/foto-unhas.jpg')]">
                    </div>
                    <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                        <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">
                            Dana Abadi Untuk Unhas Maju
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
                        <a class="btn flex items-center mt-3 text-white bg-prusblue text-lg font-semibold hover:text-blue-900 focus:text-blue-900 "
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
