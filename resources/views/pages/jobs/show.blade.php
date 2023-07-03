@section('title', 'Job Vacancy')
<x-slot name="header">
    <div class="relative bg-prusblue z-30">
        <div class="max-w-6xl px-12 mx-auto py-5">
            <div class=" flex flex-col">
                <span class="text-white font-bold mr-14 xl:mr-0 text-2xl">{{ strtoupper($job->name) }}</span>
                <span class="text-white mb-0 font-semibold text-lg">{{ $job->company }}</span>
                <hr>
                <span class="text-white mt-2 text-base">{{ $job->type }} Offering Job</span>
                <div class="mt-2 flex flex-col gap-2 sm:flex-row sm:gap-6 sm:items-center text-white">
                    <div>
                        <span class="font-bold mb-0 ">Lokasi</span>
                        <h6 class="font-bold ">
                            <i class="iconoir-city text-sm text-white"></i>
                            <span class="ml-1">{{ $job->location }}</span>
                        </h6>
                    </div>
                    <div>
                        <span class="font-bold mb-0 ">Tanggal Pembukaan</span>
                        <h6 class="font-bold">
                            <i class="iconoir-calendar text-sm text-white"></i>
                            <span class="ml-1">{{ \Carbon\Carbon::parse($job->open)->locale('id')->translatedFormat('d F Y') }}</span>
                        </h6>
                    </div>
                    <div>
                        <span class="font-bold mb-0 ">Tanggal Penutupan</span>
                        <h6 class="font-bold ">
                            <i class="iconoir-calendar text-sm text-white"></i>
                            <span class="ml-1">{{ \Carbon\Carbon::parse($job->close)->locale('id')->translatedFormat('d F Y') }}</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-slot>

<section class="max-w-6xl mx-auto bg-white py-[12px] relative z-40">
    <div class="p-6">
        <div class="mx-auto flex flex-col lg:justify-between lg:flex-row">
            <div class="flex flex-col w-full items-center px-4 lg:w-1/2 xl:w-6/12 mx-auto">
                <div class="flex gap-3 justify-center items-center w-fit pb-4">
                    <img class="shadow-light-lg w-24 aspect-square"
                         src="{{ $job->logo_url }}"
                         alt="Metrodata Academy">
                </div>
                <div class="max-w-[570px] mb-12 lg:mb-0">
                    <div class="text-base text-justify leading-relaxed">
                        {!! $job->description !!}
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-[500px] px-4 lg:-mt-44">
                <div class="bg-white relative border rounded-lg p-8 sm:p-12 shadow-lg">
                    <div class="flex justify-center items-center gap-2 pb-2">
                        @if($job->hasLink)
                            <a href="{{ $job->link }}" class="btn btn-wide bg-gray-300 hover:bg-prusblue hover:text-white">Info Lebih Lanjut
                            </a>
                        @else
                            <a href="https://wa.me/+6281253584528" class="btn btn-wide bg-gray-300 hover:bg-prusblue hover:text-white">Contact Us
                            </a>
                        @endif
                    </div>
                    <ul>
                        @foreach($requirements as $key=>$value)
                            <li class="flex items-center py-3 border-b-2 @if($loop->last) border-none @endif">
                                <div class="text-secondary flex "><i class="iconoir-{{ $value['icon'] }}"></i>
                                </div>
                                <h4 class="mb-0 ms-3 me-auto">{{ ucfirst($key) }}</h4>
                                <div class="flex flex-col gap-1">
                                    @foreach((array) $value['data'] as $data)
                                        <span class="text-secondary text-right">{{ $data }}</span>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
