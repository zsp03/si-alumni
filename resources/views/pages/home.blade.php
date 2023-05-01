<x-app-layout>
    @section('title', 'Home')
    <section class="flex flex-col w-full shadow-md">
        <div class="relative">
            <div class="flex justify-center mx-auto px-12 sm:px-10 lg:px-20 pt-10 pb-24 z-10 sm:h-[880px] bg-[url('/public/assets/image/header-bg.png')] bg-cover bg-no-repeat">
                <div class="flex sm:mt-14 max-w-6xl justify-center">
                    <div class="flex flex-col sm:flex-row gap-20 pb-7">
                        <div class="animate-in slide-in-from-bottom duration-700 flex flex-col gap-3">
                            <div class="w-full">
                                <h2 class="mb-2 text-xl font-light text-white md:text-2xl">
                                    Selamat datang di Portal Alumni,
                                </h2>
                                <h2 class="text-4xl max-w-[480px] font-semibold tracking-widest text-white uppercase title-font">
                                    {{ Auth::user()->name }}!</h2>
                            </div>
                            <p class="max-w-[480px] text-lg font-light text-gray-300 md:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing
                                elit. Odit ipsa consequatur, illum est cum, expedita
                                repudiandae accusamus nesciunt inventore architecto</p>
                            <div class="lg:mt-20 flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <h2 class="text-3xl font-semibold leading-tight lg:text-5xl text-white">Get in touch,
                                    </h2>
                                    <span class="text-lg md:text-2xl font-light text-white">Saling terhubung antar sesama Alumni.</span>
                                </div>
                                <a href="{{ route('database') }}"
                                    class="btn shadow-md shadow-gray-800 border-transparent normal-case font-semibold text-lg transition-colors bg-cyan-800 rounded-md w-40 h-10 text-white text-hover">
                                    Cari Alumni
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col mb-20 items-center">
                            <x-profile-card :user="Auth::user()" class="animate-in slide-in-from-right duration-700 bg-opacity-80 shadow-lg shadow-gray-800">
                                <a href="{{ route('profile.show') }}"
                                   class=" btn rounded-lg min-h-[40px] h-fit bg-red-800 normal-case border-none text-sm font-medium text-white shadow-md">Perbarui
                                    Profil</a>
                            </x-profile-card>
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
