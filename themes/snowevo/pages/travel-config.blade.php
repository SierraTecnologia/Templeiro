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
    echo"
    <style>
        table {border-collapse:collapse; table-layout:fixed; width:410px;}
        table td {border:solid 1px #c4e3f3; width:200px; word-wrap:break-word;}
    </style>
    ";
//    echo "<b>Availability Raw Request <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/Availability#request-parameters'>(View Documentation)</a></b><br>";
    echo "<table border='1'><tr><td>";
                echo "<pre>".json_encode($rqData, JSON_PRETTY_PRINT)."</pre>";
                echo "</td></tr></table>";
    echo "<br><br>";
//    echo "<b>Availability Response <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/Availability#response-parameters'>(View Documentation)</a></b><br>";
    echo "<table border='1'>";
        echo "<tr><td>{{ _t('Hotel Code') }}</td><td>{{ _t('Hotel Name') }}</td><td>{{ _t('Apart Name') }}</td><td>{{ _t('Apart Price') }}</td><td>{{ _t('Rate Type') }}</td><td>{{ _t('Rate Key') }}</td></tr>";
    if (!empty($resultTravels)) {
        foreach ($resultTravels as $hotelCode => $hotelData) {
            foreach ($hotelCode['aparts'] as $apartCode => $apartData) {
            foreach ($apartData['rates'] as $rateKey => $rateData) {
            echo "<tr>";
                echo '<td>'.$hotelData['code'].'</td>';
                echo '<td>'.$hotelData['name'].'</td>';
                echo '<td>'.$apartData['name'].'</td>';
                echo '<td>'.$rateData['net'].'</td>';
                echo '<td>'.$rateData['rateType'].'</td>';
                if ($rateData['rateType'] == 'BOOKABLE') {
                    echo "<td><a href=/booking/" .urlencode($rateData['rateKey']). ">".$rateData['rateKey']."</a></td>";
                } else {
                    echo "<td><a href=/recheck/" .urlencode($rateData['rateKey']). ">".$rateData['rateKey']."</a></td>";
                }
                echo "</tr>";
            }
            }
        }
    }
    echo '</table><br><br>';
//    echo "<b>Availability Raw Response <a href='https://developer.hotelbeds.com/docs/read/apitude_booking/Availability#response-parameters'>(View Documentation)</a></b><br>";
//    echo "<pre>".json_encode($availRS->hotels->toArray(), JSON_PRETTY_PRINT)."</pre>"; //Array dump of the hotels Response

    ?>
@stop