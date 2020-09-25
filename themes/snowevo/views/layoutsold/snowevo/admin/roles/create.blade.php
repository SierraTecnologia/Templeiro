@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.role_create') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/roles')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.roles') }}</a></li>
		<li class="active">{{ trans('admin.role_create') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box panel card box-primary panel-primary card-primary">
		<div class="box-body panel-body card-body">
			<form action="{{url('/admin/roles/store')}}" method = "post">
				{!! csrf_field() !!}
				<div class="form-group">
				<label for="">{{ trans('admin.role') }}</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>
				<div class="box-footer card-footer">
					<button class = 'btn btn-primary' type = "submit">{{ trans('default.create') }}</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
