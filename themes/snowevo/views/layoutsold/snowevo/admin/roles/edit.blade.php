@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.role_edit') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/roles')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.roles') }}</a></li>
		<li class="active">{{ trans('admin.role_edit') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box card box-primary">
		<div class="box-body card-body">
			<form action="{{url('/admin/roles/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "role_id" value = "{{$role->id}}">
				<div class="form-group">
				<label for="">{{ trans('admin.role') }}</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name" value = "{{$role->name}}">
				</div>
				<div class="box-footer card-footer">
					<button class = 'btn btn-primary' type = "submit">{{ trans('default.update') }}</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection

