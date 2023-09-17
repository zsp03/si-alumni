<div class="flex flex-col gap-4">
    <div class=" max-w-4xl w-full rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border">
        <form wire:submit.prevent="addData">
            @csrf
            <div class="mx-5">
                <label for="nama" class="block mb-2 text-sm font-semibold text-red-500 dark:text-white"><span class="text-red-500"> *</span>Form wajib diisi</label>
            </div>
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap <span class="text-red-500"> *</span></label>
                <input wire:model="name" type="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Lengkap" >
            </div>
            <div class="mb-6">
                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                <input wire:model="nim" type="nim" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIM" >
            </div>
            <div class="mb-6">
                <label for="fakultas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas<span class="text-red-500"> *</span></label>
                <input wire:model="fakultas" type="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fakultas" >
            </div>
            <div class="mb-6">
                <label for="program_studi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program Studi/jurusan<span class="text-red-500"> *</span></label>
                <input wire:model="program_studi" type="program_studi" id="program_studi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Program Studi/jurusan" >
            </div>
            <div class="mb-6">
                <label for="tahun_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun masuk<span class="text-red-500"> *</span></label>
                <input wire:model="tahun_masuk" type="tahun_masuk" id="tahun_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tahun Masuk" >
            </div>
            <div class="mb-6">
                <label for="tahun_lulus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun masuk<span class="text-red-500"> *</span></label>
                <input wire:model="tahun_lulus" type="tahun_lulus" id="tahun_lulus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tahun Masuk" >
            </div>
            <div class="mb-6">
                <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                <input wire:model="jenis_kelamin" type="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jenis Kelamin" >
            </div>
            <div class="mb-6">
                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Handphone(Whatsapp)</label>
                <input wire:model="phone_number" type="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. Handphone" >
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email<span class="text-red-500"> *</span></label>
                <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat Email" >
            </div>
            <div class="mb-6">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                <input wire:model="alamat" type="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat tempat tinggal" >
            </div>
            <div class="mb-6">
                <label for="tempat_kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Bekerja/Perusahaan</label>
                <input wire:model="tempat_kerja" type="tempat_kerja" id="tempat_kerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tempat Bekerja/Perusahaan " >
            </div>
            <div class="mb-6">
                <label for="alamat_kerja" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Tempat Kerja</label>
                <input wire:model="alamat_kerja" type="alamat_kerja" id="alamat_kerja" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat tempat kerja " >
            </div>
            <div class="mb-6">
                <label for="posisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi di Tempat Kerja</label>
                <input  wire:model="posisi" type="posisi" id="posisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Posisi di Tempat Kerja " >
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</div>