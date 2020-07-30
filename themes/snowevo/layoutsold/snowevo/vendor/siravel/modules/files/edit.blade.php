@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <h1 class="page-header">{!! trans('features.files') !!}</h1>
    </div>

    @include('features.files.breadcrumbs', ['location' => ['edit']])

    <div class="row raw-margin-bottom-48 raw-margin-top-48 text-center">
        <a class="btn btn-default" href="{!! FileService::fileAsDownload($files->name, $files->location) !!}"><span class="fa fa-download"></span> {!! trans('features.download') !!}: {!! $files->name !!}</a>
    </div>

    <div class="row">
        {!! Form::model($files, ['route' => ['siravel.files.update', $files->id], 'files' => true, 'method' => 'patch', 'class' => 'edit']) !!}

            {!! FormMaker::fromObject($files, Config::get('siravel.forms.file-edit')) !!}

            <div class="form-group text-right">
                <a href="{!! URL::to('admin/files') !!}" class="btn btn-default raw-left">{!! trans('features.cancel') !!}</a>
                {!! Form::submit(trans('features.save'), ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>

@endsection

@section('javascript')

    @parent
    <script type="text/javascript" src="{!! SiravelService::asset('js/bootstrap-tagsinput.min.js', 'application/javascript') !!}"></script>
    <script type="text/javascript" src="{!! SiravelService::asset('packages/dropzone/dropzone.js', 'application/javascript') !!}"></script>
    <script type="text/javascript" src="{!! SiravelService::asset('js/files-module.js', 'application/javascript') !!}"></script>
    <script type="text/javascript" src="{!! SiravelService::asset('js/dropzone-custom.js', 'application/javascript') !!}"></script>

@stop

