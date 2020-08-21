<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    <livewire:styles/>
</head>
<body class="font-sans text-black leading-tight antialiased bg-white">
<header>
    @include('partials.nav')
</header>
<div class="px-6 py-4">
    <main>
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</div>
<livewire:scripts/>
</body>
</html>
