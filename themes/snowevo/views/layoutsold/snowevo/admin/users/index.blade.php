@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.users') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li class="active">{{ trans('admin.users') }}</li>
	</ol>
</section>
<section class="content">
<div class="box card box-primary">
	<div class="box-body card-body">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{url('/admin/users/create')}}"><i class="fa fa-plus fa-md" aria-hidden="true"></i> {{ trans('default.new') }}</a>
		<table class = "table table-hover">
		<thead>
			<th>{{ trans('default.name') }}</th>
			<th>{{ trans('default.email') }}</th>
			<th>{{ trans('admin.roles') }}</th>
			<th>{{ trans('admin.permissions') }}</th>
			<th>{{ trans('default.actions') }}</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->firstName}} {{$user->lastName}}</td>
				<td>{{$user->email}}</td>
				<td>
				@if(!empty($user->roles))
					@foreach($user->roles as $role)
					<small class = 'label bg-blue'>{{$role->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>{{ trans('admin.no_roles') }}</small>
				@endif
				</td>
				<td>
				@if(!empty($user->permissions))
					@foreach($user->permissions as $permission)
					<small class = 'label bg-orange'>{{$permission->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>{{ trans('admin.no_permissions') }}</small>
				@endif
				</td>
				<td>
					<a href="{{url('/admin/users/'.$user->id.'/edit')}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="{{url('/admin/users/'.$user->id.'/delete')}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</section>
@endsection
