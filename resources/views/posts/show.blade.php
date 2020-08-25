@extends('layouts.main')

@include('partials.meta')

@section('navback')
    @include('partials.navback')
@endsection

@section('content')
    {!! $post->content !!}
@endsection

@section('author')
    @include('partials.author')
@endsection
