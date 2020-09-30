@extends('layouts.main')

@push('title')
    <title>{{ config('app.name') }}</title>
@endpush

@push('meta_description')
    <meta name="description" content="Hola, soy Alejandro Zepeda, ingeniero de software, apasionado de la programación web y creación de side-projects.">
@endpush

@section('content')
    {!! $page->content !!}
@endsection
