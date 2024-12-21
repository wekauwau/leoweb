<section class="w-full md:w-2/3 flex flex-col items-center px-3">
    <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <div class="bg-white flex flex-col justify-start p-6">
            <img src="{{ route('image', [$post->image->name]) }}" class="mb-10">
            <p class="text-3xl font-bold hover:text-gray-700 pb-4">
                {{ $post->title }}
            </p>
            <p class="text-sm pb-8">
                {{ $post->created_at->format('Y-m-d') }}
            </p>
            <p class="pb-3">
                {{ $post->content }}
            </p>
        </div>
    </article>
</section>
