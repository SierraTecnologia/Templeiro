<?php
/**
 * @extends('app')
 * 
 * @section('content')
 * 	 <div class="title">SierraTecnologia</div>
 *   <div class="quote"></div>
 * @stop
 */
?>
<!DOCTYPE html>

<html lang="{!! app('translation'::class)->getActualLanguage() !!}">

<head>
    <!--[if lt IE 9]>

    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    <!--[if IE 8]>

    <script type="text/javascript">

    alert("Seu Navegador está desatualizado! Por gentileza, para visualizar nosso site atualize.")

    window.location = "http://www.updateyourbrowser.net/pt"

    </script>

    <![endif]-->

    <!--[if IE 7]>

    <script type="text/javascript">

    alert("Seu Navegador está desatualizado! Por gentileza, para visualizar nosso site atualize.")

    window.location = "http://www.updateyourbrowser.net/pt"

    </script>

    <![endif]-->
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO -->
    <meta name="description" content="{{ trans('homepage.page_description') }}">
    <meta name="keywords" content="{{ trans('homepage.page_keywords') }}">
    <meta name="robots" content="index, follow, all">
    
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">    
    <meta name="geo.region" content="BR-RJ" />
    <meta name="geo.placename" content="Rio de Janeiro" />
    <meta name="geo.position" content="-22.9027800;-43.2075000" />
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:site_name" content="SierraTecnologia"/>
    <meta property="og:title" content="{{ trans('homepage.page_title') }}"/>
    
    <!-- START - Facebook Open Graph, Google+ and Twitter Card Tags 1.5.2 -->
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:site_name" content="SierraTecnologia"/>
    <meta property="og:title" content="{{ trans('homepage.page_title') }}"/>
    <meta itemprop="name" content="SierraTecnologia"/>
    <meta property="og:url" content="http://www.sierratecnologia.com.br"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="{{ trans('homepage.home_description') }}"/>
    <meta itemprop="description" content="{{ trans('homepage.home_description') }}"/>
    <meta name="twitter:description" content="{{ trans('homepage.home_description') }}"/>
    <meta property="og:image" content="http://www.sierratecnologia.com.br/img/social.png"/>
    <meta itemprop="image" content="http://www.sierratecnologia.com.br/img/social.png"/>
    <!-- END - Facebook Open Graph, Google+ and Twitter Card Tags -->

    <!-- PAGE TITLE -->
    <title>SierraTecnologia &#8211; {{ trans('homepage.page_title') }}</title>
    <?php /*
    {!! Minify::stylesheet([
        Siravel::asset('bootstrap/css/bootstrap.min.css', 'text/css'),
        Siravel::asset('fonts/linear-fonts.css', 'text/css'),
        Siravel::asset('owlcarousel/css/owl.carousel.css', 'text/css'),
        Siravel::asset('owlcarousel/css/owl.theme.css', 'text/css'),
        Siravel::asset('css/magnific-popup.css', 'text/css'),
        Siravel::asset('css/animate.min.css', 'text/css'),
        Siravel::asset('css/style.css', 'text/css'),
        Siravel::asset('css/responsive.css', 'text/css')
    ]) !!}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    */ ?>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />

    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900&subset=latin-ext" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- START PRELOADER AREA-->
    <div class="preloader-area">
        <div class="preloader">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- END PRELOADER AREA -->

    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href="index.php">
                                <p>Sitec</p>
                            </a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="index.php#home">{{ trans('homepage.menu_home') }} <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php#about">{{ trans('homepage.menu_about') }}</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php#service">{{ trans('homepage.menu_service') }}</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php#team">{{ trans('homepage.menu_team') }}</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php#pricing">{{ trans('homepage.menu_pricing') }}</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="index.php#contact">{{ trans('homepage.menu_contact') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-image-area" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-text">
                                    <h2>{{ trans('homepage.home_title')}}</h2>
                                    <p>{{ trans('homepage.home_description')}}</p>
                                    <a class="slide-btn smoth-scroll" href="index.php#about">{{ trans('homepage.home_more')}}</a>
                                    <a class="slide-btn smoth-scroll" href="index.php#contact">{{ trans('homepage.contact_title')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->
	@yield('content')
    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="footer-social-link">
                        <ul>
                            <li><a href="https://www.facebook.com/sierratecnologia/" target="_BLANK"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/SierraTecnologia" target="_BLANK"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-text">
                        <h6>&copy;copyright | SierraTecnologia 2016 | {{ trans('homepage.developed_by',
                            [
                                'site' => 'SierraTecnologia',
                            ]
                        ) }}</h6>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->

    <!-- START SCROOL UP DESIGN AREA -->
    <div class="scroll-to-up">
        <div class="scrollup">
            <span class="lnr lnr-chevron-up"></span>
        </div>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->
<?php /*
    {!! Minify::javascript([
        Siravel::asset('js/jquery-3.2.1.min.js', 'application/javascript'),
        Siravel::asset('js/jquery-migrate-3.0.0.js', 'application/javascript'),
        Siravel::asset('bootstrap/js/bootstrap.min.js', 'application/javascript'),
        Siravel::asset('js/jquery.appear.js', 'application/javascript'),
        Siravel::asset('owlcarousel/js/owl.carousel.min.js', 'application/javascript'),
        Siravel::asset('js/jquery.mixitup.js', 'application/javascript'),
        Siravel::asset('js/jquery.magnific-popup.min.js', 'application/javascript'),
        Siravel::asset('js/jquery.stellar.min.js', 'application/javascript'),
        Siravel::asset('js/jquery.mb.YTPlayer.min.js', 'application/javascript'),
        Siravel::asset('js/jquery.waypoints.min.js', 'application/javascript'),
        Siravel::asset('js/jquery.counterup.min.js', 'application/javascript'),
        Siravel::asset('js/wow.min.js', 'application/javascript'),
        Siravel::asset('js/form-contact.js', 'application/javascript'),
        Siravel::asset('js/scripts.js', 'application/javascript')
    ]) !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 */ ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script type="text/javascript">
        $('.player').mb_YTPlayer();
    </script>
    <script src="https://use.fontawesome.com/faac944fcf.js"></script>
</body>

</html>