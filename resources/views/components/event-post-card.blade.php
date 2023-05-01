@props([
    'href' => '#',
    'size' => null,
    'post'
])

<a rel="noopener noreferrer" href="{{ $href }}" {{ $attributes->merge(['class' => 'border border-gray-200 animate-in slide-in-from-right duration-700 bg-white shadow-md rounded-md max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900']) }}>
    <img alt="featured-image" role="presentation" class="object-cover w-full rounded-t-md @if($size == 'big') lg:rounded-t-none lg:rounded-l-md h-64 sm:h-96 lg:col-span-7 @else h-44 @endif dark:bg-gray-500" src="{{ $post->image_featured_url !== null ? $post->image_featured_url : 'https://source.unsplash.com/random/480x360?'. rand(1,50) }}">
    <div class="flex flex-col p-5 @if($size == 'big') lg:col-span-5 @endif">
        <h3 class="text-2xl font-semibold @if($size == 'big') sm:text-4xl @endif group-hover:underline group-focus:underline">{{ $post->title }}</h3>
        <span class="text-sm text-gray-600 @if($size == 'big') sm:text-lg @endif dark:text-gray-400">{{\Carbon\Carbon::parse($post->updated_at)->translatedFormat('F d, Y')}}</span>
        <div class="flex gap-2">
            @foreach($post->tags as $tag)
                <x-wireui.badge primary label="{{ $tag->name }}"/>
            @endforeach
        </div>
        <p class="mt-2">{{ $post->shortContent() }}</p>
    </div>
</a>
