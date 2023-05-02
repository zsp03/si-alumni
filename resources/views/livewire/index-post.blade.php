<div>
    <div class="container grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        @foreach($dataPosts as $key => $post)
            @if($loop->first)
                <x-event-post-card :post="$post" href="/event/{{ $post->slug }}" class="sm:col-span-2 lg:col-span-3 gap-4 sm:max-w-full grid lg:grid-cols-12" size="big"/>
            @else
                <x-event-post-card :post="$post" href="/event/{{ $post->slug }}"/>
            @endif
        @endforeach

        @if($dataPosts->count() < $postsCount)
            <div class="flex col-span-full justify-center items-center">
                <button wire:click="loadMore(3)" wire:target="loadMore" wire:loading.class="loading" type="button" class="btn">Load more</button>
            </div>
        @endif
    </div>
</div>
