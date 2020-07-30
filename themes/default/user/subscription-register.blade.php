@extends('layouts.frontend')

@section('content')

    <div class="row raw-margin-top-72">
        <div class="col-md-4 col-md-offset-4">

            <h1 class="text-center">{!! trans('words..subscription') !!}</h1>

            Para continuar, voce deve aceitar o termo de serviço.

            <form method="POST" action="/subscription">
                {!! csrf_field() !!}

                @include('partials.errors')
                @include('partials.status')

                @if (!empty($plans))
                    <?php 
                    $plansWithFree = $plans->pluck('name', 'id');
                    $plansWithFree->prepend('No plan (free)');
                    ?>
                    <div class="col-md-12 form-group">
                        <label>{!! trans('words.plans') !!}</label>
                        {!! Form::select('plan', $plansWithFree, 2, ['class' => 'form-control']) !!}
                    </div>
                @endif

                {!! Form::checkbox('agree', 'Y') !!}

                <div class="col-md-12 form-group">
                    <button class="btn btn-primary pull-right" type="submit">{!! trans('words.euConcordo') !!}</button>
                </div>
            </form>

        </div>
    </div>

@stop