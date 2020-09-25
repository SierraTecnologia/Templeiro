@extends('siravel-frontend::layouts.master')

@section('content')

<div class="container">

    <h1>Gallery ({{ $title }})</h1>

    <div class="col-md-8">
        @foreach ($images as $image)
            <img alt="{{ $image->alt_tag }}" src="{{ $image->url }}" />
        @endforeach
    </div>
    <div class="col-md-4">
        @foreach($tags as $tag)
            <a href="{{ url('gallery/'.$tag) }}" class="btn btn-secondary">{{ $tag }}</a>
        @endforeach
    </div>

</div>

@endsection

@section('siravel')
    <li class="nav-text">@edit('images')</li>
@endsection