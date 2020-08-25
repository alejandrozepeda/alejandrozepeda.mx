<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="font-sans text-black leading-tight antialiased bg-white px-6 md:px-16 py-10 flex flex-col min-h-screen">
<header>
    @hasSection('navback')
        @yield('navback')
    @else
        @include('partials.nav')
    @endif
</header>
<main class="mt-10 flex-grow max-w-md prose prose-sm sm:prose lg:prose-lg">
    @yield('content')
</main>
<footer class="mt-10">
    @hasSection('author')
        @yield('author')
    @else
        @include('partials.footer')
    @endif
</footer>
</body>
</html>
