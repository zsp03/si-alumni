@section('title', $post->title)
<div class="max-w-screen-lg mx-auto">
    <main class="mt-10">
        <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="flex flex-col items-start gap-2 px-4 mb-2 lg:px-0">
                <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                    {{$post->title}}
                </h2>
                <div class="flex gap-4">
                    <a href="#" class="flex gap-2 text-lg text-gray-500 items-center">
                        <i class="iconoir-calendar"></i>
                        <span class="hover:text-gray-800">{{\Carbon\Carbon::parse($post->updated_at)->translatedFormat('F d, Y')}}</span>
                    </a>
                    <a href="#" class="flex gap-2 text-lg text-gray-500 items-center">
                        <i class="iconoir-clock"></i>
                        <span class="hover:text-gray-800">{{\Carbon\Carbon::parse($post->updated_at)->translatedFormat('h:i A')}}</span>
                    </a>
                </div>
                <div class="flex gap-2">
                    @foreach($post->tags as $tag)
                        <a href="{{ route('eventByTags', $tag->slug) }}" class="">
                            <x-wireui.badge primary size="lg" label="{{ $tag->name }}"/>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex flex-col">

            <div class="event-content px-4 lg:px-0 text-gray-700 text-lg leading-relaxed w-full prose prose-img:my-0 max-w-none">
                <img src="{{ $post->image_featured_url }}" alt="featured_image" class="pb-6 w-full object-cover lg:rounded" />
                {!! $post->content !!}
            </div>
        </div>
    </main>
    <div class="border-t mt-12 pt-12 px-4 lg:px-0"></div>

    <aside aria-label="Related articles" class="py-8 lg:py-2 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Latest Articles</h2>
            @livewire('latest-posts')
        </div>
    </aside>
</div>
