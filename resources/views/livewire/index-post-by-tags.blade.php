@section('title', Str::title($tags))
<x-slot name="header">
    <img src="/assets/image/header-bg.png" alt="alumni unhas" class="w-full h-64 sm:h-60">
    <div class="max-w-7xl mx-auto px-12 sm:px-10 lg:px-20 absolute inset-0 py-10 z-10">
        <div class="font-semibold text-6xl text-white dark:text-gray-20 leading-tight">
            {{  Str::title($tags) }}
        </div>
    </div>
</x-slot>

<section class="mt-7 dark:bg-gray-800 dark:text-gray-100">
    <div>
        <div class="container grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            @foreach($dataPosts as $key => $post)
                @if($loop->first)
                    <x-event-post-card :post="$post" href="{{ route('post.show', $post) }}" class="sm:col-span-2 lg:col-span-3 gap-4 sm:max-w-full grid lg:grid-cols-12" size="big"/>
                @else
                    <x-event-post-card :post="$post" href="{{ route('post.show', $post) }}"/>
                @endif
            @endforeach

            @if($dataPosts->count() < $postsCount)
                <div class="flex col-span-full justify-center items-center">
                    <button wire:click="loadMore(3)" wire:target="loadMore" wire:loading.class="loading" type="button" class="btn">Load more</button>
                </div>
            @endif
        </div>
    </div>
</section>
