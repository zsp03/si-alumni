<div>
    <div class="container grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        @foreach($dataPosts as $post)
            @if($loop->first)
                <x-event-post-card :post="$post" href="/event/{{ $post->slug }}" class="sm:col-span-2 lg:col-span-3 gap-4 sm:max-w-full grid lg:grid-cols-12" size="big"/>
            @else
                <x-event-post-card :post="$post" href="/event/{{ $post->slug }}"/>
            @endif
        @endforeach
        <div class="flex justify-center">
            <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-900 dark:text-gray-400">Load more posts...</button>
        </div>
    </div>
</div>
