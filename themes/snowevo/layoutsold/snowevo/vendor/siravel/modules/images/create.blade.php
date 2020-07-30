@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <h1 class="page-header">{!! trans('features.images') !!}</h1>
    </div>

    @include('features.images.breadcrumbs', ['location' => ['create']])

    <div class="row">
        {!! Form::open(['url' => 'admin/images/upload', 'files' => true, 'class' => 'dropzone', 'id' => 'fileDropzone']); !!}
        {!! Form::close() !!}

        {!! Form::open(['route' => 'admin.images.store', 'files' => true, 'id' => 'fileDetailsForm', 'class' => 'add']) !!}

            {!! FormMaker::fromTable('files', Config::get('siravel.forms.images')) !!}

            <div class="form-group text-right">
                <a href="{!! URL::to('admin/images') !!}" class="btn btn-default raw-left">{!! trans('features.cancel') !!}</a>
                {!! Form::submit(trans('features.save'), ['class' => 'btn btn-primary', 'id' => 'saveImagesBtn']) !!}
            </div>

        {!! Form::close() !!}
    </div>

@endsection
