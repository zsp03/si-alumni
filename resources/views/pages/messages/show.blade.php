<x-app-layout>
    @section('title',
    'Messages
    ')

    <section class="flex bg-gray-100">
        <x-wireui.notifications position="top-right" />
        <div
            x-data="{ openChatBox : false, openChatThread : true, activeThread : null }"
            class="flex flex-1 h-[85vh] border shadow p-4">
            <div x-show="openChatThread" class="flex flex-col items-center rounded-l-md bg-gray-200">
                <div class="flex w-16 h-16 items-center justify-center">
                    <i class="iconoir-mail-opened text-4xl"></i>
                </div>

                <div class="flex w-16 h-16 items-center justify-center">
                    <i class="iconoir-send text-4xl"></i>
                </div>
            </div>

            @livewire('message.show-message-threads')

            @livewire('message.show-message-box')

            @livewire('message.show-message-create')
        </div>
    </section>
</x-app-layout>
