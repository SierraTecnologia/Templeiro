<!DOCTYPE html>

<html lang="{!! app('translation'::class)->getActualLanguage() !!}">
<head>
    <!-- [if lt IE 9]>

    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    <!-- [if IE 8]>

    <script type="text/javascript">

        alert("Seu Navegador está desatualizado! Por gentileza, para visualizar nosso site atualize.")

        window.location = "http://www.updateyourbrowser.net/pt"

    </script>

    <![endif]-->

    <?php /*[if IE 7]>

    <script type="text/javascript">

        alert("Seu Navegador está desatualizado! Por gentileza, para visualizar nosso site atualize.")

        window.location = "http://www.updateyourbrowser.net/pt"

    </script>

    <![endif]*/ ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Sierra Tecnologia') }}</title>
    <meta name="google-site-verification" content="VZBSd2At9N_xGaTEfFaI71qVXT14xAZB7hySfTJ18Aw" />

    <?php /* Favicons
    ================================================== */ ?>
    <link rel="shortcut icon" href="https://s.gravatar.com/avatar/2ef9cc3af9ae4d2e6eb591470bd0ee88?s=32" type="image/x-icon">
    <link rel="icon" href="https://s.gravatar.com/avatar/2ef9cc3af9ae4d2e6eb591470bd0ee88?s=32" type="image/x-icon">
    <?php /* / Favicons
    ================================================== */ ?>

    <?php /* SEO */ ?>
    <meta name="description" content="{{ trans('homepage.page_description') }}">
    <meta name="keywords" content="{{ trans('homepage.page_keywords') }}">
    <meta name="robots" content="index, follow, all">

    <?php /* iOS Safari */ ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="geo.region" content="BR-RJ" />
    <meta name="geo.placename" content="Rio de Janeiro" />
    <meta name="geo.position" content="-22.9027800;-43.2075000" />
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:site_name" content="RicardoSierra"/>
    <meta property="og:title" content="{{ config('app.name', 'Sierra Tecnologia') }}"/>

    <?php /* START - Facebook Open Graph, Google+ and Twitter Card Tags 1.5.2 */ ?>
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:site_name" content="RicardoSierra"/>
    <meta property="og:title" content="{{ config('app.name', 'Sierra Tecnologia') }}"/>
    <meta itemprop="name" content="RicardoSierra"/>
    <meta property="og:url" content="http://www.ricardosierra.com.br"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="{{ trans('homepage.home_description') }}"/>
    <meta itemprop="description" content="{{ trans('homepage.home_description') }}"/>
    <meta name="twitter:description" content="{{ trans('homepage.home_description') }}"/>
    <meta property="og:image" content="https://s.gravatar.com/avatar/2ef9cc3af9ae4d2e6eb591470bd0ee88?s=16"/>
    <meta itemprop="image" content="https://s.gravatar.com/avatar/2ef9cc3af9ae4d2e6eb591470bd0ee88?s=16"/>
    <?php /* END - Facebook Open Graph, Google+ and Twitter Card Tags */ ?>
<?php /*
@themecss('app.css')

@themecss('app_init.css') */ ?>
    <link href='/themes/ricardosierra/css/app.css' rel='stylesheet' type='text/css'>
    <link href='/themes/ricardosierra/css/app_init.css' rel='stylesheet' type='text/css'>


    <?php /* >> CSS
    ============================================================================== */ ?>
    <?php /* Google Web Fonts */ ?>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css' rel='stylesheet' type='text/css'>

    <?php /* >> /CSS
    ============================================================================== */ ?>
</head>
<body>
<?php /* Page Loader
========================================================= */ ?>
<div class="loader-container" id="page-loader">
    <div class="loading-wrapper">
        <div class="loader-animation" id="loader-animation">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <div class="loader-name" id="loader-name">
            Ricardo <strong>Sierra</strong>
        </div>
        <p class="loader-job" id="loader-job">{{ trans('welcome.work') }}</p>
    </div>
</div>
<?php /* /End of Page loader
========================================================= */ ?>

    <!-- / END HOMEPAGE DESIGN AREA -->
	@yield('content')
    <!-- START FOOTER DESIGN AREA -->

<?php /* Contact Form - Ajax Messages
========================================================= */ ?>
<?php /* Form Sucess */ ?>
<div class="form-result modal-wrap" id="contactSuccess">
    <div class="modal-bg"></div>
    <div class="modal-content">
        <h4 class="modal-title"><i class="fa fa-check-circle"></i> {!! trans('contact.sendWithSuccess') !!}</h4>
        <p>{!! trans('contact.sendWithSuccess') !!}</p>
    </div>
</div>
<?php /* /Form Sucess */ ?>
<?php /* form-error */ ?>
<div class="form-result modal-wrap" id="contactError">
    <div class="modal-bg"></div>
    <div class="modal-content">
        <h4 class="modal-title"><i class="fa fa-times"></i> {!! trans('contact.erro') !!}</h4>
        <p>{!! trans('contact.sendWithErro') !!}</p>
    </div>
</div>
<?php /* /form-error */ ?>

<?php /* Contact Form - Ajax Messages
========================================================= */ ?>


<?php /* >> JS
============================================================================== */ ?>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.min.js"></script>
<?php /* Google Maps */ ?>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
@themejs('vendor.js')
<?php /* App */ ?>
@themejs('app.js')


<?php /* HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries */ ?>
<?php /* WARNING: Respond.js doesn't work if you view the page via file:// */ ?>
<!-- [if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</body>
</html>