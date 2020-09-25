@extends('layouts.frontend')

@section('content')

    <div class="container">

        <h1 class="page-header">{!! trans('features.midia.gallery') !!}</h1>

        <div class="col-md-6">
            @foreach ($images as $image)
                <img class="thumbnail img-fluid" alt="{{ $image->alt_tag }}" src="{{ $image->getLinkPreview() }}" />
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach($tags as $tag)
                <a href="{{ url('gallery/'.$tag) }}" class="btn btn-secondary">{{ $tag }}</a>
            @endforeach
        </div>

    </div>

@endsection

@section('siravel')
    @edit('images')
@endsection