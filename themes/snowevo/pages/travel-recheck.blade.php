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
//    echo "<b>CheckRates Raw Request <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/CheckRates#request-parameters'>(View Documentation)</a></b><br>";
    echo "<pre>" . json_encode($rqCheckRate, JSON_PRETTY_PRINT) . "</pre>";
    echo "<br><br>";
//    echo "<b>CheckRates Response <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/CheckRates#response-parameters'>(View Documentation)</a></b><br>";
    echo "<table border='1'>";
    echo '<tr><td>'._t('Apart Code').'</td><td>'._t('Apart Name').'</td><td>'._t('Net Price').'</td><td>'._t('Comments').'</td><td>'._t('Rate Key').'</td></tr>';
    foreach ($CheckRateRS->hotel->iterator() as $hotelCode => $hotelData) {
        foreach ($hotelData->rateiterator() as $roomCode => $roomData) {
        echo "<tr>";
            echo '<td>'.$hotelData->code .'</td>';
            echo '<td>'.$hotelData->name .'</td>';
            echo '<td>'.$roomData->net.'</td>';
            echo '<td>'.$roomData->rateComments.'</td>';
            echo "<td><a href=/booking/" .urlencode($roomData->rateKey). ">$roomData->rateKey</a></td>";
            echo "</tr>";
        }
        };
        echo '</table><br><br>';
//    echo "<b>CheckRates Raw Response <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/CheckRates#response-parameters'>(View Documentation)</a></b><br>";
    echo "<pre>" . json_encode($CheckRateRS->hotel->toArray(), JSON_PRETTY_PRINT) . "</pre>";
    ?>
@stop