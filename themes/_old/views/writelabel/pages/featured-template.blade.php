@extends('layouts.frontend')

@section('seoDescription') {{ $page->seo_description }} @endsection
@section('seoKeywords') {{ $page->seo_keywords }} @endsection

@section('content')

    <div class="container">

        <div class="jumbotron">
            <img class="thumbnail img-fluid" src="{{ $page->hero_image_url }}" alt="">
        </div>

        <h2>{{ $page->title }}</h2>

        {!! $page->block('main') !!}

        {!! $page->entry !!}

    </div>

@endsection

@section('siravel')
    @edit('pages', $page->id)
@endsection
