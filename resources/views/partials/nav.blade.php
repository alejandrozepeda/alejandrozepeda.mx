<nav x-data="{ open: false }" class="bg-white">
    <div class="flex items-center justify-between flex-wrap">
        <a href="{{ route('index') }}" class="text-black font-extrabold leading-none text-xl lg:text-3xl lg:leading-tight">
            🤠 {{ config('app.name') }}
        </a>

        <div class="block md:hidden flex items-center">
            <button @click="open = true" class="h-5 w-5 text-black">
                <svg x-show="!open" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
                <svg x-show="open" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open" @click.away="open = false">
        @foreach($pages as $page)
            <a href="/{{ $page->slug }}"
               class="block uppercase mt-4 tracking-wide text-sm font-semibold no-underline {{ (request()->is($page->slug . '*')) ? 'text-black' : 'text-gray-600' }}">
                {{ $page->title }}
            </a>
        @endforeach
    </div>

    <div class="hidden md:flex">
        @foreach($pages as $page)
            <a href="/{{ $page->slug }}"
               class="uppercase mt-4 mr-4 tracking-wide text-sm hover:text-black font-semibold no-underline {{ (request()->is($page->slug . '*')) ? 'text-black' : 'text-gray-600' }}">
                {{ $page->title }}
            </a>
        @endforeach
    </div>
</nav>


