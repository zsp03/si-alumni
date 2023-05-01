@section('title', $post->title)
<div class="max-w-screen-lg mx-auto">
    <main class="mt-10">
        <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="flex flex-col items-start gap-2 px-4 mb-2 lg:px-0">
                <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                    {{$post->title}}
                </h2>
                <div class="flex gap-4">
                    <a href="#" class="flex gap-2 text-lg text-gray-500 items-center">
                        <i class="iconoir-calendar"></i>
                        <span class="hover:text-gray-800">{{\Carbon\Carbon::parse($post->updated_at)->translatedFormat('F d, Y')}}</span>
                    </a>
                    <a href="#" class="flex gap-2 text-lg text-gray-500 items-center">
                        <i class="iconoir-clock"></i>
                        <span class="hover:text-gray-800">{{\Carbon\Carbon::parse($post->updated_at)->translatedFormat('h:i A')}}</span>
                    </a>
                </div>
                <div class="flex gap-2">
                    @foreach($post->tags as $tag)
                        <a href="#" class="">
                            <x-wireui.badge primary size="lg" label="{{ $tag->name }}"/>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex flex-col">

            <div class="event-content px-4 lg:px-0 text-gray-700 text-lg leading-relaxed w-full prose prose-img:my-0 max-w-none">
                <img src="{{ $post->image_featured_url }}" alt="featured_image" class="pb-6 w-full object-cover lg:rounded" />
                {!! $post->content !!}
            </div>
        </div>
    </main>
    <div class="border-t mt-12 pt-12 px-4 lg:px-0"></div>

    <aside aria-label="Related articles" class="py-8 lg:py-2 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Latest Articles</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Our first office</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has
                        undergone many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 2 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png"
                            class="mb-5 rounded-lg" alt="Image 2">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Enterprise design tips</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has
                        undergone many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 12 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png"
                            class="mb-5 rounded-lg" alt="Image 3">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">We partnered with Google</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has
                        undergone many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 8 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png"
                            class="mb-5 rounded-lg" alt="Image 4">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Our first project with React</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has
                        undergone many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 4 minutes
                    </a>
                </article>
            </div>
        </div>
    </aside>
</div>
