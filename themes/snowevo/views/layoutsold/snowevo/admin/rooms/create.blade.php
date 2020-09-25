@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.room_create') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/aparts')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.aparts') }}</a></li>
		<li class="active">{{ trans('admin.room_create') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box panel card box-primary panel-primary card-primary">
		<div class="box-body panel-body card-body">
			<form action="{{url('/admin/aparts/store')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name="room_id">
				<div class="form-group">
					<label for="">{{ trans('default.code') }}</label>
					<input type="text" name="code" class="form-control" placeholder="{{ trans('default.code') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.name') }}</label>
					<input type="text" name="name" class="form-control" placeholder="{{ trans('default.name') }}" required>
				</div>
				<button class = "btn btn-primary" type="submit">{{ trans('default.create') }}</button>
			</form>
		</div>
	</div>
</section>
@endsection
