@extends('layouts.main')

@push('title')
    <title>{{ config('app.name') }} - {{ $page->title }}</title>
@endpush

@push('meta_description')
    <meta name="description" content="{{ $page->meta['meta_description'] }}">
@endpush

@section('content')
    {!! $page->content !!}

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
