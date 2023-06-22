<div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
    <div class="relative col-span-full">
        <input wire:model="search"
               type="text"
               class="py-3 px-4 pl-11 block w-full sm:w-1/2 lg:w-1/3 border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
               placeholder="Ketik Nama...">
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
    @forelse($jobs as $job)
        <a href="{{ route('jobs-post', $job->id) }}">
            <div class="w-full flex flex-col shadow-md lg:flex-row hover:shadow-lg gap-2 select-none p-5 rounded-md border-gray-300 border cursor-pointer items-center">
                <div class="flex d-flex justify-center items-center w-fit">
                    <img class="shadow-light-lg w-60 aspect-square"
                         src="{{ $job->logo_url }}"
                         alt="Uniqlo">
                </div>
                <div class="flex flex-col w-full gap-1 overflow-hidden text-center lg:text-left">
                    <div class="header text-blue-600 font-semibold text-xl">{{ strtoupper($job->name) }}</div>
                    <p class="desc text-gray-600 line-clamp-2">{{ $job->shortContent() }}</p>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-1 mx-auto lg:mx-0">
                        <div class="flex text-secondary text-sm ">
                            <i class="iconoir-calendar mr-2"></i>{{ \Carbon\Carbon::parse($job->open)->translatedFormat('d').'-'.\Carbon\Carbon::parse($job->close)->translatedFormat('d M Y') }} </li>
                        </div>
                        <div class="flex text-secondary text-sm ">
                            <i class="iconoir-calendar mr-2"></i>{{ $job->location }}</li>
                        </div>
                        <div class="flex text-secondary text-sm ">
                            <i class="iconoir-calendar mr-2"></i>{{ $job->type }} </li>
                        </div>

                    </div>
                </div>
                <div class="right m-auto mr-0">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </div>
                </div>
            </div>
        </a>
    @empty
        <div class="mx-auto col-span-full text-2xl font-bold"> No Jobs Posted</div>
    @endforelse

    <div class="col-span-full">
        @if (!empty($search))
            {{ $jobs->withQueryString()->links() }}
        @endif
    </div>
</div>
