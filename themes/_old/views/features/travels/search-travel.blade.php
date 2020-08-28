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
    <!--inicio destaque-->
    <section id="destaque">
        <div class="limite">
            <aside class="bloco-principal">
                <ul class="bloco-barra-2">
                    <li rel="reserva"><i class="fas fa-bed"></i> <span>Reservations</span></li>
                    <li rel="acesso-reserva"><i class="fas fa-ticket-alt"></i> <span>Your Reservations</span></li>
                </ul>

                <div id="reserva">
                    <form action="/travel"  method="post">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                    <label for="cidade">
                        <strong>Where are you traveling?</strong>
                        <input type="text" id="destine" name="destine" placeholder="City, airport, address... or hotel!">
                    </label>
                    <label for="check-in" class="largura-50">
                        <strong>Check-in</strong>
                        <i class="fas fa-calendar-alt"></i>
                        <input type="text" id="date_init" name="date_init" class="datepicker" placeholder="00/00/0000">
                    </label>
                    <label for="check-out" class="largura-50">
                        <strong>Check-out</strong>
                        <i class="fas fa-calendar-alt"></i>
                        <input type="text" id="date_end" name="date_end" class="datepicker" placeholder="00/00/0000">
                    </label>
                    <label for="data">
							<span>
								<input type="checkbox" id="data" name="data"> I'm flexible on dates
							</span>
                    </label>
                    <label for="ocupacao">
                        <strong>Occupany</strong>
                        <select name="ocupacao" id="ocupacao">
                            <option value="1  rooms, 1 Adults, 0 Children, 0 babies" selected="selected">1  rooms, 1 Adults, 0 Children, 0 babies</option>
                            <option value="1  rooms, 2 Adults, 0 Children, 0 babies">1  rooms, 2 Adults, 0 Children, 0 babies</option>
                        </select>
                    </label>
                    {{--<label for="promocao">--}}
							{{--<span>--}}
								{{--<input type="checkbox" id="promocao" name="promocao"> Promotional code--}}
							{{--</span>--}}
                    {{--</label>--}}
                    <button type="submit">Search for a hotel</button>
                    </form>
                </div>

                <div id="acesso-reserva">
                    <p>To change or cancel your reservation, please complete the following fields</p>
                    <label for="book-number">
                        <strong>Booking Number</strong>
                        <input type="text" id="book-number" name="book-number">
                    </label>

                    <label for="email">
                        <strong>Email</strong>
                        <input type="text" id="email" name="email">
                    </label>
                    <button>Find my reservation</button>
                </div>
            </aside>

            <aside class="bloco-texto">
                <h2>Your next escape is arriving!</h2>
            </aside>
        </div>
    </section>

    <!--inicio -->
    <section id="informacoes">
        <div class="limite">
            <ul>
                <li class="bg-porcento"><a href="">
                        <h2>Exclusive Rates for ByNow Rewards Members</h2>
                        <p>Take advantage of special rates and offers available only to program members</p>
                    </a></li>
                <li class="bg-mobile">
                    <a href="">
                        <h2>ByNow Hotels Mibile App</h2>
                        <p>See all the results ordered by price, distance, or guest ratings as well as so much more</p>
                    </a>
                </li>
                <li class="bg-garantia">
                    <a href="">
                        <h2>Best Price Guaranteed</h2>
                        <p>Book directly with us and get the lowest rate available!</p>
                    </a>
                </li>
            </ul>

        </div>
    </section>
@stop