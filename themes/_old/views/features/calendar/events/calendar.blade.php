@extends('layouts.frontend')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            {!! $calendar->asHtml([ 'class' => 'calendar', 'dates' => $events ]); !!}
            {!! $calendar->links('cal-link btn btn-secondary'); !!}
        </div>
    </div>

@endsection

@section('siravel')
    @edit('events')
@endsection