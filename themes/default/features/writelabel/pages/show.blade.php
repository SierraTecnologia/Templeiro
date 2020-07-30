@extends('layouts.frontend')

@section('seoDescription') {{ $page->seo_description }} @endsection
@section('seoKeywords') {{ $page->seo_keywords }} @endsection

@section('content')

<div class="container">

    <h1 class="page-header">{!! $page->title !!}</h1>

    <div class="entry-row">
        {!! $page->entry !!}
    </div>

</div>

@endsection

@section('siravel')
    @edit('pages', $page->id)
@endsection
