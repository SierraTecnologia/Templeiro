<!doctype html>
<!--
This page is made by bmareal, based on the
following tempate:

Responsive HTML5 Template by Psdslicer
Psdslicer.com | PSD to HTML5 | @psdslicer
Free for personal and commercial use under the CCA 4.0 license.
http://creativecommons.org/licenses/by/4.0/
-->

<html lang="{!! app('translation'::class)->getActualLanguage() !!}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-touch-fullscreen" content="YES">
    <meta name="author" content="{{ env('APP_AUTHOR', 'Ricardo Sierra') }}"/>
    <meta property="og:image" content="{{ env('APP_URL', 'sierratecnologia.com.br') }}/snowevo/img/logos/snowevo-fb-black-new.jpg"/>
    <meta property="og:url" content="{{ env('APP_URL', 'sierratecnologia.com.br') }}/snowevo"/>
    <meta property="og:title" content="{{ env('APP_NAME', 'Snowevo') }}"/>
    <meta name="description" content="{{ env('APP_DESCRIPTION', 'Soluções Web') }}"/>
    <meta name="keywords" content="{{ env('APP_KEYWORDS', '') }}"/>
    <meta property="og:description" content="{{ env('APP_DESCRIPTION', 'Soluções Web') }}"/>

    <title>{{ env('APP_NAME', 'Snowevo') }}</title>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" name="viewport">

    {!! Minify::stylesheet([Siravel::asset('css/typography.css', 'text/css'),Siravel::asset('css/font-awesome.css', 'text/css'),Siravel::asset('css/main.css', 'text/css'),Siravel::asset('css/media_queries.css', 'text/css')]) !!}
    {!! Minify::stylesheet(Siravel::asset('css/fancybox.css', 'text/css'), ['media'=>'screen']) !!}

    {{--<link href="http://dev.sierratecnologia.com.br/snowevo/admin/asset/Y3NzL3R5cG9ncmFwaHkuY3Nz/dGV4dC9jc3M-" rel="stylesheet">--}}
    {{--<link href="http://dev.sierratecnologia.com.br/snowevo/admin/asset/Y3NzL2ZvbnQtYXdlc29tZS5jc3M-/dGV4dC9jc3M-" rel="stylesheet">--}}
    {{--<link href="http://dev.sierratecnologia.com.br/snowevo/admin/asset/Y3NzL21haW4uY3Nz/dGV4dC9jc3M-" rel="stylesheet">--}}
    {{--<link href="http://dev.sierratecnologia.com.br/snowevo/admin/asset/Y3NzL21lZGlhX3F1ZXJpZXMuY3Nz/dGV4dC9jc3M-" rel="stylesheet">--}}
    {{--<link href="http://dev.sierratecnologia.com.br/snowevo/admin/asset/Y3NzL2ZhbmN5Ym94LmNzcw--/dGV4dC9jc3M-" rel="stylesheet" media="screen">--}}



    <link href="css/flag-icon.min.css" rel="stylesheet">

    <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{!! SiravelService::asset('js/jquery-2.1.0.min.js', 'application/javascript') !!}"></script>
    <script>
        function HideLoader() {
            var l = document.getElementById('Loader');
            l.style.visibility = 'hidden';
        }
    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-49047341-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
     @yield('head')
</head>

<!-- LOADER DE CIMA!! -->
<!--            <img src="img/fancybox_loading@2x.gif" alt="loader" width="48" height="48" />-->

<!--<body onLoad="HideLoader()">-->
<body>
<!--
<button name="Loader" id="Loader">
    <span class="outer">
        <span class="inner">
            <progress></progress>
        </span>
    </span>
</button>
-->
<section class="container-box">
    <div id="header">
        <div id="navbar" role="navigation">
            <div class="container-box">
                <header>
                    <section class="container">
                        <div class="logo">
                            <a href="#main-slider"><img src="img/logoSNOWEVO-new.png" alt="loader"/></a>
                        </div>
                        {!!Siravel::menu_lang_mobile() !!}
                        <a class="icon-menu navbar-toggle" data-toggle="collapse" data-target=".menu-content">
                            <i class="fa fa-bars"></i> <i class="fa fa-times"></i>
                        </a>
                        <div class="menu-content collapse">
                            <div class="nav-bar">
                                <nav>
                                    <ul id="navigation" class="nav">
                                        <!--<li class="active">
                                            <a href="#home" class="current">
                                                <i class="fa fa-home fa-2x">
                                                </i>
                                            </a>
                                        </li>-->

                                        <li><a href="#conceito">{!! __('menu.menu_snowevo') !!}</a></li>
                                        <li><a href="#snowtrips">{!! __('menu.menu_snowtrips') !!}</a></li>
                                        <li><a href="#media">{!! __('menu.menu_social') !!}</a></li>
                                        <li><a href="#contact">PLAN MY TRIP</a></li>
                                        <li><a href="#where">{!! __('menu.menu_contacts') !!}</a></li>
                                        {!!Siravel::menu_lang() !!}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                </header>
            </div>
        </div>
    </div>

    <section class="container-main">
    @yield('content')
    
                </section>
                <!-- /teste -->
                <footer class="footer-in">
                    <section class="footer-bar">
                        <!--<section class="container">-->
                        <article>


<?php /*
                            <aside class="parceiros">
                                <div id="logos" align="center">
                    <span class="cena1">
                      <a href="http://www.slideintravel.com" target="new">
                          <img src="img/logos/logo-slide-in.png" alt="slide-in" name="slidein" id="slidein">
                      </a>
                    </span>
                    {!! __('snowevo.anosDeParceria') !!}
                    <span class="cena1">
                      <a href="http://www.grandvalira.com/" target="_blank">
                          <img src="img/logos/index_grandvalira.png" alt="GRANDVALIRA" name="gv" class="minilogo" id="gv">
                      </a>
                    </span>
                                </div>
                            </aside> */ ?>
                            <?php /*
                            <!--

                              <aside class="tweets">
                                <h3>Latest Tweets</h3>
                                <div class="collapse-all">
                                  <ul>
                                    <li><a href="#">@Lorem</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">http://Loremipsum.com</a> <br />
                                      <span>18 hours ago</span></li>
                                    <li><a href="#">@Lorem</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">http://Loremipsum.com</a> <br />
                                      <span>18 hours ago</span></li>
                                    <li><a href="#">@Lorem</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">http://Loremipsum.com</a> <br />
                                      <span>18 hours ago</span></li>
                                  </ul>
                                </div>
                              </aside>
                              <aside class="aside-recent">
                                <h3>Flickr Feed</h3>
                                <div class="collapse-all">
                                  <ul>
                                    <li><a href="#"><img src="img/filter-wds01.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds02.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds03.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds04.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds05.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds06.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds02.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds01.jpg" alt="" width="380" height="295" /></a></li>
                                    <li><a href="#"><img src="img/filter-wds01.jpg" alt="" width="380" height="295" /></a></li>
                                  </ul>
                                </div>
                              </aside>
                            </article>
                          </section>
                        </section>

                        -->
 */ ?>
                            <br> <br>
                            <section class="copyright">
                                <section class="container">
                                    <p>{!! trans('snowevo.follow', [
                                        'link1' => '<a href="https://facebook.com/snowevo"> <i class="fa  fa-facebook-square fa-2x"></i></a>',
                                        'link2' => '<a href="https://www.youtube.com/user/TheSnowEvolution"><i class="fa fa-youtube-square fa-2x"></i></a>'
                                    ]) !!}
                                    </p>
                                    <p class="right">{!! trans('snowevo.allRights')!!} <br class="show-s"/>
                                    </p>
                                </section>
                            </section>

                            <!--</section>-->
                        </article>
                    </section>
                </footer>
            </section>
            {!! Minify::javascript([Siravel::asset('js/bootstrap-3.1.1.min.js', 'application/javascript'),Siravel::asset('js/jquery.collapse.js'),Siravel::asset('js/jquery.transition.js'),Siravel::asset('js/jquery.fancybox.js')]) !!}
            <script type="text/javascript">
                trans_contact_obrigado = '{!! trans('contact.obrigado') !!}';
                trans_contact_obrigado_sub = '{!! trans('contact.obrigadoSub') !!}';
                $(".fancybox").fancybox({
                    helpers: {
                        title: {
                            type: 'outside'
                        },
                        overlay: {
                            locked: false
                        }
                    }
                });
            </script>

            {!! Minify::javascript([Siravel::asset('js/modernizr.js', 'application/javascript'),Siravel::asset('js/jquery.flexslider.js', 'application/javascript'),Siravel::asset('js/jquery.owl.carousel.js', 'application/javascript'),Siravel::asset('js/jquery.idTabs.js', 'application/javascript'),Siravel::asset('js/jquery.validate.js', 'application/javascript'),Siravel::asset('js/jquery.singlescroll.js', 'application/javascript'),Siravel::asset('js/jquery.sscr.js', 'application/javascript'),Siravel::asset('js/jquery.ui.totop.js', 'application/javascript'),Siravel::asset('js/jquery.easing.js', 'application/javascript'),Siravel::asset('js/jquery.dotdotdot.js', 'application/javascript'),Siravel::asset('js/jquery.countTo.js', 'application/javascript'),Siravel::asset('js/jquery.cookie.js', 'application/javascript'),Siravel::asset('js/jquery.styleswitcher.js', 'application/javascript'), Siravel::asset('js/jquery.isotope.min.js', 'application/javascript'), Siravel::asset('js/jquery.singlePageNav.min.js', 'application/javascript'), Siravel::asset('js/jquery.custom.js', 'application/javascript'), Siravel::asset('js/jquery.parallax-1.1.3.js', 'application/javascript')]) !!}


{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvYm9vdHN0cmFwLTMuMS4xLm1pbi5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmNvbGxhcHNlLmpz/bnVsbA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnRyYW5zaXRpb24uanM-/bnVsbA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmZhbmN5Ym94Lmpz/bnVsbA--"></script>--}}
{{--<script type="text/javascript">--}}
    {{--$(".fancybox").fancybox({--}}
        {{--helpers: {--}}
            {{--title: {--}}
                {{--type: 'outside'--}}
            {{--},--}}
            {{--overlay: {--}}
                {{--locked: false--}}
            {{--}--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvbW9kZXJuaXpyLmpz/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmZsZXhzbGlkZXIuanM-/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5Lm93bC5jYXJvdXNlbC5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmlkVGFicy5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnZhbGlkYXRlLmpz/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnNpbmdsZXNjcm9sbC5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnNzY3IuanM-/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnVpLnRvdG9wLmpz/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmVhc2luZy5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmRvdGRvdGRvdC5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmNvdW50VG8uanM-/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmNvb2tpZS5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnN0eWxlc3dpdGNoZXIuanM-/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5Lmlzb3RvcGUubWluLmpz/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnNpbmdsZVBhZ2VOYXYubWluLmpz/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LmN1c3RvbS5qcw--/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}
{{--<script src="http://dev.sierratecnologia.com.br/snowevo/admin/asset/anMvanF1ZXJ5LnBhcmFsbGF4LTEuMS4zLmpz/YXBwbGljYXRpb24vamF2YXNjcmlwdA--"></script>--}}


            <script src='https://www.google.com/recaptcha/api.js'></script>




            @yield('footer')

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114281337-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-114281337-1');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49047341-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-49047341-1');
</script>
</body>
</html>
