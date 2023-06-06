<div class="pt-2 rounded-b-md">
    <div class="w-full border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea id="comment" rows="4"
                      wire:model="body"
                      class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                      placeholder="Type your reply here..." required></textarea>
        </div>
        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
            <div wire:click="sendReply({{ $thread->id }})" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Reply
            </div>
            <div class="flex pl-0 space-x-1 sm:pl-2">
            </div>
        </div>
    </div>
</div>
