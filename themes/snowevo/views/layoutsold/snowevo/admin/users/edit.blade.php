@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.user_edit') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/users')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.users') }}</a></li>
		<li class="active">{{ trans('admin.user_edit') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box card box-primary">
		<div class="box-body card-body">
			<form action="{{url('/admin/users/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "user_id" value = "{{$user->id}}">
				<div class="form-group">
					<label for="">{{ trans('default.email') }}</label>
					<input type="email" name = "email" value = "{{$user->email}}" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.name') }}</label>
					<input type="text" name = "name" value = "{{$user->name}}" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.password') }}</label>
					<input type="password" name = "password" class = "form-control" placeholder = "{{ trans('default.password') }}" required>
				</div>
				<button class = "btn btn-primary" type="submit">{{ trans('default.update') }}</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box card box-primary">
				<div class="box-header card-header">
					<h3>{{$user->name}} {{ trans('admin.roles') }}</h3>
				</div>
				<div class="box-body card-body">
					<form action="{{url('/admin/users/addRole')}}" method = "post">
						{!! csrf_field() !!}
						<input type="hidden" name = "user_id" value = "{{$user->id}}">
						<div class="form-group">
							<select name="role_name" id="" class = "form-control">
								@foreach($roles as $role)
								<option value="{{$role}}">{{$role}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<button class = 'btn btn-primary'>{{ trans('admin.role_add') }}</button>
						</div>
					</form>
					<table class = 'table'>
						<thead>
							<th>{{ trans('admin.role') }}</th>
							<th>{{ trans('default.action') }}</th>
						</thead>
						<tbody>
							@foreach($userRoles as $role)
							<tr>
								<td>{{$role->name}}</td>
								<td><a href="{{url('/admin/users/removeRole')}}/{{str_slug($role->name,'-')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box card box-primary">
				<div class="box-header card-header">
					<h3>{{$user->name}} {{ trans('admin.permissions') }}</h3>
				</div>
				<div class="box-body card-body">
					<form action="{{url('/admin/users/addPermission')}}" method = "post">
						{!! csrf_field() !!}
						<input type="hidden" name = "user_id" value = "{{$user->id}}">
						<div class="form-group">
							<select name="permission_name" id="" class = "form-control">
								@foreach($permissions as $permission)
								<option value="{{$permission}}">{{$permission}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<button class = 'btn btn-primary'>{{ trans('admin.permission_add') }}</button>
						</div>
					</form>
					<table class = 'table'>
						<thead>
							<th>{{ trans('admin.permission') }}</th>
							<th>{{ trans('default.action') }}</th>
						</thead>
						<tbody>
							@foreach($userPermissions as $permission)
							<tr>
								<td>{{$permission->name}}</td>
								<td><a href="{{url('/admin/users/removePermission')}}/{{str_slug($permission->name,'-')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
