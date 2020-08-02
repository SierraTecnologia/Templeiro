@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.user_create') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/users')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.users') }}</a></li>
		<li class="active">{{ trans('admin.user_create') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box box-primary">
		<div class="box-body">
			<form action="{{url('/admin/users/store')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "user_id">
				<div class="form-group">
					<label for="">{{ trans('default.email') }}</label>
					<input type="email" name = "email" class = "form-control" placeholder = "Email">
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.name') }}</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.password') }}</label>
					<input type="password" name = "password" class = "form-control" placeholder = "Password">
				</div>
				<button class = "btn btn-primary" type="submit">{{ trans('default.create') }}</button>
			</form>
		</div>
	</div>
</section>
@endsection
