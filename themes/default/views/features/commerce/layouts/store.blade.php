@extends('layouts.frontend')

@if (isset($page))
    @section('seoDescription') {{ $page->seo_description }} @endsection
    @section('seoKeywords') {{ $page->seo_keywords }} @endsection
@endif

@section('stylesheets')
    <link rel="stylesheet" href="{!! RiCaService::asset('css/store.css') !!}">
@stop

@section('store-header')

@stop

@section('content')

    <div class="container-fluid">
        <div class="container">
            @yield("store-header")
        </div>
        <div class="container">
            @yield('store-content')
        </div>
    </div>

@stop

@section('pre-javascript')
    @parent
@stop

@section('javascript')
    @parent
    <script src="{!! SiravelService::asset('js/store.js') !!}"></script>
@stop