<div wire:init="loadPosts">
    <div class="container grid justify-items-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl p-6 mx-auto space-y-6">
        @if(!$readyToLoad)
            @for ($i = 0; $i < $perPage; $i++)
                @if($i == 0)
                    <x-post-skeleton size="big"/>
                @else
                    <x-post-skeleton/>
                @endif
            @endfor
        @else
            @foreach($dataPosts as $key => $post)
                @if($loop->first)
                    <x-event-post-card :post="$post" href="{{ route('post.show', $post) }}" class="col-span-full gap-4 sm:max-w-full grid lg:grid-cols-12" size="big"/>
                @else
                    <x-event-post-card :post="$post" href="{{ route('post.show', $post) }}"/>
                @endif
            @endforeach

            @if($perPage < $postsCount)
                <div class="flex col-span-full justify-center items-center">
                    <button wire:click="loadMore(3)" wire:target="loadMore" wire:loading.class="loading" type="button" class="btn">Load more</button>
                </div>
            @endif
        @endif
    </div>
</div>
