@extends('siravel-frontend::layouts.master')

@section('seoDescription') {{ $blog->seo_description }} @endsection
@section('seoKeywords') {{ $blog->seo_keywords }} @endsection

@section('content')

    <div class="container">

        <h1 class="page-header">{!! $blog->title !!} <span class="float-right">{!! \Carbon\Carbon::parse($blog->published_at)->format('d M, Y') !!}</span></h1>
@widget('test')
        <div class="entry-row">
            {!! $blog->entry !!}
        </div>

    </div>

@endsection

@section('siravel')
    <li class="nav-text">@edit('blog', $blog->id)</li>
@endsection
