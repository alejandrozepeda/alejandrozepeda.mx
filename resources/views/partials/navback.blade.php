<nav class="bg-white">
    <div class="flex items-center justify-between flex-wrap">
        <span class="text-black font-extrabold leading-none text-xl lg:text-3xl lg:leading-tight">
            {{ $post->title }}
        </span>
    </div>

    <a href="{{ route('posts.index') }}" class="block uppercase mt-4 tracking-wide text-sm font-semibold no-underline text-gray-600">
        👈 Atrás
    </a>
</nav>
