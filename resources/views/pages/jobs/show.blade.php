<x-app-layout>
    @section('title',
        'Job Vacancy
        ')
        <x-slot name="header">
            <div class="relative bg-prusblue z-30">
                <div class="max-w-6xl px-12 mx-auto py-5">
                    <div class=" flex flex-col">
                        <span class="text-white mb-0 text-base">Full Time Offering Job</span>
                        <span class="text-white font-bold mr-14 xl:mr-0 text-2xl">UNIQLO MANAGER CANDIDATE</span>
                        <hr>
                        <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:gap-6 sm:items-center text-white">
                            <div>
                                <span class="font-bold mb-0 ">Lokasi</span>
                                <h6 class="font-bold "><i class="iconoir-city text-sm text-white"></i><span class="ml-1">
                                        Jakarta Pusat</span></h6>
                            </div>
                            <div>
                                <span class="font-bold mb-0 ">Tanggal Pembukaan</span>
                                <h6 class="font-bold "><i class="iconoir-calendar text-sm text-white"></i><span
                                        class="ml-1">12 Mei
                                        2020</span></h6>
                            </div>
                            <div>
                                <span class="font-bold mb-0 ">Tanggal Penutupan</span>
                                <h6 class="font-bold "><i class="iconoir-calendar text-sm text-white"></i><span
                                        class="ml-1">30 Mei
                                        2020</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>

        <section class="max-w-6xl mx-auto bg-white py-[12px] relative z-40">
            <div class="p-6">
                <div class="mx-auto flex flex-col lg:justify-between lg:flex-row">
                    <div class="flex flex-col w-full items-center px-4 lg:w-1/2 xl:w-6/12 mx-auto">
                        <div class="flex gap-3 justify-center items-center w-fit pb-4">
                            <img class="shadow-light-lg w-20 aspect-square"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/UNIQLO_logo.svg/204px-UNIQLO_logo.svg.png"
                            alt="Metrodata Academy">
                            <span>PT. Fast Retailing Indonesia</span>
                        </div>
                        <div class="max-w-[570px] mb-12 lg:mb-0">
                            <p class="text-base text-justify leading-relaxed">
                                Uniqlo adalah perusahaan Jepang dalam bidang perencanaan produk, produksi, distribusi pakaian kasual. Saat ini, Uniqlo membuka kesempatan bagi yang berstatus mahasiswa tingkat akhir atau lulusan baru Perguruan Tinggi untuk mengikuti program training intensif bertajuk “Uniqlo Manager Candidate”. Untuk persyaratan dan info lebih lanjut bisa dilihat di slide selanjutnya yaa

                            </p>
                        </div>
                    </div>

                    <div class="w-full lg:w-[500px] px-4 lg:-mt-44">
                        <div class="bg-white relative border rounded-lg p-8 sm:p-12 shadow-lg">
                            <div class="flex justify-center items-center gap-2 pb-2">
                                <button class="btn btn-wide bg-gray-300 hover:bg-prusblue hover:text-white">Info Lebih Lanjut</button>
                            </div>
                            <ul>
                                <li class="flex items-center py-3">
                                    <div class="text-secondary flex "><i class="iconoir-graduation-cap"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Pendidikan</h4><span class="text-secondary">S1
                                        Manajemen</span>
                                </li>
                                <li class="flex items-center py-3 border-t border-gray-300">
                                    <div class="text-secondary flex "><i class="iconoir-handbag"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Pengalaman</h4><span class="text-secondary">Min 1
                                        Tahun</span>
                                </li>
                                <li class="flex items-center py-3 border-t border-gray-300">
                                    <div class="text-secondary flex "><i class="iconoir-group"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Usia</h4><span class="text-secondary">Max 25 Tahun</span>
                                </li>
                                <li class="flex items-center py-3 border-t border-gray-300">
                                    <div class="text-secondary flex "><i class="iconoir-pin-alt"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Penempatan</h4><span class="text-secondary">Jakarta
                                        Pusat</span>
                                </li>
                                <li class="flex items-center py-3 border-t border-gray-300">
                                    <div class="text-secondary flex "><i class="iconoir-timer"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Jenis Pekerjaan</h4><span class="text-secondary">Full
                                        Time</span>
                                </li>
                                <li class="flex items-center py-3 border-t border-gray-300">
                                    <div class="text-secondary flex "><i class="iconoir-chat-bubble-translate"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Kemampuan Bahasa</h4><span
                                        class="text-secondary">Indonesia dan Inggris</span>
                                </li>
                                <li class="flex items-center py-3 border-t border-gray-300">
                                    <div class="text-secondary flex "><i class="iconoir-calendar"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Tgl. Pembukaan</h4><span class="text-secondary">21 Mei
                                        2020</span>
                                </li>
                                <li class="flex items-center py-3 border-t border-gray-300">
                                    <div class="text-secondary flex "><i class="iconoir-calendar"></i>
                                    </div>
                                    <h4 class="mb-0 ms-3 me-auto">Tgl. Penutupan</h4><span class="text-secondary">30 Mei
                                        2020</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>
