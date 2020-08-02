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
                                <a href="#linkfeatures" class="btn btn-txt">{!! trans('snowevo.campsDeVerao') !!}</a>
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
                                    <span style="font-weight:bold">{!! trans('snowevo.andorra') !!}</span> - Pirineus<br><a class="visible-links" href="http://www.grandvalira.com/sites/default/files/files/Mapa%20Grandvalira%20Andorra%202015-16_v4_es.pdf" target="_blank">Grandvalira</a> (220km)
                                    <br/>
                                    <a class="visible-links" href="http://www.vallnord.com/mapa-pistas-vallnord.html" target="_blank">Vallnord</a> (93km)<br/>
                                    <span style="font-weight:bold">{!! trans('snowevo.espanha') !!}/Cerdanya</span> - Pirineus
                                    <br><a class="visible-links" href="http://www.lamolina.cat/content/pdf/planolalp2500br.pdf" target="_blank">La Molina</a> (61km)
                                    <br><a class="visible-links" href="http://www.masella.com/uploads/arxius/MapaAlp2500br.pdf" target="_blank">Masella</a> (64km)
                                    <br/>
                                    <span style="font-weight:bold">{!! trans('snowevo.franca') !!}/Cerdanya</span> - Pirineus<br/>
                                    <a class="visible-links" href="http://www.font-romeu.fr/themes/ftromeuhookipa/img/PLAN_DE_PISTES_1617.jpg" target="_blank">Font Romeu</a> (111km)
                                    <br/>
                                    <span style="font-weight:bold">{!! trans('snowevo.franca') !!}</span> - Alpes<br>
                                    <a class="visible-links" href="http://www.les2alpes.com/fr/le-domaine-skiable.html" target="_blank">Les Deux Alpes</a> (230km)<br/>
                                    <a class="visible-links" href="http://www.valthorens.com/pdf/plans/ski/Plan_3_Vallees_2015-16_BD.pdf" target="_blank">Les Trois Vallées</a> (600km)<br/>
                                    <a class="visible-links" href="http://www.portesdusoleil.com/fileadmin/user_upload/Plan_des_Pistes_2016-2017.pdf" target="_blank">Portes du Soleil</a> (630km)<br/>
                                    {{--<br/>--}}
                                    {{--{!! trans('snowevo.estacoesDeSkiNaoEncontrado', [':link' => '<a class="visible-links" href="#contact">'. trans('snowevo.aqui') .'</a>']) !!}<br/>--}}
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
                            <h2>{!! trans('snowevo.winter') !!} 2018<br/>{!! trans('snowevo.europe') !!}</h2>
                            <div class="box">
                                <a class="fancybox icon-zoom" href="img/media/2016/card1.png" data-fancybox-group="snowtrip_card1" title="Winter 2017 {!! trans('snowevo.europe') !!}"><img src="img/media/2016/card1.png"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.andorra') !!}</li>
                                <li>{!! trans('snowevo.espanha') !!}</li>
                                <li>{!! trans('snowevo.franca') !!}</li>
                                <li>{!! trans('snowevo.pirineusEAlpes') !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>
                        </aside>

                        <aside class>
                            <h2>{!! trans('snowevo.pagueComPay') !!}</h2>
                            <div class="box">
                                <a class="fancybox icon-zoom" href="{!! Siravel::img_lang('img/media/2016/card2.png') !!}" data-fancybox-group="snowtrip_card2" title="{!! trans('snowevo.pagueComPay') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card2.png') !!}"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.rapido') !!}</li>
                                <li>{!! trans('snowevo.facil') !!}</li>
                                <li>{!! trans('snowevo.seguro') !!}</li>
                                <li>{!! trans('snowevo.crieUmaConta') !!}</li>
                            </ul>
                            <a href="http://paypal.com" target="_BLANK" class="btn">PAYPAL</a>
                        </aside>

                        <aside class>
                            <h2>{!! trans('snowevo.pagueComPay') !!}</h2>
                            <div class="box">
                                <a class="fancybox icon-zoom" href="{!! Siravel::img_lang('img/media/2016/card3.png') !!}" data-fancybox-group="snowtrip_card3" title="Açaí em Andorra"><img src="{!! Siravel::img_lang('img/media/2016/card3.png') !!}"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.rapido') !!}</li>
                                <li>{!! trans('snowevo.facil') !!}</li>
                                <li>{!! trans('snowevo.seguro') !!}</li>
                                <li>Banc Sabadell</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>
                        </aside>
                    </article>

                    <article>
                        <aside class>
                            <h2>LES DEUX ALPES<br/>{!! trans('snowevo.franca') !!}</h2>
                            <div class="box">
                                {!! trans('snowevo.summercamps') !!}<h1>265€</h1>
                                <p><strong>{!! trans('snowevo.apartamentos') !!} Odalys</strong></p>

                                <a class="fancybox icon-zoom" href="img/media/2016/card4.png" data-fancybox-group="snowtrip_card4" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card4.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card4a.png" data-fancybox-group="snowtrip_card4" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card4a.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card4b.png" data-fancybox-group="snowtrip_card4" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card4b.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card4c.png" data-fancybox-group="snowtrip_card4" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card4c.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card4d.png" data-fancybox-group="snowtrip_card4" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card4d.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card4e.png" data-fancybox-group="snowtrip_card4" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card4e.png"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>
                                <li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>
                                <li>{!! trans('snowevo.atividades') !!}</li>
                                <li>{!! trans('snowevo.assistencia') !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>
                        </aside>
                        <aside class>
                            <h2>Grandvalira<br/>{!! trans('snowevo.andorra') !!}</h2>
                            <div class="box">
                                {!! trans('snowevo.pasDeLaCasa') !!}<h1>250€</h1>
                                <p><strong>{!! trans('snowevo.apartamentos') !!} Frontera Blanca</strong></p>
                                <a class="fancybox icon-zoom" href="img/media/2016/card5.png" data-fancybox-group="snowtrip_card5" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card5.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card5a.png" data-fancybox-group="snowtrip_card5" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card5a.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card5b.png" data-fancybox-group="snowtrip_card5" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card5b.png"></a>
                                <a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card5c.png" data-fancybox-group="snowtrip_card5" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card5c.png"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>
                                <li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>
                                <li>{!! trans('snowevo.lugaresLimitados') !!}</li>
                                <li>{!! trans('snowevo.reservasAte', ['date'=>'30/Jun']) !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>

                        </aside>
                        <aside class>
                            <h2>{!! trans('snowevo.andorra') !!}<br/>CERDANYA</h2>
                            <div class="box">
                                {!! trans('snowevo.pirineus') !!}<h1>475€</h1>
                                <p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>
                                <a class="fancybox icon-zoom" href="{!! Siravel::img_lang('img/media/2016/card6.png') !!}" data-fancybox-group="snowtrip_card6" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="{!! Siravel::img_lang('img/media/2016/card6.png') !!}"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.dias', ['num'=>10]) !!}</li>
                                <li>{!! trans('snowevo.paises', ['num'=>3]) !!}</li>
                                <li>{!! trans('snowevo.estacoes', ['num'=>3]) !!}</li>
                                <li>{!! trans('snowevo.snowtrip') !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>

                        </aside>

                    </article>
                    <article>

                        <aside class>
                            <h2>{!! trans('snowevo.heliski') !!}<br/>{!! trans('snowevo.andorra') !!}</h2>
                            <div class="box">
                                Ransol e Arcalis<h1>240€</h1>
                                <p><strong>Powder {!! trans('snowevo.andorra') !!}</strong></p>
                                <a class="fancybox icon-zoom" href="img/media/2016/card7.jpg" data-fancybox-group="snowtrip_card7" title="{!! trans('snowevo.heliski') !!} {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card7.jpg"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.voos', ['num'=>'2x']) !!}</li>
                                <li>{!! trans('snowevo.descidas', ['num'=>'2x']) !!}</li>
                                <li>{!! trans('snowevo.equipamentoDeSegurança') !!}</li>
                                <li>{!! trans('snowevo.workshopSobreAvalanches') !!}</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>

                        </aside>
                        <aside class>
                            <h2>Grandvalira<br/>{!! trans('snowevo.andorra') !!}</h2>
                            <div class="box">
                                {!! trans('snowevo.privatebus') !!}<h1>+ 376 368118</h1>
                                <p><strong>{!! trans('snowevo.pirineusEAlpes') !!}</strong></p>
                                <p></p>
                                <a class="fancybox icon-zoom" href="img/media/2016/card8.jpg" data-fancybox-group="snowtrip_card8" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card8.jpg"></a>
                            </div>
                            <ul>
                                <li>Barcelona</li>
                                <li>Toulouse</li>
                                <li>Lyon</li>
                                <li>Geneve</li>
                            </ul>
                            <a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>
                        </aside>

                        <aside class>
                            <h2>Comunica<br/>{!! trans('snowevo.andorra') !!}</h2>
                            <div class="box">
                                {!! trans('snowevo.ofertaCartao') !!}<h1>30€</h1>
                                <p><strong>Andorra Telecom</strong></p>
                                <a class="fancybox icon-zoom" href="img/media/2016/card9.png" data-fancybox-group="snowtrip_card9" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card9.png"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.reservaEGanha') !!}</li>
                                <li>Sim Card</li>
                                <li>Internet 3G/4G</li>
                                <li>Voz + SMS</li>
                            </ul>
                            <a href="http://www.andorratelecom.ad/es/web/guest/som-telefonia-mobil/mobiland-clic" target="_BLANK" class="btn">MOBILAND</a>

                        </aside>
                    </article>
                    <?php /* {{--<article>--}}
                        {{--<aside class>--}}
                            {{--<h2>Grandvalira<br/>{!! trans('snowevo.andorra') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--El Tarter<h1>450€</h1>--}}
                                {{--<p><strong>Moutain Hostel</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card10.png" data-fancybox-group="snowtrip_card10" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card10.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card10a.png" data-fancybox-group="snowtrip_card10" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card10a.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card10b.png" data-fancybox-group="snowtrip_card10" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card10b.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card10c.png" data-fancybox-group="snowtrip_card10" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card10c.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card10d.png" data-fancybox-group="snowtrip_card10" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card10d.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card10e.png" data-fancybox-group="snowtrip_card10" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card10e.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!} Local</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Grandvalira<br/>{!! trans('snowevo.andorra') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.pasDeLaCasa') !!}<h1>795€</h1>--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card11.png" data-fancybox-group="snowtrip_card11" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card11.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card11a.png" data-fancybox-group="snowtrip_card11" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card11a.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card11b.png" data-fancybox-group="snowtrip_card11" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card11b.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>10]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipassCSeguro', ['num'=>8]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.treinoEvolution') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.heliski') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Grandvalira<br/>{!! trans('snowevo.andorra') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.pasDeLaCasa') !!}<h1>490€</h1>--}}
                                {{--<p><strong>Hotel Sporting</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card12.png" data-fancybox-group="snowtrip_card12" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card12.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card12a.png" data-fancybox-group="snowtrip_card12" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card12a.png"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card12b.png" data-fancybox-group="snowtrip_card12" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card12b.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.cafeDaManhaEJantar') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguroEAssistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                    {{--</article>--}}

                    {{--<article>--}}
                        {{--<aside class>--}}
                            {{--<h2>Les Trois Vallees<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--Courchevel<h1>480€</h1>--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!} Le Moriond</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card13.png" data-fancybox-group="snowtrip_card13" title="Les Trois Vallees {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card13.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>Skipass Le Trois Vallees</li>--}}
                                {{--<li>{!! trans('snowevo.seguroEAssistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Chamonix<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--Montblanc<h1>325€</h1>--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card14.png" data-fancybox-group="snowtrip_card14" title="Chamonix {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card14.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>La Rivière - Aiglons</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}

                        {{--<aside class>--}}
                            {{--<h2>Portes du Soleil<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--Avoriaz1800<h1>500€</h1>--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card25.png" data-fancybox-group="snowtrip_card25" title="Portes du Soleil {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card25.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>Portes du Soleil</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                    {{--</article>--}}
                    {{--<article>--}}
                        {{--<aside class>--}}
                            {{--<h2>Grandvalira<br/>{!! trans('snowevo.andorra') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.pasDeLaCasa') !!}<h1>265€</h1>--}}
                                {{--<p><strong>Apartamentos K2</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card16.png" data-fancybox-group="snowtrip_card16" title="Grandvalira {!! trans('snowevo.andorra') !!}"><img src="img/media/2016/card16.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>Snow Break</li>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>5]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>5]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguroEAssistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Les Trois Valleés<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.aPartirDe', ['num'=>'<h1>450€</h1>']) !!}--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card17.png" data-fancybox-group="snowtrip_card17" title="Les Trois Valleés {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card17.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>650km de Pistas</li>--}}
                                {{--<li>Valthorens, Meribel</li>--}}
                                {{--<li>Courchevel, Les Menuires</li>--}}
                                {{--<li>Bride Les Bains</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Valthorens<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.aPartirDe', ['num'=>'<h1>470€</h1>']) !!}--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card18.png" data-fancybox-group="snowtrip_card18" title="Valthorens {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card18.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>6 Dias Skipass 3 Vallees</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                    {{--</article>--}}
                    {{--<article>--}}
                        {{--<aside class>--}}
                            {{--<h2>Portes du Soleil<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.aPartirDe', ['num'=>'<h1>430€</h1>']) !!}--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card19.png" data-fancybox-group="snowtrip_card19" title="Portes du Soleil {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card19.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipassPDS', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Les 2 Alpes<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.aPartirDe', ['num'=>'<h1>390€</h1>']) !!}--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card20.png" data-fancybox-group="snowtrip_card20" title="Les 2 Alpes {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card20.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Paradiski<br/>{!! trans('snowevo.franca') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--La Plagne<h1>700€</h1>--}}
                                {{--<p><strong>Chalet *****</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card21.jpg" data-fancybox-group="snowtrip_card21" title="Paradiski {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card21.jpg"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card21a.jpg" data-fancybox-group="snowtrip_card21" title="Paradiski {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card21a.jpg"></a>--}}
                                {{--<a class="fancybox icon-zoom" style="display: none;" href="img/media/2016/card21b.png" data-fancybox-group="snowtrip_card21" title="Paradiski {!! trans('snowevo.franca') !!}"><img src="img/media/2016/card21b.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipassPardiski', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                    {{--</article>--}}
                    {{--<article>--}}
                        {{--<aside class>--}}
                            {{--<h2>Davos Klosters<br/>{!! trans('snowevo.suica') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.aPartirDe', ['num'=>'<h1>500€</h1>']) !!}--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card22.png" data-fancybox-group="snowtrip_card22" title="Davos Klosters {!! trans('snowevo.suica') !!}"><img src="img/media/2016/card22.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Flims Laax Falera<br/>{!! trans('snowevo.suica') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.aPartirDe', ['num'=>'<h1>520€</h1>']) !!}--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card23.png" data-fancybox-group="snowtrip_card23" title="Flims Laax Falera {!! trans('snowevo.suica') !!}"><img src="img/media/2016/card23.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipass', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                        {{--<aside class>--}}
                            {{--<h2>Zermatt<br/>{!! trans('snowevo.suica') !!}</h2>--}}
                            {{--<div class="box">--}}
                                {{--{!! trans('snowevo.aPartirDe', ['num'=>'<h1>485€</h1>']) !!}--}}
                                {{--<p><strong>{!! trans('snowevo.apartamentos') !!}</strong></p>--}}
                                {{--<a class="fancybox icon-zoom" href="img/media/2016/card24.png" data-fancybox-group="snowtrip_card24" title="Zermatt {!! trans('snowevo.suica') !!}"><img src="img/media/2016/card24.png"></a>--}}
                            {{--</div>--}}
                            {{--<ul>--}}
                                {{--<li>{!! trans('snowevo.noitesDeHospedagem', ['num'=>7]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.diasSkipassMatterhorn', ['num'=>6]) !!}</li>--}}
                                {{--<li>{!! trans('snowevo.seguro') !!}</li>--}}
                                {{--<li>{!! trans('snowevo.assistencia') !!}</li>--}}
                            {{--</ul>--}}
                            {{--<a href="#contact" class="btn">{!! trans('snowevo.card_reserve') !!}</a>--}}

                        {{--</aside>--}}
                    {{--</article>--}} */ ?>
                    <article>
                        <aside class>
                            <h2>Snow App<br/>Onthesnow</h2>
                            <div class="box">
                                <a class="fancybox icon-zoom" href="img/media/2016/card25.jpg" data-fancybox-group="snowtrip_card25" title="Onthesnow"><img src="img/media/2016/card25.jpg"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.card_MapasPistas') !!}</li>
                                <li>{!! trans('snowevo.card_AlertaNevePowder') !!}</li>
                                <li>{!! trans('snowevo.card_LiveWebcams') !!}</li>
                                <li>{!! trans('snowevo.card_PrevisaoTempo') !!}</li>
                            </ul>
                            <a href="http://www.onthesnow.com/" target="_BLANK" class="btn">ONTHENSNOW</a>

                        </aside>
                        <aside class>
                            <h2>Snow App<br/>Snow FORECAST</h2>
                            <div class="box">
                                <a class="fancybox icon-zoom" href="img/media/2016/card26.jpg" data-fancybox-group="snowtrip_card26" title="Snow FORECAST"><img src="img/media/2016/card26.jpg"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.card_Maisdeestacoes') !!}</li>
                                <li>{!! trans('snowevo.card_TempoRealEstacao') !!}</li>
                                <li>{!! trans('snowevo.card_geolocation') !!}</li>
                                <li>{!! trans('snowevo.card_AlertasNeve') !!}</li>
                            </ul>
                            <a href="http://www.snow-forecast.com/" target="_BLANK" class="btn">SNOW FORECAST</a>

                        </aside>
                        <aside class>
                            <h2>Snow App<br/>Snocru</h2>
                            <div class="box">
                                <a class="fancybox icon-zoom" href="img/media/2016/card27.jpg" data-fancybox-group="snowtrip_card27" title="Snocru"><img src="img/media/2016/card27.jpg"></a>
                            </div>
                            <ul>
                                <li>{!! trans('snowevo.card_velocimetro') !!}</li>
                                <li>{!! trans('snowevo.card_medidorAltitude') !!}</li>
                                <li>{!! trans('snowevo.card_snocruChat') !!}</li>
                                <li>{!! trans('snowevo.card_nearMe') !!}</li>
                            </ul>
                            <a href="http://www.snocru.com/" target="_BLANK" class="btn">SNOCRU</a>

                        </aside>

                    </article>

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


                    <?php /*<!--
                    <div class="filter-links" >
                    <ul id="filters" >
                    <li></li>
                    </ul>
                    </div>
                    <div class="portfolio-isotope">
                        <div class="thumbs-list">
                            <ul>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/gv6.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/gv6.jpg" data-fancybox-group="gallery" title="Freeride"><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p>.</p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/pds7.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/pds7.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/davos3.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/davos3.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/davos6.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/davos6.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/gv5.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/gv5.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/gv7.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/gv7.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/intersport3.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/intersport3.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/lax1.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/lax1.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/lax2.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/lax2.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/lax8.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/lax8.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                                <li class="portfolio-item ride"> <img src="img/media/new-media/pds3.jpg" alt="PHOTO" width="380" height="295" />
                                    <aside>
                                        <div class="outer">
                                            <div class="inner"> <a class="fancybox icon-zoom" href="img/media/new-media/pds3.jpg" data-fancybox-group="gallery" title=""><i class="fa fa-search-plus"></i></a>
                                                <h3><a href="#"></a></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                    </aside>
                                </li>
                            </ul>
                        </div>
                    </div>--> */ ?>
                </section>
            </section>


        <?php /* Contatos */ ?>

        <section class="sr-top" id="contact">
            <section class="section-10">
                <section class="container smooth-resize">
                    <div class="contact-info-in">
                        <div class="heading-txt">
                            <h2>{!! trans('snowevo.card_reserve_min') !!}</h2>
                            <p>{!! trans('snowevo.deixeSuaMensagem') !!}</p>
                        </div>
                        <div class="middle-cont">

                            {{ Form::open(array('action' => 'PagesController@contact', 'role' => 'form', 'id' => 'contact-us')) }}

                                <ul>
                                    <li>
                                        <input name="name" id="name" type="text" class="input requiredField" placeholder="{!! trans('snowevo.primeiroNome') !!}" />
                                    </li>
                                    <li>
                                        <input name="lastname" id="lastname" type="text" class="input requiredField" placeholder="{!! trans('snowevo.ultimoNome') !!}" />
                                    </li>
                                    <li>
                                        <input name="email" id="email" type="text" class="input requiredField email" placeholder="{!! trans('snowevo.seuEmail') !!}" />
                                    </li>
                                    <li>
                                        <input name="subject" id="subject" type="text" class="input requiredField" placeholder="{!! trans('snowevo.assunto') !!}" />
                                    </li>
                                    <li class="full">
                                        <textarea name="message" id="message" class="textarea txtarea requiredField" placeholder="{!! trans('snowevo.suaMensagem') !!}"></textarea>
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
                        <div class="flag-icon grow">
                            <img src="img/andorra.gif" class="flag" alt="{!! trans('snowevo.andorra') !!}" />
                        </div>
                        <aside id="dot8">
                            <h3>{!! trans('snowevo.andorra') !!}<br />
                                <span>
                                <a href="#">
                                    SNOW EVOLUTION
                                </a>
                                </span>
                            </h3>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-home"></i>
                                </div>
                                <p class="after-icon">
                                    Avinguada d'Encamp s/n, {!! trans('snowevo.endereco_edificio') !!}<br/>
                                    AD200 {!! trans('snowevo.pasDeLaCasa') !!}, Principat d'Andorra
                                </p>
                            </div>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                                <p class="after-icon">+351 934 056 978</p>
                            </div>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <p class="after-icon"><a href="mailto:info@snowevo.com">info@snowevo.com</a></p>
                            </div>
                            
                            
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-facebook-square"></i>
                                </div>
                                <p class="after-icon"><a href="https://facebook.com/snowevo" target="_blank">/snowevo</a>
                                </p>
                            </div>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-instagram"></i>
                                </div>
                                <p class="after-icon"><a href="http://instagram.com/snowevo?ref=badge" target="_blank">/snowevo</a>
                                </p>
                            </div>
                            <div class="contact-detail">
                                <div class="small-icon grow">
                                    <i class="fa fa-youtube-square"></i>
                                </div>
                                <p class="after-icon"><a href="https://www.youtube.com/user/TheSnowEvolution" target="_blank">/TheSnowEvolution</a>
                                </p>
                            </div>
                            
                        </aside>
                    </article>
                    

                </section>

@stop