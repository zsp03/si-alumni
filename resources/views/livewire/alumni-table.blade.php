<div class="flex flex-col gap-4">

    <div class="relative">
        <input wire:model="search"
               type="text"
               class="py-3 px-4 pl-11 block w-full sm:w-1/2 lg:w-1/3 border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
               placeholder="Search...">
        
        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-4">
            <svg wire:loading.remove
                 class="h-4 w-4 text-gray-400"
                 xmlns="http://www.w3.org/2000/svg"
                 width="16"
                 height="16"
                 fill="currentColor"
                 viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            <div wire:loading
                 class="hidden animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-blue-600 rounded-full"
                 role="status" aria-label="loading">
                <span class="sr-only">Loading...</span>
            </div>
            
        </div>
    </div>

    <div class="flex justify-end">
        <button wire:click.prevent="downloadData" class="bg-green-500 hover:bg-green-700 text-white border border-green-700 rounded font-bold py-2 px-4 inline-flex items-center">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
            <span>Export</span>
          </button>
    </div>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                NIM
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Nama
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Program Studi
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Fakultas
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Nomor Telepon
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Email
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @if(!empty($search))
                            @forelse($dataAlumnis as $alumni)
                                <tr wire:click="showUserProfileCard({{$alumni->user_id}})"
                                    class="hover:bg-gray-300">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $alumni->nim }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $alumni->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $alumni->program_studi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $alumni->fakultas }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $alumni->show_phone_number ? $alumni->phone_number : '' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $alumni->show_email ? $alumni->email : '' }}
                                    </td>
                                </tr>
                            @empty
                                <tr> <td colspan="6" class="text-center p-4"> No data found </td> </tr>
                            @endforelse
                        @else
                            <tr> <td colspan="6" class="text-center p-4"> Ketik Nama/NIM untuk memulai pencarian. </td> </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @if (!empty($search) && !empty($dataAlumnis) && !empty($dataAlumni))
        <x-wireui.modal align='center' blur="sm" wire:model="showingUserProfileCard">
            <x-profile-card :user="$dataAlumni" class="shadow">
                @if($dataAlumni->id !== null)
                    <a wire:click="$emit('showCreateModal')"
                       class=" btn rounded-lg min-h-[40px] h-fit bg-prusblue normal-case border-none text-sm font-medium text-white shadow-md">
                        Kirim Pesan</a>
                @endif
                @livewire('message.show-message-create', ['receiverOneId' => $dataAlumni->id, 'isSelectDisabled' => true], key($dataAlumni->id))
            </x-profile-card>
        </x-wireui.modal>

    @endif

    @if (!empty($search))
        {{ $dataAlumnis->withQueryString()->links() }}
    @endif
</div>
