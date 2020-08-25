@extends('layouts.main')

@push('title')
    <title>{{ config('app.name') }}</title>
@endpush

@push('meta_description')
    <meta name="description" content="Hola, soy Alejandro Zepeda, ingeniero de software, apasionado por la programación web, la comunidad maker y la creación de side-projects.">
@endpush

@section('content')
    {!! $page->content !!}
@endsection
