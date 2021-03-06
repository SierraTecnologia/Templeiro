@extends('layout.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="page-header">{!! trans('features.settings') !!}</h1>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="profile-image" style="background-image: url(https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=400)"></div>
            </div>
            <div class="col-md-8">
                <form method="POST" action="/user/settings">
                    {!! csrf_field() !!}

                    <div class="col-md-12 form-group">
                        <label>{!! trans('features.email') !!}</label>
                        <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="col-md-12 form-group">
                       <label> {!! trans('features.name') !!}</label>
                        <input class="form-control" type="name" name="name" value="{{ $user->name }}">
                    </div>

                    @include('user.meta')

                    @if ($user->roles->first()->name === 'admin' || $user->id == 1)
                        <div class="col-md-12 form-group">
                           <label> {!! trans('features.role') !!}</label>
                            <select class="form-control" name="role">
                                @foreach(App\Models\Role::all() as $role)
                                    <option @if($user->roles->first()->id === $role->id) selected @endif value="{{ $role->name }}">{{ $role->label }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <div class="col-md-12 form-group">
                        <a class="btn btn-secondary float-left" href="{{ URL::previous() }}">{!! trans('features.cancel') !!}</a>
                        <button class="btn btn-primary float-right" type="submit">{!! trans('features.save') !!}</button>
                        <a class="btn btn-info float-right" href="/user/password">{!! trans('features.changePassword') !!}</a><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
