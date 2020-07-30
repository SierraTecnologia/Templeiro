@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.permissions') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li class="active">{{ trans('admin.permissions') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box box-primary">
		<div class="box-body">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{url('/admin/permissions/create')}}"><i class="fa fa-plus fa-md" aria-hidden="true"></i> {{ trans('default.new') }}</a>
			<table class="table table-striped">
				<head>
					<th>{{ trans('admin.permission') }}</th>
					<th>{{ trans('default.actions') }}</th>
				</head>
				<tbody>
					@foreach($permissions as $permission)
					<tr>
						<td>{{$permission->name}}</td>
						<td>
							<a href="{{url('/admin/permissions/'.$permission->id.'/edit')}}" class = "btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a href="{{url('/admin/permissions/'.$permission->id.'/delete')}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection
