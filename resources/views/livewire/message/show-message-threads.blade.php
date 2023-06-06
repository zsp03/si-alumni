<div
    x-on:resize.window = "openChatThread = (window.innerWidth < 640) && openChatBox ? false : true"
    x-show="openChatThread"
    class="w-full sm:max-w-xs bg-white flex flex-col overflow-y-auto border-r">
    <div class="p-4 w-full z-30 flex flex-col gap-2 shadow">
        <div class="max-w-sm flex justify-between">
            <span class="font-semibold text-3xl">Messages</span>
            <button wire:click="$emit('showCreateModal')" class="w-fit flex gap-2 items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                <i class="iconoir-edit-pencil"></i>
                <span>Create</span>
            </button>
        </div>
        <div class="relative max-w-sm">
            <input type="text" class="pl-10 block w-full border-gray-200 rounded-md text-xs focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="Search for items">
            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
                <svg class="h-2.5 w-2.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="flex flex-col overflow-y-auto scrollbar scrollbar-thin scrollbar-thumb-gray-400">
        @foreach($threads as $thread)
            <x-message.thread :thread="$thread"/>
        @endforeach
    </div>
</div>

