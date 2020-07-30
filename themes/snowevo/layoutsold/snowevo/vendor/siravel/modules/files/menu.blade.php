<div class="row">
    @if (isset($createBtn))
        <a class="btn btn-primary pull-right" href="{!! route('siravel.files.create') !!}">{!! trans('features.addNew') !!}</a>
    @endif
    <div class="raw-m-hide pull-right raw-m-hide">
        {!! Form::open(['url' => 'admin/files/search']) !!}
        <input class="form-control header-input pull-right @if (isset($createBtn)) raw-margin-right-24 @endif" name="term" placeholder="Search">
        {!! Form::close() !!}
    </div>
    <h1 class="page-header">{!! trans('features.files') !!}</h1>
</div>