@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.apart_edit') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/aparts')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.aparts') }}</a></li>
		<li class="active">{{ trans('admin.apart_edit', ['name' => $apart->name]) }}</li>
	</ol>
</section>
<section class="content">
	<div class="box box-primary">
		<div class="box-body">
			<form action="{{url('/admin/aparts/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "apart_id" value = "{{$apart->id}}">
				<div class="form-group">
					<label for="">{{ trans('default.code') }}</label>
					<input type="text" name="code" value="{{$apart->code}}" class="form-control" placeholder="{{ trans('default.code') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.name') }}</label>
					<input type="text" name="name" value="{{$apart->name}}" class="form-control" placeholder="{{ trans('default.name') }}" required>
				</div>
				<button class = "btn btn-primary" type="submit">{{ trans('default.update') }}</button>
			</form>
		</div>
	</div>
</section>
@endsection
