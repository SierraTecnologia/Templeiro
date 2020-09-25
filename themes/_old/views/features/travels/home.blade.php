@extends('layouts.snowevo')

@section('content')

    @include('partials.status-panel')
    <section class="banner-main-bg" id="home">
        <section class="banner-main">
            <div id="main-slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <figure><img src="img/farinha-banner-3-lo.jpg" alt="BANNER" width="1280" height="848" /></figure>
                    </li>
                    <li>
                        <figure><img src="img/snowevov2/2alps.jpg" alt="BANNER" width="1280" height="848" /></figure>
                    </li>
                    <li>
                        <figure><img src="img/snowevov2/Les2Alpes-Advertorial-CREDIT-BRUNO-LONGO.jpg" alt="BANNER" width="1280" height="848" /></figure>
                    </li>
                    <li>
                        <figure><img src="img/snowevov2/GV_portada.jpg" alt="BANNER" width="1280" height="848" /></figure>
                    </li>
                </ul>
            </div>

            <div class="banner-txt">
                <div class="banner-outer">
                    <div class="banner-inner">
                        <div class="container">
                            <aside>
                                <h1>SNOW EVOLUTION</h1>
                                <div id="third-slider" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <h2>{!! trans('snowevo.temporada') !!} <strong>2018</strong></h2>
                                        </li>
                                        <li>
                                            <h2>{!! trans('snowevo.pirineusEAlpes') !!}</h2>
                                        </li>
                                        <li>
                                            <h2><a href="mailto:info@snowevo.com" class="btn">info@snowevo.com</a></h2>
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://www.facebook.com/pg/snowevo/shop/" target="_BLANK" class="btn btn-txt">{!! trans('snowevo.onlineShop') !!}</a>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- O CONCEITO -->
        <section class="sr-top1" id="linkfeatures">
            <section class="sr-top" id="conceito">
                <section class="section-11">
                    <section class="container">
                        <div class="heading-txt">
                            <aside>
                                <h1>SnowEVO</h1>
                                <p id="slogan">{!! trans('snowevo.slogan') !!}</p>
                            </aside>
                        </div>

                        <article>
                            <div class="icon grow"><i class="fa fa-tree"></i></div>
                            <aside id="dot11">
                                <h3>{!! trans('snowevo.estacoesDeSki') !!}<br /></h3>
                                <p>
                                    {!! trans('snowevo.estacoesDeSkiSobre') !!}<br/>
                                    <span style="font-weight:bold">{!! trans('snowevo.andorra') !!}</span> - {!! trans('snowevo.pirineus') !!}<br><a class="visible-links" href="http://www.grandvalira.com/sites/default/files/files/Mapa%20Grandvalira%20Andorra%202015-16_v4_es.pdf" target="_blank">Grandvalira</a> (220km)
                                    <a class="visible-links" href="http://www.vallnord.com/mapa-pistas-vallnord.html" target="_blank">Vallnord</a> (93km)
                                    <br>
                                    <span style="font-weight:bold">{!! trans('snowevo.espanha') !!}/Catalunya/Cerdanya</span> - {!! trans('snowevo.pirineus') !!}
                                    <br><a class="visible-links" href="http://www.masella.com/uploads/arxius/FT_ALP2500CAT_2015.pdf" target="_blank">Alp2500</a> (135km)
                                    <br/>
                                    <span style="font-weight:bold">{!! trans('snowevo.franca') !!}/Cerdanya</span> - {!! trans('snowevo.pirineus') !!}<br/>
                                    <a class="visible-links" href="http://www.font-romeu.fr/themes/ftromeuhookipa/img/PLAN_DE_PISTES_1617.jpg" target="_blank">Font Romeu</a> (111km)
                                    <br/>
                                    <span style="font-weight:bold">{!! trans('snowevo.franca') !!}</span> - Alpes<br>
                                    <a class="visible-links" href="http://www.les2alpes.com/fr/le-domaine-skiable.html" target="_blank">Les Deux Alpes</a> (230km)<br/>
                                    <a class="visible-links" href="http://www.valthorens.com/pdf/plans/ski/Plan_3_Vallees_2015-16_BD.pdf" target="_blank">Trois Vallées</a> (600km)
                                    <br/>
                                    <a class="visible-links" href="http://www.portesdusoleil.com/fileadmin/user_upload/Plan_des_Pistes_2016-2017.pdf" target="_blank">Portes du Soleil</a> (630km)
                                    <br/>
                                    {!! trans('snowevo.estacoesDeSkiNaoEncontrado', ['link' => '<a class="visible-links" href="#contact">'. trans('snowevo.aqui') .'</a>']) !!}<br/>
                                </p>
                            </aside>
                        </article>

                        <article>
                            <div class="icon grow"><i class="fa fa-bed"></i></div>
                            <aside id="dot9">
                                <h3>{!! trans('snowevo.hospedagem') !!}<br />
                                </h3>
                                <p>{!! trans('snowevo.hospedagemSobre', ['link' => '<a class="visible-links" href="#contact">'.trans('snowevo.aqui').'</a>']) !!}</p>
                            </aside>
                        </article>


                        <article>
                            <div class="icon grow"><i class="fa fa-thumbs-o-up"></i></div>
                            <aside id="dot8">
                                <h3>{!! trans('snowevo.equipamento') !!} - {!! trans('snowevo.ski') !!}/{!! trans('snowevo.snowboard') !!}<br />
                                </h3>
                                <p>{!! trans('snowevo.equipamentoSobre') !!}</p>

                            </aside>
                        </article>

                        <article>
                            <div class="icon grow"><i class="fa fa-line-chart"></i></div>
                            <aside id="dot7">
                                <h3>{!! trans('snowevo.escola') !!} - {!! trans('snowevo.ski') !!}/{!! trans('snowevo.snowboard') !!} <br /></h3>
                                <p>{!! trans('snowevo.escolaSobre', [
                                'link' => '<a class="visible-links" href="#contact">'.trans('snowevo.aqui').'</a>']) !!}</p>
                            </aside>
                        </article>


                        <article>
                            <div class="icon grow"><i class="fa fa-plane"></i></div>
                            <aside id="dot6">
                                <h3>{!! trans('snowevo.transporte') !!}<br />
                                    <span></span></h3>
                                <p>{!! trans('snowevo.transporteSobre', ['link' => '<a class="visible-links" href="#contact">'.trans('snowevo.aqui').'</a>']) !!}</p>
                            </aside>
                        </article>



                        <article>
                            <div class="icon grow"><i class="fa fa-users"></i></div>
                            <aside id="dot10">
                                <h3>{!! trans('snowevo.atividadesLocais') !!}<br />
                                    <span></span></h3>
                                <p>{!! trans('snowevo.atividadesLocaisSobre') !!}</p>
                            </aside>
                        </article>

                    </section>
                </section>
            </section>
        </section>



        <!-- SNOWTRIPS -->
        <section class="sr-top" id="snowtrips">
            <section class="section-8">
                <section class="container">
                    <div class="heading-txt">
                        <aside>
                            <h1>{!! trans('snowevo.snowtrips') !!}</h1>
                        </aside>
                    </div>

                    <article>
                        <aside class>
                            <h2>{!! trans('snowevo.pagueComPaypal') !!}</h2>
                            <div class="box panel car">
                                <a class="fancybox icon-zoom" href="{!! Siravel::img_lang('img/media/2016/card1.png') !!}" data-fancybox-group="snowtrip_card1" title="{!! trans('snowevo.pagueComPay') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card1.png') !!}"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.rapido') !!}</li>
                                <li>{!! trans('snowevo.facil') !!}</li>
                                <li>{!! trans('snowevo.seguro') !!}</li>
                                <li>Paypal.me</li>
                            </ul>
                            <a href="https://www.paypal.me/snowevo" target="_BLANK" class="btn">PAYPAL</a>
                        </aside>

                        <aside class>
                            <h2>{!! trans('snowevo.pagueComPay') !!}</h2>
                            <div class="box panel car">
                                <a class="fancybox icon-zoom" href="{!! Siravel::img_lang('img/media/2016/card2.png') !!}" data-fancybox-group="snowtrip_card2" title="Açaí em Andorra"><img src="{!! Siravel::img_lang('img/media/2016/card2.png') !!}"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.rapido') !!}</li>
                                <li>{!! trans('snowevo.facil') !!}</li>
                                <li>{!! trans('snowevo.seguro') !!}</li>
                                <li>Banc Sabadell d'Andorra</li>
                            </ul>
                            <a href="https://www.bsandorra.com/cs/Satellite/BSAndorra//6000016723002/{{ App::getLocale() }}/" target="_BLANK" class="btn">PAYLINK</a>
                        </aside>


                        <aside class>
                            <h2>LES DEUX ALPES<br/>{!! trans('snowevo.franca') !!}</h2>
                            <div class="box panel car">
                                {!! trans('snowevo.summercamps') !!}
                                <p><strong>Chalet</strong></p>
                                <a class="fancybox icon-zoom" href="img/media/2016/card3.png" data-fancybox-group="snowtrip_card3" title="LES DEUX ALPES {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card3.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card3a.png') !!}" data-fancybox-group="snowtrip_card3" title="LES DEUX ALPES {!! trans('snowevo.franca') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card3a.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card3b.png') !!}" data-fancybox-group="snowtrip_card3" title="LES DEUX ALPES {!! trans('snowevo.franca') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card3b.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card3c.png') !!}" data-fancybox-group="snowtrip_card3" title="LES DEUX ALPES {!! trans('snowevo.franca') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card3c.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card3d.png') !!}" data-fancybox-group="snowtrip_card3" title="LES DEUX ALPES {!! trans('snowevo.franca') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card3d.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card3e.png') !!}" data-fancybox-group="snowtrip_card3" title="LES DEUX ALPES {!! trans('snowevo.franca') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card3e.png') !!}"></a>
                            </div>
                            <ul>
                                <li>23/06 - 26/08</li>
                                <li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>
                                <li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!} Glaciar</li>
                                <li>Snowpark Progressivo</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>
                        </aside>
                    </article>

                    <article>

                        <aside class>
                            <h2>FRONTERA BLANCA<br/>GRANDVALIRA 19</h2>
                            <div class="box panel car">
                                Pas de la Casa<h1>290€</h1>
                                <p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>
                                <a class="fancybox icon-zoom" href="img/media/2016/card4.png" data-fancybox-group="snowtrip_card4" title="FRONTERA BLANCA GRANDVALIRA"><img src="img/media/2016/card4.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card4a.png') !!}" data-fancybox-group="snowtrip_card4" title="FRONTERA BLANCA GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card4a.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card4b.png') !!}" data-fancybox-group="snowtrip_card4" title="FRONTERA BLANCA GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card4b.png') !!}"></a>
                            </div>
                            <ul>
                                <li>01/12 - 23/12</li>
                                <li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>
                                <li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>
                                <li>{!! trans('snowevo.assistenciaLocal') !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>

                        </aside>
                        <aside class>
                            <h2>HOTEL CARIBOU<br/>GRANDVALIRA 19</h2>
                            <div class="box panel car">
                                Pas de la Casa<h1>650€</h1>
                                <p><strong>****</strong></p>
                                <p></p>
                                <a class="fancybox icon-zoom" href="img/media/2016/card5.png" data-fancybox-group="snowtrip_card5" title="HOTEL CARIBOU GRANDVALIRA"><img src="img/media/2016/card5.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card5a.png') !!}" data-fancybox-group="snowtrip_card5" title="HOTEL CARIBOU GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card5a.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card5b.png') !!}" data-fancybox-group="snowtrip_card5" title="HOTEL CARIBOU GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card5b.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card5c.png') !!}" data-fancybox-group="snowtrip_card5" title="HOTEL CARIBOU GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card5c.png') !!}"></a>
                            </div>
                            <ul>
                                <li>03/02 - 10/03</li>
                                <li>7 Nights Halfboard</li>
                                <li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>
                                <li>{!! trans('snowevo.assistenciaLocal') !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>
                        </aside>
                        <aside class>
                            <h2>HOTEL SKI PLAZA<br/>GRANDVALIRA</h2>
                            <div class="box panel car">
                                Pas de la Casa<h1>880€</h1>
                                <p><strong>*****</strong></p>
                                <p></p>
                                <a class="fancybox icon-zoom" href="{!! Siravel::img_lang('img/media/2016/card6.png') !!}" data-fancybox-group="snowtrip_card6" title="HOTEL SKI PLAZA - GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card6.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card6a.png') !!}" data-fancybox-group="snowtrip_card6" title="HOTEL SKI PLAZA - GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card6a.png') !!}"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="{!! Siravel::img_lang('img/media/2016/card6b.png') !!}" data-fancybox-group="snowtrip_card6" title="HOTEL SKI PLAZA - GRANDVALIRA"><img src="{!! Siravel::img_lang('img/media/2016/card6b.png') !!}"></a>
                            </div>
                            <ul>
                                <li>27/12 - 03/01</li>
                                <li>7 Nights Breakfast</li>
                                <li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>
                                <li>{!! trans('snowevo.assistenciaLocal') !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>
                        </aside>
                    </article>











<?php /*
                    {{ $contador = 0 }}
                    @foreach ($cards as $card)
                        {{ $contador = $contador+1 }}
                        <article>
                            <aside class>
                                <h2>{{ $card->title }}<br/>{{ $card->description }}</h2>
                                <div class="box panel car">
                                    {{ $card->subTitle }}<h1>{{ $card->price }}€</h1>
                                    <p><strong>{{ $card->subDescription }}</strong></p>
                                    <a class="fancybox icon-zoom" href="{!! Siravel::img_lang($card->image) !!}" data-fancybox-group="snowtrip_card{{ $contador }}" title="{!! $card->imagesTitle !!}"><img src="{{ $card->image }}"></a>
                                    @foreach ($card->slides as $cardSlide)
                                        <a class="fancybox icon-zoom" href="{!! Siravel::img_lang($card->image) !!}" data-fancybox-group="snowtrip_card{{ $contador }}" title="{!! $card->imagesTitle !!}"><img src="{{ $card->image }}"></a>
                                    @endforeach
                                </div>
                                <ul>
                                    <li>{{ $card->text1 }}</li>
                                    <li>{{ $card->text2 }}</li>
                                    <li>{{ $card->text3 }}</li>
                                    <li>{{ $card->text4 }}</li>
                                </ul>
                                <a href="{{ $card->buttonLink }}" class="btn">{{ $card->buttonName }}</a>
                            </aside>
                        </article>
                    @endforeach
                    */ ?>
                </section>
            </section>
<?php /*
            <!--<section class="call-action">
                <section class="container image-center">
                <aside>
                    <img src="img/snowtrips_grupos_andorra_grandvalira.jpg" alt="Descontos especiais para grupos a partir de 8 pessoas!" width=100% />
                </aside>
                </section>
            </section>-->

            <!--
            <section class="call-action">
                    <section class="container image-center">
                    <aside>

            <link href="http://www.snow-forecast.com/stylesheets/feed.css" media="screen" rel="stylesheet" type="text/css" />
                        <div id="wf-weatherfeed">
                        <iframe style="overflow:hidden;border:none;" allowtransparency="true" height="272" width="469" src="http://www.snow-forecast.com/resorts/Pas-de-la-Casa/forecasts/feed/mid/m" scrolling="no" frameborder="0" marginwidth="0" marginheight="0">
                            <p>Your browser does not support iframes.</p>
                        </iframe>
                        <div id="wf-link">
                            <a href="http://www.snow-forecast.com/">
                            <img alt="Snow Forecast" src="http://www.snow-forecast.com/images/feed/snowlogo-150.png"/>
                            </a>
                            <p id="cmt">View detailed snow forecast for <a href="http://www.snow-forecast.com/resorts/Pas-de-la-Casa?utm_source=embeddable&amp;utm_medium=widget&amp;utm_campaign=Pas-de-la-Casa">Grandvalira-{!! trans('snowevo.pasDeLaCasa') !!}</a> at:<br /><a href="http://www.snow-forecast.com/resorts/Pas-de-la-Casa?utm_source=embeddable&amp;utm_medium=widget&amp;utm_campaign=Pas-de-la-Casa"><strong>snow-forecast.com</strong></a></p><div style="clear: both;"></div>
                        </div>
                        </div>

                    </aside>
                    </section>
                </section>


                <section class="call-action">
                    <section class="container">
                    <aside>
                        <h3>SNOWTRIPS 2016 BREVEMENTE! </h3>
                        <p>Até lá, para qualquer orçamento contacte-nos!</p>
                    </aside>
                    <a href="mailto:info@snowevo.com" class="btn">Contate-nos</a> </section>
                </section>

                <section class="call-action">
                    <section class="container">
                    <aside>
                        <h3>Qual o resort onde gostaria de treinar?</h3>
                        <p>Encontraremos a melhor opção para satisfazer a sua Adrenalina.</p>
                    </aside>
                    <a href="mailto:info@snowevo.com" class="btn">Contate-nos</a> </section>
                </section>
                --> */ ?>
        </section>


        <section class="sr-top" id="media">
            <section class="section-8 white">
                <section class="container">
                    <div class="heading-txt">
                        <aside>
                            <h1>{!! trans('snowevo.socialMedia') !!}</h1>
                            <p>Snow Evolution</p>
                            <div class="media-detail">
                                <a href="https://facebook.com/snowevo" target="_blank">
                                    <div class="large-icon-media grow">
                                        <i class="fa fa-4x fa-facebook-square"></i><br>snowevo
                                    </div>
                                </a>
                                <a href="http://instagram.com/snowevo?ref=badge" target="_blank">
                                    <div class="large-icon-media grow">
                                        <i class="fa fa-4x fa-instagram"></i><br>snowevo
                                    </div>
                                </a>
                                <a href="https://twitter.com/snow_evo" target="_blank">
                                    <div class="large-icon-media grow">
                                        <i class="fa fa-4x fa-twitter-square"></i><br>snowevo
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/user/TheSnowEvolution" target="_blank">
                                    <div class="large-icon-media grow">
                                        <i class="fa fa-4x fa-youtube-square"></i><br>TheSnowEvolution
                                    </div>
                                </a>
                                <div class="large-icon-media grow">
                                    <i class="fa fa-4x fa-whatsapp"></i><br>+351934056978
                                </div>
                            </div>
                        </aside>
                    </div>

                </section>
            </section>


        <?php /* Contatos */ ?>

        <section class="sr-top" id="contact">
            <section class="section-10">
                <section class="container smooth-resize">
                    <li class="contact-info-in">
                        <div class="heading-txt">
                            <h2>PLAN MY TRIP</h2>
                        </div>
                        <li class="middle-cont">

                            {{ Form::open(array('url' => '/contact', 'role' => 'form', 'id' => 'contact-us')) }}

                                <ul>
                                    <li>
                                        {!! Form::label('name', '*'.trans('contact.name').':') !!}
                                        <input name="name" id="name" type="text" class="input requiredField" placeholder="{!! trans('contact.name') !!}" />
                                    </li>
                                    <li>
                                        {!! Form::label('lastname', '*'.trans('contact.apelido').':') !!}
                                        <input name="apelido" id="apelido" type="text" class="input requiredField" placeholder="{!! trans('contact.apelido') !!}" />
                                    </li>
                                    <li>
                                        {!! Form::label('pais', '*'.trans('contact.pais').':') !!}
                                        <input name="pais" id="pais" type="text" class="input requiredField" placeholder="{!! trans('contact.pais') !!}" />
                                    </li>
                                    <li>
                                        {!! Form::label('cidade', '*'.trans('contact.cidade').':') !!}
                                        <input name="cidade" id="cidade" type="text" class="input requiredField" placeholder="{!! trans('contact.cidade') !!}" />
                                    </li>
                                    <li>
                                        {!! Form::label('email', '*'.trans('contact.email').':') !!}
                                        <input name="email" id="email" type="text" class="input requiredField email" placeholder="{!! trans('contact.email') !!}" />
                                    </li>


                                    <li>
                                        {!! Form::label('date_init', '*'.trans('contact.dataInicio').':') !!}
                                        <input name="date_init" id="date_init" type="date" class="input requiredField" />
                                    </li>
                                    <li>
                                        {!! Form::label('date_end', '*'.trans('contact.dataFinal').':') !!}
                                        <input name="date_end" id="date_end" type="date" class="input requiredField" />
                                    </li>
                                    <li>
                                        {!! Form::label('flexibilidade', '*'.trans('contact.flexibilidade').':') !!}
                                        {!! Form::select(
                                            'flexibilidade', $boolOptions, 'sim', ['class' => 'input requiredField']
                                        ) !!}
                                    </li>
                                    <li>
                                        {!! Form::label('destinos', '*'.trans('contact.destinoDeInteresse').':') !!}
                                        {!! Form::select(
                                            'destinos', $destinos, '0', ['class' => 'input requiredField']
                                        ) !!}
                                    </li>

                                    <li>
                                        {!! Form::label('quartos', '*'.trans('contact.quartosDeInteresse').':') !!}
                                        {!! Form::select(
                                            'quartos', $quartos, '2', ['class' => 'input requiredField']
                                        ) !!}
                                    </li>

                                    <li>
                                        {!! Form::label('num_peoples', '*'.trans('contact.numPeoples').':') !!}
                                        {!! Form::select(
                                            'num_peoples', $numPeoples, 'adulto', ['class' => 'input requiredField']
                                        ) !!}
                                    </li>
                                    <li>
                                        {!! Form::label('pensa_fazer_aula', '*'.trans('contact.pensaFazerAula').':') !!}
                                        {!! Form::select(
                                            'pensa_fazer_aula', $boolOptions, 'sim', ['class' => 'input requiredField']
                                        ) !!}
                                    </li>
                                    <li>
                                        {!! Form::label('pensa_fazer_aula_se_sim', trans('contact.pensaFazerAulaSeSim').':') !!}
                                        {!! Form::select(
                                            'pensa_fazer_aula_se_sim', $fazerAulasSeSim, 'vez', ['class' => 'input']
                                        ) !!}
                                    </li>
                                    <li>
                                        {!! Form::label('subject', trans('snowevo.assunto').':') !!}
                                        <input name="subject" id="subject" type="text" class="input" placeholder="{!! trans('snowevo.assunto') !!}" />
                                    </li>
                                    <li class="full">
                                        {!! Form::label('message', trans('contact.mensagem').':') !!}
                                        <textarea name="message" id="message" class="textarea txtarea" placeholder="{!! trans('contact.mensagem') !!}"></textarea>
                                    </li>
                                    <li>
                                        <div class="g-recaptcha" data-sitekey="6LfrDv8SAAAAALX5h3yzLGFGfVM628A30lGOOJQK"></div>
                                    </li>
                                    <li>
                                        <input name="submit" type="submit" class="btn" value="{!! trans('snowevo.enviar') !!}" />
                                        <input type="hidden" name="submitted" id="submitted" value="true" />
                                    </li>
                                </ul>

                            {{ Form::close() }}
                        </div>
                    </div>
                    <section class="map-area">
                        <!-- Load Facebook SDK for JavaScript -->
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                        <!-- Your embedded video player code -->
                        <div class="fb-video" data-href="https://www.facebook.com/snowevo/videos/1271291686272389/" data-width="500" data-show-text="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/facebook/videos/10153231379946729/">
                                    {!! trans('snowevo.slogan') !!}
                                </blockquote>
                            </div>
                        </div>
                    </section>
                </section>
            </section>
        </section>
    </section>
        <section class="sr-top" id="where">
            <section class="section-11">
                <section class="container">
                    <div class="heading-txt">
                        <aside>
                            <h1>{!! trans('snowevo.ondeEstamos') !!}</h1>
                            <p id="slogan">{!! trans('snowevo.andorra') !!}</p>
                        </aside>
                    </div>

                    <article>
                        <aside id="dot8">
                            <h3>{!! trans('snowevo.andorra') !!}<br />
                                <span>
                                <a href="#">
                                    SNOW EVOLUTION SLU
                                </a><br>
                                    NRT L712323R
                                </span>
                            </h3>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-home"></i>
                                </div>
                                <p class="after-icon">
                                    Avinguda d'Encamp 9, {!! trans('snowevo.endereco_edificio') !!} Griffon 27<br/>
                                    AD200 {!! trans('snowevo.pasDeLaCasa') !!}<br>Principat d'Andorra
                                </p>
                            </div>
                            <div class="contact-detail">
                                <p class="">Tel.: +376368118</p>
                            </div>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <p class="after-icon"><a href="mailto:info@snowevo.com">info@snowevo.com</a></p>
                            </div>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <p class="after-icon"><a href="mailto:info@snowevo.com">jobs@snowevo.com</a></p>
                            </div>
                            
                        </aside>
                    </article>
                    <iframe
                            width="100%"
                            height="300"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBzT6BrT7Rzd26bMebCAgu9fulKZM6fd68
    &q=Av.+d'Encamp,+9,+AD200+Pas+de+la+Casa,+Andorra" allowfullscreen>
                    </iframe>
                    

                </section>

@stop