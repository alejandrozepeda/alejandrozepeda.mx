@extends('layouts.main')

@section('content')
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
        <span>Posted on {{ $post->publish_date->format('dS M Y') }}</span>
        <p>{{ $post->excerpt }}</p>
    @endforeach

    {{ $posts->links() }}
@endsection
