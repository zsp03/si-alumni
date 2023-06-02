@props([
    'href' => '#',
    'size' => null,
    'post'
])

<div {{ $attributes->merge(['class' => 'duration-300 hover:scale-[1.005] border border-gray-200 bg-white shadow-md rounded-md max-w-sm mx-auto hover:shadow-md hover:shadow-gray-500 group-hover:no-underline focus:no-underline dark:bg-gray-900']) }}>
    <a x-data="{ loaded : false }" href="{{ $href }}" class="lg:col-span-7">
        <div :class="loaded ? 'hidden' : null" class="skeleton w-full rounded-t-md @if($size == 'big') lg:rounded-tr-none lg:rounded-l-md h-64 sm:h-96 @else h-44 @endif dark:bg-gray-500"></div>
        <img
            x-init="loaded = Boolean($el.complete && $el.naturalWidth && $el.naturalHeight)"
            @load="loaded = true"
            :class="loaded ? null : 'hidden'"
            alt="featured-image" role="presentation" class="object-cover w-full rounded-t-md @if($size == 'big') lg:rounded-tr-none lg:rounded-l-md h-64 sm:h-96 @else h-44 @endif dark:bg-gray-500" src="{{ $post->image_featured_url !== null ? $post->image_featured_url : 'https://source.unsplash.com/random/480x360?'. rand(1,50) }}">
    </a>
    <div class="my-auto w-fit flex flex-col p-5 @if($size == 'big') lg:col-span-5 @endif">
        <a rel="noopener noreferrer" href="{{ $href }}" class="w-fit">
            <h3 class="text-2xl font-semibold text-gray-900 hover:drop-shadow-lg @if($size == 'big') sm:text-4xl @endif">{{ $post->title }}</h3>
        </a>
        <span class="text-sm text-gray-600 @if($size == 'big') sm:text-lg @endif dark:text-gray-400">{{\Carbon\Carbon::parse($post->updated_at)->translatedFormat('F d, Y')}}</span>
        <div class="mt-1 flex gap-2">
            @foreach($post->tags as $tag)
                <a href="{{ route('eventByTags', $tag->slug) }}">
                    <x-wireui.badge primary label="{{ $tag->name }}" class="hover:bg-black"/>
                </a>
            @endforeach
        </div>
        <p class="mt-2">{{ $post->shortContent() }}</p>
    </div>
</div>
