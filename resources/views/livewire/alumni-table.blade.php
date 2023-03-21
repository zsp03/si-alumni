<div class="flex flex-col gap-4">

    <input type="text" placeholder="Ketik nama..." wire:model="search"
        class="input input-bordered w-full max-w-xs self-center h-10" />
    <div class="overflow-x-auto flex flex-col gap-3">
        <div class="flex flex-col gap-3">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="first:!relative">Nama</th>
                        <th>Program Studi</th>
                        <th>Email</th>
                        <th>Instagram</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($search))
                        @foreach ($dataAlumni as $item)
                            <tr wire:loading.class="hidden">
                                <th class="first:!relative">{{ $item->name }}</th>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->instagram_account }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div wire:loading class="p-4 self-center items-center justify-center">
                <div class="inline-block h-8 w-8 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                    role="status">
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                </div>
            </div>
        </div>
        @if (!empty($search))
            {{ $dataAlumni->withQueryString()->links() }}
        @endif
    </div>
</div>
