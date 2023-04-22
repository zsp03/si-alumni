@props(['user'])

<div class="z-5 w-full p-4 rounded-lg max-w-[300px] bg-clip-border shadow-lg shadow-gray-950 bg-white bg-opacity-60">
    <div class="flex flex-col">
        <div class="relative aspect-square">
            <img src="{{ $user->profile_photo_url }}"
                 class="object-cover mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full" alt="foto-user">
        </div>
        <div class="mt-3 px-1 md:items-start">
            <div class="mb-1 flex flex-col justify-left">
                <p class="text-xl font-bold text-navy-700"> {{ $user->name }} </p>
                <div class="flex gap-2 items-center">
                    <i class="iconoir-calendar text-sm text-gray-600"></i>
                    <span classz="text-base text-gray-600"> {{ $user->jurusan }} {{ $user->angkatan }} </span>
                </div>
                <p class="my-1 text-sm font-medium text-gray-600"> {{ $user->profile_desc }} </p>
            </div>
        </div>
        <div class="flex items-center">
            {{ $slot }}
        </div>
    </div>
</div>
