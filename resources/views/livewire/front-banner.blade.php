<div class="mb-10 py-10 px-0 sm:px-7">
<div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-carousel-slide>
    <!--Carousel indicators-->
    <div class="absolute inset-x-0 bottom-0 z-[2] mb-4 flex list-none justify-center p-0"
         data-te-carousel-indicators>
        @for($i = 0; $i<$banners->count(); $i++)
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="{{ $i }}"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
        @endfor

    </div>

    <!--Carousel items-->
    <div class="relative w-full h-72 sm:h-96  overflow-hidden after:clear-both after:block after:content-[''] rounded-none sm:rounded-xl">
        <!--First item-->
        @forelse($banners as $banner)
            <div class=" relative float-left -mr-[100%] @if(!$loop->first) hidden @endif w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none bg-blue-50"
                 data-te-carousel-fade data-te-carousel-item @if($loop->first) data-te-carousel-active @endif>
                <img src="{{ $banner->image_featured_url }}"
                     class="block w-auto h-auto  max-w-full max-h-full mx-auto object-contain object-center  rounded-md"
                     alt="{{ $banner->title }}" />
            </div>
        @empty
            <div class=" relative float-left -mr-[100%] w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none bg-blue-50"
                 data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                <img src="{{ asset('/assets/image/nobannerplaceholder.png') }}"
                     class="block w-auto h-auto  max-w-full max-h-full mx-auto object-contain object-center  rounded-md"
                     alt="No Banner" />
            </div>
        @endforelse

    </div>

    <!--Carousel controls - prev item-->
    <button
        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="prev">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
    </button>
    <!--Carousel controls - next item-->
    <button
        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
        type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="next">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
        <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
    </button>
</div>
</div>
