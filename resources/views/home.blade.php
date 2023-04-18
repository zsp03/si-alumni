<x-app-layout>
    @section('title', 'Home')
    <section class="flex flex-col w-full shadow-md">
        <div class="relative">
            <div
                class="flex justify-center mx-auto px-12 sm:px-10 lg:px-20 pt-10 pb-24 z-10 h-[960px] sm:h-[880px] bg-[url('/public/assets/image/header-bg.png')] bg-cover bg-no-repeat">
                <div class="flex sm:mt-14 max-w-6xl justify-center">
                    <div class="flex flex-col sm:flex-row gap-20 pb-7">
                        <div class="flex flex-col gap-10">
                            <div class="w-full">
                                <h2 class="text-4xl font-normal text-white md:text-xl">Selamat Datang Di Portal Alumni
                                </h2>
                                <h2 class="mb-8 text-4xl font-semibold tracking-widest text-white uppercase title-font">
                                    {{ Auth::user()->name }}! </h2>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex flex-col gap-2">
                                    <h2 class="text-4xl font-bold leading-tight lg:text-5xl text-white">Get in touch
                                    </h2>
                                    <span class="text-lg text-white">Saling Terhubung dengan Para Alumni</span>
                                </div>
                                <a href="{{ route('database') }}"
                                    class="btn transition-colors bg-cyan-800 self-center rounded-md w-40 h-10 text-white text-hover shadow-lg">
                                    Here
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="!z-5 relative flex flex-col rounded-[20px] max-w-[300px] bg-clip-border shadow-3xl shadow-shadow-500  w-full !p-4 3xl:p-![18px] bg-white undefined bg-opacity-60">
                                <div class="h-full w-full">
                                    <div class="relative w-full">
                                        <img src="{{ $user->profile_photo_url }}"
                                            class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full" alt="">
                                    </div>
                                    <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                                        <div class="mb-1">
                                            <p class="text-lg font-bold text-navy-700"> {{ Auth::user()->name }} </p>
                                            <p class="mt-1 text-sm font-medium text-gray-600 md:mt-2">UX Researcher,
                                                Co-host of the Interesting Design podcast
                                                and a proud mother of three children </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between md:items-center lg:justify-between ">
                                        <ul
                                            class="space-y-4 md:space-y-0 space-x-0 md:space-x-4 flex flex-col md:flex-row text-left justify-center pt-1">
                                            <li class="flex items-center text-sm"><i
                                                    class="iconoir-calendar mr-2"></i>Teknik Informatika 1990 </li>
                                        </ul>
                                        <button href=""
                                            class="linear rounded-[20px] bg-red-900 px-4 py-2 text-base font-medium text-white transition duration-200 hover:bg-brand-800 active:bg-brand-700 ju">Perbarui
                                            Profl</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row">
            <div class="relative flex-1 px-6 pt-6 bg-gray-100 sm:p-0">
                <img class="object-cover object-center w-full h-full pb-px rounded-lg sm:rounded-none"
                    src="{{ asset('assets/image/foto-unhas.jpg') }}" alt="gambar-rektorat">
                <div
                    class="absolute inset-y-0 right-0 hidden w-16 h-full transform translate-x-1/2 skew-x-6 bg-gray-100 sm:block">
                </div>
            </div>
            <div class="flex-1 bg-gray-100">
                <div class="flex flex-col justify-center h-full max-w-6xl p-6 sm:p-8 sm:pl-16 md:p-20">
                    <h2 class="text-3xl text-gray-800">
                        <span class="flex justify-start mt-2">
                            <span class="inline-block overflow-hidden text text-red-700 font-medium">
                                Dana Abadi Untuk Unhas Maju
                            </span>
                        </span>
                    </h2>
                    <p class="mt-6 text-lg text-gray-600">
                        Dana Abadi UNHAS merupakan dana investasi yang diperoleh dari donasi para alumni dan simpatisan
                        Universitas Hasanuddin. Dana abadi bersifat simpanan yang akan dikembangkan dan hasilnya akan
                        dimanfaatkan untuk meringankan beban biaya pendidikan yang harus dibayarkan mahasiswa dalam
                        menempuh studinya, serta akan dimanfaatkan oleh dosen dan mahasiswa dalam mengembangkan riset,
                        dan melakukan pengabdian kepada masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
