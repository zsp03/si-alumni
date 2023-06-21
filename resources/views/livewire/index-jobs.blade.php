<div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
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
        <div class="mx-auto col-span-full text-2xl font-bold"> No Jobs Posts</div>
    @endforelse
</div>
