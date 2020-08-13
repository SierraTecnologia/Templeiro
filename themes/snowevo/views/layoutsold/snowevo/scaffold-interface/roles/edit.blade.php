@extends('scaffold-interface.layouts.app')
@section('content')
<section class="content">
	<div class="box card box-primary">
		<div class="box-header card-header">
			<h3>Edit Role</h3>
		</div>
		<div class="box-body card-body">
			<form action="{{url('scaffold-roles/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "role_id" value = "{{$role->id}}">
				<div class="form-group">
				<label for="">Role</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name" value = "{{$role->name}}">
				</div>
				<div class="box-footer card-footer">
					<button class = 'btn btn-primary' type = "submit">Update</button>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection
