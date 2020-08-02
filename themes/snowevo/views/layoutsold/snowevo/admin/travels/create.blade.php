@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>
	{{ trans('admin.travel_create') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.dashboard') }}</a></li>
		<li><a href="{{url('/admin/travels')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.travels') }}</a></li>
		<li class="active">{{ trans('admin.travel_create') }}</li>
	</ol>
</section>
<section class="content">
	<div class="box box-primary">
		<div class="box-body">
			<form action="{{url('/admin/travels/store')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name="travel_id">
				<div class="form-group">
					<label for="">{{ trans('default.destine') }}</label>
					<input type="text" name="destine" class="form-control" placeholder="{{ trans('default.destine') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.date_init') }}</label>
					<input type="text" name="date_init" class="form-control" placeholder="{{ trans('default.date_init') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.date_end') }}</label>
					<input type="text" name="date_end" class="form-control" placeholder="{{ trans('default.date_end') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.adults') }}</label>
					<input type="text" name="adults" class="form-control" placeholder="{{ trans('default.adults') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.chieldren') }}</label>
					<input type="text" name="chieldren" class="form-control" placeholder="{{ trans('default.chieldren') }}" required>
				</div>
				<div class="form-group">
					<label for="">{{ trans('default.aparts') }}</label>
					<input type="text" name="aparts" class="form-control" placeholder="{{ trans('default.aparts') }}" required>
				</div>
				<button class = "btn btn-primary" type="submit">{{ trans('default.create') }}</button>
			</form>
		</div>
	</div>
</section>
@endsection
