<x-app-layout>
    @section('title', 'Home')

    <section class="flex flex-col w-full shadow-md">
        <div class="relative">
{{--            <img src="/assets/image/header-bg.png" alt="alumni unhas" class="h-[10rem] sm:h-60">--}}
            <div class="flex justify-center mx-auto px-12 sm:px-10 lg:px-20 pt-10 pb-24 z-10 h-[960px] sm:h-[880px] bg-[url('/public/assets/image/header-bg.png')] bg-cover bg-no-repeat">
                <div class="flex mt-12 sm:mt-32 max-w-6xl justify-center">
                    <div class="flex flex-col sm:flex-row gap-20 pb-7">
                        <div class="flex flex-col gap-10">
                            <div class="w-full">
                                <h2 class="mb-8 text-4xl font-semibold tracking-widest text-white uppercase title-font"> Hi, {{ Auth::user()->name }}! </h2>
                                <h1 class="text-2xl font-normal text-white md:text-3xl">Selamat Datang di Portal Alumni
                                    <span class="mt-1 block text-3xl font-bold text-dark dark:text-white  text-gray-300">UNIVERSITAS HASANUDDIN</span></h1>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex flex-col gap-2">
                                    <h2 class="text-4xl font-bold leading-tight lg:text-5xl text-white">Get in touch</h2>
                                    <span class="text-lg text-white">Saling Terhubung dengan Para Alumni</span>
                                </div>
                                <a href="{{ route('database') }}" class="btn transition-colors bg-cyan-800 self-center rounded-md w-40 h-10 text-white text-hover shadow-lg">
                                    Here
                                </a>
                            </div>
                        </div>
                        <div class="self-center sm:self-start w-60 lg:w-80">
                            <img class="object-cover object-center rounded-full " alt="hero" src="{{ $user->profile_photo_url }}">
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
        </div>
    </section>
</x-app-layout>
