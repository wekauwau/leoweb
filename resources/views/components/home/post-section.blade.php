<section class="py-3">
    <div class="container max-w-6xl p-6 mx-auto">
        <!--something removed-->
        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <a rel="noopener noreferrer" href="{{ route('post', ['id' => $post->id]) }}"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline">
                    <img role="presentation" class="object-cover w-full rounded h-44"
                        src="images/{{ $post->image->name }}">
                    <div class="p-6 space-y-2">
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                            {{ $post->title }}
                        </h3>
                        <span class="text-xs">
                            {{ $post->published_at }}
                        </span>
                        <p class="line-clamp-3 overflow-ellipsis">
                            {{ $post->content }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="flex justify-center">
            <a href="{{ route($type) }}"
                class="px-6 py-3 text-sm rounded-md hover:underline">
                Lihat {{ $more }} lain
            </a>
        </div>
    </div>
</section>
