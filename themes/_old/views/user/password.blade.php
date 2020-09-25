@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="page-header">{!! trans('features.password') !!}</h1>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="profile-image" style="background-image: url(https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=400)"></div>
            </div>
            <div class="col-md-8">
                <form method="POST" action="/user/password">
                    {!! csrf_field() !!}

                    <div class="col-md-12 form-group">
                        <label>{!! trans('features.oldPassword') !!}</label>
                        <input class="form-control" type="password" name="old_password" placeholder="{!! trans('features.oldPassword') !!}">
                    </div>

                    <div class="col-md-12 form-group">
                        <label>{!! trans('features.newPassword') !!}</label>
                        <input class="form-control" type="password" name="new_password" placeholder="{!! trans('features.newPassword') !!}">
                    </div>

                    <div class="col-md-12 form-group">
                        <label>{!! trans('features.confirmPassword') !!}</label>
                        <input class="form-control" type="password" name="new_password_confirmation" placeholder="{!! trans('features.confirmPassword') !!}">
                    </div>

                    <div class="col-md-12 form-group">
                        <a class="btn btn-secondary float-left" href="{{ URL::previous() }}">{!! trans('features.cancel') !!}</a>
                        <button class="btn btn-primary float-right" type="submit">{!! trans('features.save') !!}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@stop
