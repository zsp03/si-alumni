@props(['thread'])

<div wire:click="$emit('loadThread', {{ $thread->id }})"
     @click="activeThread = {{ $thread->id }};
     openChatBox = true;
     openChatThread = window.innerWidth > 640"
     :class="activeThread === {{ $thread->id }}  ? 'border-l-2 border-blue-500 bg-blue-100' : 'border-b hover:bg-gray-100'"
     class="p-3">
    <div class="flex items-center space-x-2">
        <div class="avatar">
            <div class="w-8 rounded-full">
                <img src={{ $thread->creator()->profile_photo_url }}
                     alt="Tailwind-CSS-Avatar-component" />
            </div>
        </div>
        <div class="w-full flex flex-col">
            <span class="text-xs font-semibold text-gray-600"> {{ $thread->creator()->name }} </span>
            <strong class="flex-grow font-bold">{{ $thread->subject }}</strong>
        </div>
        <span class="whitespace-nowrap justify-end text-sm text-gray-600">
            {{ $thread->messages->last()->updated_at->diffForHumans() }}
        </span>
    </div>

    <div class="flex items-center space-x-1">
        <p class="line-clamp-1 text-xs"> {{$thread->messages->last()->body}}</p>
    </div>
</div>
