@extends('layouts.hotelbynow')

@section('head')

    <link rel="stylesheet" href="/assets/css/signin.css">
    <link rel="stylesheet" href="/assets/css/parsley.css">

@stop



@section('javascript')
    <script>
        $( function() {
            $( ".datepicker" ).datepicker();
        } );
    </script>
@stop

@section('content')
    @include('partials.status-panel')

    <?php

    echo "
    <style>
    table {border-collapse:collapse; table-layout:fixed; width:300px;}
   table td {border:solid 1px #c4e3f3; width:200px; word-wrap:break-word;}
    </style>
    ";
//    echo "<b>Booking Raw Request <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/Booking#request-parameters'>(View Documentation)</a></b><br>";
    echo "<pre>".json_encode($rqBookingConfirm, JSON_PRETTY_PRINT)."</pre>";
    echo "<br><br>";
//    echo "<b>Booking Response <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/Booking#response-parameters'>(View Documentation)</a></b><br>";
    echo "<table border='1'>";
    echo "<tr><td>{{ _t('Status') }}</td><td>".$resultTravels->booking->status."</td>";
    echo "<tr><td>{{ _t('Reference') }}</td><td>".$resultTravels->booking->reference."</td>";
    echo "<tr><td>{{ _t('Name') }}</td><td>".$resultTravels->booking->holder['name']."</td>";
    echo "<tr><td>{{ _t('Surname') }}</td><td>".$resultTravels->booking->holder['surname']."</td>";
    echo "<tr><td>{{ _t('Total Net amount') }}</td><td>".$resultTravels->booking->totalNet."</td>";
    echo "<tr><td>{{ _t('Currency') }}</td><td>".$resultTravels->booking->currency."</td>";
    echo '</table><br><br>';
//    echo "<b>Booking Raw Response <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/Booking#response-parameters'>(View Documentation)</a></b><br>";
    echo "<pre>".json_encode($resultTravels->booking->toArray(), JSON_PRETTY_PRINT)."</pre>";

    ?>
@stop