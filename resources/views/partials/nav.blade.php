<nav class="bg-white">
    <div class="flex items-center justify-between flex-wrap">
        <a href="{{ route('index') }}" class="text-black font-extrabold leading-none text-xl lg:text-3xl lg:leading-tight">
            🤠 {{ config('app.name') }}
        </a>
    </div>

    <div class="flex">
        @foreach($pages as $page)
            <a href="/{{ $page->slug }}"
               class="uppercase mt-4 mr-3 tracking-wide text-sm hover:text-black font-semibold no-underline {{ (request()->is($page->slug . '*')) ? 'text-black font-bold' : 'text-gray-600' }}">
                {{ $page->title }}
            </a>
        @endforeach
    </div>
</nav>


