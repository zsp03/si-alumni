@props(['message' => ''])

<div class="px-5 border-b">
    <div class="flex items-center justify-between pt-5">
        <div class="flex items-center">
            <img src="{{ $message->user->profile_photo_url }}"
                 class="rounded-full w-8 h-8 border border-gray-500">
            <div class="flex flex-col ml-2">
                <span class="text-sm font-semibold">{{ $message->user->name }}</span>
                <span class="text-xs text-gray-400">{{ $message->user->email }}</span>
            </div>
        </div>
        <span class="text-sm text-gray-500">
            {{ $message->created_at->diffForHumans() }}
        </span>
    </div>
    <div class="py-4 text-gray-700">
        {{ $message->body }}
    </div>
</div>
