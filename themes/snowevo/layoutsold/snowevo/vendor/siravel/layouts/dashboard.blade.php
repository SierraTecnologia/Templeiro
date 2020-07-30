@extends('layouts.navigation')

@section('page-content')

    <div class="overlay"></div>

    <div class="raw100 raw-left raw-margin-top-50">
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="raw100 raw-left raw-margin-bottom-90">
                @include('dashboard.panel')
            </div>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="raw100 raw-left navbar navbar-fixed-bottom">
        <div class="raw100 raw-left siravel-footer">
            <p class="raw-margin-left-20 pull-left">{!! trans('features.desenvolvidoPor') !!}: <a href="https://sierratecnologia.com.br">SierraTecnologia Inc.</a></p>
            <p class="raw-margin-right-20 pull-right">v. {{ Siravel::version() }}</p>
        </div>
    </div>
@stop

@section('javascript')
    <script type="text/javascript" src="{!! SiravelService::asset('js/dashboard.js', 'application/javascript') !!}"></script>
    <script type="text/javascript" src="{!! SiravelService::asset('js/chart.min.js', 'application/javascript') !!}"></script>
@stop
