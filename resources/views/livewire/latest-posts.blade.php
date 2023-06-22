<div class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8 justify-center">
    @foreach($posts as $post)
        <a href="{{ route('post.show', $post->slug) }}" class="bg-white group relative rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform duration-200">
            <div class="relative w-full h-80 md:h-64 lg:h-44">
                <img src="{{ $post->image_featured_url }}"
                     alt="{{ $post->title }}"
                     class="w-full h-full object-center object-cover">
            </div>
            <div class="px-3 py-4">
                <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                    {{ $post->title }}
                </p>
            </div>
        </a>
    @endforeach
</div>
