@extends('layouts.main')

@section('content')

    @include('partials.status-panel')

    <div class="jumbotron" style="margin-top:-20px;">
        
        <div class="widget box">

            <div class="widget-header">
                <h4>{{ $poll->question }}</h4>
            </div>

            <div class="widget-content">
                <ul>
                    @foreach ($results as $result)
                        <li><a href="{{{ route('public.vote', array( 'id' => $option->id, )) }}}">{{{$option->name}}}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

@stop