@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.hotel_edit') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/hotels')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.hotels') }}</a></li>
		<li class="active">{{ trans('admin.hotel_edit', ['name' => $hotel->name]) }}</li>
	</ol>
</section>
<section class="content">
	<div class="box panel card box-primary panel-primary card-primary">
		<div class="box-body panel-body card-body">
			<form action="{{url('/admin/hotels/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "hotel_id" value = "{{$hotel->id}}">
				<div class="form-group">
					<label for="">{{ trans('default.code') }}</label>
					<input type="text" name="code" value="{{$hotel->code}}" class="form-control" placeholder="{{ trans('default.code') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.name') }}</label>
					<input type="text" name="name" value="{{$hotel->name}}" class="form-control" placeholder="{{ trans('default.name') }}" required>
				</div>
				<button class = "btn btn-primary" type="submit">{{ trans('default.update') }}</button>
			</form>
		</div>
	</div>
</section>
@endsection
