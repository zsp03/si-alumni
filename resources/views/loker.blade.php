<x-app-layout>
    @section('title', 'Uniqlo Hiring')
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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

<div class="mt-6 mr-8 ml-8">
    <div class="bg-white p-4 rounded-lg shadow-xl py-8 mt-12">
        <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">UNIQLO MANAGER CANDIDATE</h4>
        <p class="text-center text-red-500 text-md mt-2 font-semibold">Lowongan ini dibuka pada tanggal 11 January 2023 dan ditutup pada tanggal 31 January 2023.</p>
        <div class="space-y-12 px-2 xl:px-16 mt-12">
            <div class="mt-4 flex">
                <div>
                    <div class=" text-center py-2">
                        <span class="text-black text-center">Uniqlo adalah perusahaan Jepang dalam bidang perencanaan produk, produksi, distribusi pakaian kasual. .</span>
                    </div>
                    <div class=" text-center py-2">
                        <span class="text-black text-center">Saat ini, Uniqlo membuka kesempatan bagi yang berstatus mahasiswa tingkat akhir atau lulusan baru Perguruan Tinggi untuk mengikuti program training intensif bertajuk “Uniqlo Manager Candidate"</span>
                    </div>
                    <div class=" text-center py-2">
                        <span class="text-black text-center">Untuk persyaratan dan info lebih lanjut bisa dilihat di slide selanjutnya yaa.</span>
                    </div>
                    <div class="flex">
                        <div class=" items-center py-2">
                            <img
                                src="{{ asset('assets/image/uniqlo.jpeg') }}"
                                alt=""
                                class="object-contain dark:bg-gray-500 aspect-video"
                            />
                        </div>
                        <div class=" items-center py-2">
                            <img
                                src="{{ asset('assets/image/uniqlo1.jpeg') }}"
                                alt=""
                                class="object-contain dark:bg-gray-500 aspect-video"
                            />
                        </div>
                    </div>
                    <div class="text-justify py-2 mt-5">
                        <span class="text-black font-bold">Job Description:</span>
                        <ul class="w-96 list-disc">
                            <li class="">A second  Lorem ipsum dolor sit amet consectetur </li>
                            <li class="">A third item adipisicing elit.  sunt rerum quaerat quis nisi illo delectus mollitia cum earum officiis magni similique?</li>
                            <li class="">A fourth item Corporis corrupti dolor, hic, officia sint, rem ab adipisci</li>
                            <li class="">And a fifth one Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas error at saepe facilis ducimus nobis corporis </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>