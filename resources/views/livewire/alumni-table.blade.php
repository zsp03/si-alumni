<div class="flex flex-col gap-4">

    <div class="relative">
        <input wire:model="search"
               type="text"
               class="py-3 px-4 pl-11 block w-full sm:w-1/2 lg:w-1/3 border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
               placeholder="Ketik Nama...">
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

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
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
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                Instagram
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @if(!empty($search))
                            @foreach($dataAlumnis as $alumni)
                                <tr wire:click="showUserProfileCard({{$alumni->id}})" class="hover:bg-gray-300">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $alumni -> name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $alumni -> jurusan }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $alumni -> email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a class="text-blue-500 hover:text-blue-700"
                                           href="https://instagram.com/{{ substr(($alumni -> instagram_account), 1)}}"
                                           target="_blank">
                                            {{ $alumni -> instagram_account }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
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
            <a href="{{ route('profile.show') }}"
               class=" btn rounded-lg min-h-[40px] h-fit bg-prusblue normal-case border-none text-sm font-medium text-white shadow-md">
                Kirim Pesan</a>
        </x-profile-card>
    </x-wireui.modal>
    @endif

    @if (!empty($search))
        {{ $dataAlumnis->withQueryString()->links() }}
    @endif
</div>
