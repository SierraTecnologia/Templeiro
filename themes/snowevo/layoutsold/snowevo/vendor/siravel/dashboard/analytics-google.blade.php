@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">{!! trans('features.dashboard') !!}</h1>

            <div class="row">
                <canvas id="dashboardChart" class="raw100"></canvas>
            </div>

            <div class="row raw-margin-top-24">
                <div class="col-md-4">
                    <p class="lead">{!! trans('features.keywords') !!}</p>
                    <table class="table table-striped">
                        <thead>
                            <th>{!! trans('features.keyword') !!}</th>
                            <th>{!! trans('features.sessions') !!}</th>
                        </thead>
                        @foreach (LaravelAnalytics::getTopKeywords(365, 10) as $word)
                            <tr>
                                <td>{{ $word['keyword'] }}</td>
                                <td>{{ $word['sessions'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-4">
                    <p class="lead">{!! trans('features.mostVisitedPages') !!}</p>
                    <table class="table table-striped">
                        <thead>
                            <th>{!! trans('features.url') !!}</th>
                            <th>{!! trans('features.views') !!}</th>
                        </thead>
                        @foreach (LaravelAnalytics::getMostVisitedPages(365, 10) as $browser)
                            <tr>
                                <td>{{ str_limit($browser['url'], 30) }}</td>
                                <td>{{ $browser['pageViews'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-4">
                    <p class="lead">{!! trans('features.topReferers') !!}</p>
                    <table class="table table-striped">
                        <thead>
                            <th>{!! trans('features.url') !!}</th>
                            <th>{!! trans('features.views') !!}</th>
                        </thead>
                        @foreach (LaravelAnalytics::getTopReferrers(365, 10) as $referers)
                            <tr>
                                <td>{{ str_limit($referers['url'], 30) }}</td>
                                <td>{{ $referers['pageViews'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>

@stop

@section('javascript')
    @parent
    <script type="text/javascript">
        var _chartData = {
            _labels : {!! json_encode($visitStats['date']) !!},
            _visits : {!! json_encode($visitStats['pageViews']) !!}
        };
        var options = {};
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
    <script type="text/javascript" src="{!! SiravelService::asset('js/dashboard-chart.js', 'application/javascript') !!}"></script>
@stop