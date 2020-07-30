@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.travels') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li class="active">{{ trans('admin.travels') }}</li>
	</ol>
</section>
<section class="content">
<div class="box box-primary">
	<div class="box-body">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{url('/admin/travels/create')}}"><i class="fa fa-plus fa-md" aria-hidden="true"></i> {{ trans('default.new') }}</a>
		<table class = "table table-hover">
		<thead>
			<th>{{ trans('default.user') }}</th>
			<th>{{ trans('default.destine') }}</th>
			<th>{{ trans('default.date_init') }}</th>
			<th>{{ trans('default.date_end') }}</th>
			<th>{{ trans('default.adults') }}</th>
			<th>{{ trans('default.chieldren') }}</th>
			<th>{{ trans('default.aparts') }}</th>
			<th>{{ trans('default.actions') }}</th>
		</thead>
		<tbody>
			@foreach($travels as $travel)
			<tr>
				<td><?php
					if (!empty($travel->user_id)) {
					    echo \App\Models\User::find($travel->user_id)->fullName();
					} else {
					    echo 'Não cadastrado';
					}
				?></td>
				<td>{{$travel->destine}}</td>
				<td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $travel->date_init)->toFormattedDateString()}}</td>
				<td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $travel->date_end)->toFormattedDateString()}}</td>
				<td>{{$travel->adults}}</td>
				<td>{{$travel->chieldren}}</td>
				<td>{{$travel->aparts}}</td>
				<td>
					<a href="{{url('/admin/travels/'.$travel->id.'/edit')}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="{{url('/admin/travels/'.$travel->id.'/delete')}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</section>
@endsection
