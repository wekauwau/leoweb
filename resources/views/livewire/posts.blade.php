<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    @foreach ($posts as $post)
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="{{ route('post', ['id' => $post->id]) }}" class="h-52 overflow-y-hidden hover:opacity-75">
                <img src="{{ route('image', [$post->image->name]) }}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="{{ route('post', ['id' => $post->id]) }}" class="text-xl font-bold hover:text-gray-700">
                    {{ $post->title }}
                </a>
                <p class="text-sm pb-3">
                    {{ $post->created_at->format('Y-m-d') }}
                </p>
                <p class="mb-6 overflow-hidden line-clamp-3 overflow-ellipsis">
                    {{ $post->content }}
                </p>
                <a href="{{ route('post', ['id' => $post->id]) }}" class="uppercase text-gray-800 hover:text-black">
                    lanjutkan membaca <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </article>
    @endforeach

    {{ $posts->links() }}

</section>
