@extends('layouts.frontend')

@section('content')

<div class="container">

    <h1 class="page-header">{!! trans('features.pageDirectory') !!}</h1>

    <table class="table table-striped">
        @foreach($pages as $page)
            <tr>
                <td><a href="{!! url('page/'.$page->url) !!}">{{ $page->title }}</a></td>
            </tr>
        @endforeach
    </table>

</div>

@endsection

@section('siravel')
    @edit('pages')
@endsection