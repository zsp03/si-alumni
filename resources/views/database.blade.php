<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-20 leading-tight">
            Database Alumni
        </div>
        <div class="font-medium text-base text-gray-800 dark:text-gray-200 leading-tight pt-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Odit ipsa consequatur, illum est cum, expedita
            repudiandae accusamus nesciunt inventore architecto sed
            amet magni facilis eius nulla doloribus rerum commodi
            quibusdam?
        </div>
    </x-slot>

    <div class="bg-white mt-6">
        <div class="p-4 max-w-5xl flex flex-col justify-center mx-auto">
            <div class="flex flex-col">
                <form method="GET" action={{ route('database') }} class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                      <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                        <input
                          type="search"
                          name="search"
                          class="relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                          placeholder="Search"
                          aria-label="Search"
                          aria-describedby="button-addon3" />
                        <button
                          class="relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                          type="submit"
                          id="button-addon3"
                          data-te-ripple-init>
                          Search
                        </button>
                      </div>
                    </div>
                </form>
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                          <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Nama</th>
                            <th scope="col" class="px-6 py-4">Jurusan</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">Instagram</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumni as $item)
                            <tr
                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->jurusan }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->email }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->instagram_account }}</td>
                          </tr>
                            @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

</x-app-layout>
