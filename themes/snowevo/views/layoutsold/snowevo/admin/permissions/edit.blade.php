@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.permission_edit') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/permissions')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.permissions') }}</a></li>
		<li class="active">{{ trans('admin.permission_edit') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box panel card box-primary panel-primary card-primary">
		<div class="box-body panel-body card-body">
			<form action="{{url('/admin/permissions/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "permission_id" value = "{{$permission->id}}">
				<div class="form-group">
				<label for="">{{ trans('admin.permission') }}</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name" value = "{{$permission->name}}">
				</div>
				<div class="box-footer card-footer">
					<button class = 'btn btn-primary' type = "submit">{{ trans('default.update') }}</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
