<div class="flex flex-col gap-4 items-center justify-center bg-white">



    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">

        <div class="relative col-span-1 md:col-span-2 lg:col-span-4">
            <input wire:model="search"
                   type="text"
                   class="py-3 px-4 pl-11 w-full block border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                   placeholder="Cari Judul/Nama Seri/Sosok Alumni...">
            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                <svg wire:loading.remove
                     class="h-4 w-4 text-gray-400"
                     xmlns="http://www.w3.org/2000/svg"
                     width="16"
                     height="16"
                     fill="currentColor"
                     viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <div wire:loading
                     class="hidden animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-blue-600 rounded-full"
                     role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>

        @foreach($dataNewsletters as $items)
        <div class="group relative cursor-pointer h-80 w-56 rounded-md justify-center overflow-hidden transition-shadow hover:shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]">
            <div class="">
                <img
                    class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-125"
                    src="https://lh3.googleusercontent.com/d/{{$items->docs_url}}?authuser=0"
                    alt="sosok alumni" />
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/40 group-hover:via-black/50 group-hover:to-black/30 group-hover:backdrop-blur-sm"></div>
            <div class="absolute inset-0 flex h-full translate-y-[65%] flex-col text-left items-center justify-center px-9 transition-all duration-500 group-hover:translate-y-0">
                <div class="self-start">
                    <h1 class="mb-0.5 font-dmserif text-xl font-bold text-white">{{ $items->series_acr }}</h1>
                    <span class="font-dmserif text-normal font-bold text-white">{{ \Carbon\Carbon::parse($items->published_date)->translatedFormat('F Y') }}</span>
                    <p class="mt-1 font-dmserif text-sm font-semibold text-white opacity-0 transition-opacity duration-300  group-hover:opacity-100">{{ $items->cover_alumni }} </p>
                </div>
                <p class="mt-3 h-32 w-full text-sm italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    {{ $items->title }}
                </p>
                <a
                    class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60"
                    href="https://drive.google.com/file/d/{{$items->docs_url}}/view"
                    target="_blank">
                    Buka
                </a>
            </div>
        </div>
        @endforeach

        <div class="col-span-1 md:col-span-2 lg:col-span-4">
            {{ $dataNewsletters->withQueryString()->links() }}
        </div>

    </div>

</div>
