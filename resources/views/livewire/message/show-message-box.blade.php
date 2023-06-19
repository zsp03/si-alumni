<div
    x-init="openChatBox = window.innerWidth > 640"
    :style="openChatBox ? 'display: flex' : null"
    class="hidden md:flex w-full flex-col bg-white overflow-y-auto border-b rounded-r-md">
    <span wire:loading.class.remove="hidden" class="hidden  m-auto loading loading-dots loading-lg"></span>
    @if($selectedThread)
        <div x-data="{ showBackButton : false }" wire:loading.remove class="h-20 flex justify-between items-center border-b p-4">
            <i x-on:resize.window = "showBackButton = window.innerWidth < 640"
               x-init="showBackButton = window.innerWidth < 640"
               wire:click="deselectThread"
               @click="openChatThread = true; openChatBox = false; activeThread = 0"
               x-show = "showBackButton"
               class="iconoir-arrow-left"></i>
            <h4 class="line-clamp-1 text-lg text-gray-800 font-bold">{{ $thread->subject }}</h4>
            <div class="flex flex-row items-center gap-2">
                @livewire('message.show-message-delete', ['thread' => $thread], key("delete-$thread->id"))
                <div title="Delete" wire:click="$emit('showDeleteModal')" class="text-gray-700 px-2 py-1 border border-gray-300 rounded-lg shadow hover:bg-gray-200 transition duration-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <div wire:loading.remove class="flex flex-col overflow-y-auto scrollbar scrollbar-thin scrollbar-thumb-gray-400">
            @if($messages != null)
                @foreach($messages as $message)
                    <x-message.content :message="$message"/>
                @endforeach
            @endif
        </div>
        <div class="mt-auto" wire:loading.remove>
            @livewire('message.reply-message-form', ['thread' => $thread], key("reply-$thread->id"))
        </div>
    @else
        <p wire:loading.remove class="m-auto"> No Messages Selected </p>
    @endif

</div>
