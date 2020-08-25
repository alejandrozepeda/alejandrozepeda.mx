@push('title')
    <title>{{ $post->title }} - {{ config('app.name') }}</title>
@endpush

@push('meta_description')
    <meta name="description" content="{{ $post->meta['meta_description'] }}">
@endpush

@push('opengraph')
    <meta property="og:url" content="{{ route('posts.show', $post->slug) }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $post->meta['opengraph_title'] }}"/>
    <meta property="og:description" content="{{ $post->meta['opengraph_description'] }}"/>
    <meta property="og:image" content="{{ $post->meta['opengraph_image'] }}"/>
    <meta property="og:site_name" content="Alejandro Zepeda"/>
@endpush

@push('twitter')
    <meta name="twitter:title" content="{{ $post->meta['twitter_title'] }}">
    <meta name="twitter:description" content="{{ $post->meta['twitter_description'] }}">
    <meta name="twitter:image" content="{{ $post->meta['twitter_image'] }}">
    <meta name="twitter:site" content="@alejandrozepe">
    <meta name="twitter:creator" content="@alejandrozepe">
@endpush
