@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.hotels') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li class="active">{{ trans('admin.hotels') }}</li>
	</ol>
</section>
<section class="content">
<div class="box panel card box-primary panel-primary card-primary">
	<div class="box-body panel-body card-body">
            <a class="btn btn-primary float-right" style="margin-top: -10px;margin-bottom: 5px" href="{{url('/admin/hotels/create')}}"><i class="fa fa-plus fa-md" aria-hidden="true"></i> {{ trans('default.new') }}</a>
		<table class = "table table-hover">
		<thead>
			<th>{{ trans('default.code') }}</th>
			<th>{{ trans('default.name') }}</th>
			<th>{{ trans('default.actions') }}</th>
		</thead>
		<tbody>
			@foreach($hotels as $hotel)
			<tr>
				<td>{{$hotel->code}}</td>
				<td>{{$hotel->name}}</td>
				<td>
					<a href="{{url('/admin/hotels/'.$hotel->id.'/edit')}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="{{url('/admin/hotels/'.$hotel->id.'/delete')}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</section>
@endsection
