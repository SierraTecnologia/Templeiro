@extends('layouts.frontend')

@section('seoDescription') A delightful collection of posts by me over the years. Feel free to browse through the past and present while I build software for the future. @endsection
@section('seoKeywords') @endsection

@section('content')

<div class="container">

    <h1 class="page-header">{!! trans('features.blog') !!}</h1>

    <div class="row">
        <div class="col-md-8">
            @foreach($blogs as $blog)
                <div class="panel entry-row">
                    <div class="panel-heading">
                        @if (config('app.locale') !== config('siravel.default-language'))
                            @if ($blog->translation(config('app.locale')))
                                <a href="{!! URL::to('blog/'.$blog->translation(config('app.locale'))->data->url) !!}"><p>{!! $blog->translation(config('app.locale'))->data->title !!} - <span>{!! $blog->published_at !!}</span></p></a>
                            @endif
                        @else
                            <a href="{!! URL::to('blog/'.$blog->url) !!}"><p>{!! $blog->title !!} - <span>{!! \Carbon\Carbon::parse($blog->published_at)->format('d M, Y') !!}</span></p></a>
                        @endif
                    </div>
                    <div class="panel-body">
                    {!! str_limit($blog->entry->plain(), 300) !!}
                    </div>
                </div>
            @endforeach

            {!! $blogs !!}
        </div>

        <div class="col-md-4">
            @foreach($tags as $tag)
                <a href="{{ url('blog/tags/'.$tag) }}" class="btn btn-secondary">{{ $tag }}</a>
            @endforeach
        </div>
    </div>

</div>

@endsection

@section('siravel')
    @edit('blog')
@endsection