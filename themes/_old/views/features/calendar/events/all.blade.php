@extends('layouts.frontend')

@section('content')

    <div class="container">

        <h1 class="page-header">{!! trans('features.events') !!}</h1>

        @foreach($events as $event)
            @if (config('app.locale') !== config('siravel.default-language'))
                <a href="{!! url('events/event/'.$event->id) !!}">{{ $event->translationData(config('app.locale'))->title }}</a><br>
            @else
                <a href="{!! url('events/event/'.$event->id) !!}">{{ $event->title }}</a><br>
            @endif
        @endforeach

    </div>

@endsection

@section('siravel')
    @edit('events')
@endsection