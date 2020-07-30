<!DOCTYPE html>

<html lang="{!! app('translation'::class)->getActualLanguage() !!}">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name', 'HotelByNow') }}</title>

	<!-- css & plugins -->
	<link rel="stylesheet" href="{{ asset('assets/hotelbynow/css/site.css') }}">
    <?php /*
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/css/mdb.min.css">
 	*/ ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	@yield('head')
	@yield('stylesheets')
	<link href="css/flag-icon.min.css" rel="stylesheet">
</head>
<body>
	<div id="geral">
		<!--inicio barra-->
		<header id="barra">
			<div class="limite">
				<div class="barra-esquerdo">
					<ul>
						<li><a href="">fb</a></li>
						<li><a href="">tw</a></li>
						<li><a href="">g+</a></li>
					</ul>
				</div>
				<div class="barra-direito">
					<ul>
						<li><a href="">email</a></li>
						<li><a href="">telefone</a></li>
					</ul>
				</div>
			</div>
		</header>

		<!--inicio logo e menu-->
		<header id="inicio">
			<div class="limite">
				<div class="logo"><a href=""><img src="assets/hotelbynow/img/logo1.png" alt=""></a></div>
				<nav class="menu">
					<ul>
						{{--<li><a href="">{!! __('menu.destinations') !!}</a></li>--}}
						{{--<li><a href="">{!! __('menu.offersIdeas') !!}</a></li>--}}
						{{--<li><a href="">{!! __('menu.MeetingEEvents') !!}</a></li>--}}
						<?php if (Auth::check()){ ?>
							<li><a href="{!! url('/logout') !!}" class="btn-cadastro">{!! __('menu.logout') !!}</a></li>
                        <?php }else{ ?>
							<li><a href="{!! url('/register') !!}" class="btn-cadastro">{!! __('menu.signUp') !!}</a></li>
							<li><a href="{!! url('/login') !!}" class="btn-login">{!! __('menu.login') !!}</a></li>
                        <?php } ?>
						{!!Siravel::menu_lang() !!}
					</ul>
				</nav>
			</div>
		</header>


	@yield('content')

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="{{ asset('assets/hotelbynow/js/site.js') }}"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', '{{ env('APP_GOOGLE_ANALITCS', '') }}', 'auto');
		ga('send', 'pageview');

	</script>


	@yield("javascript")
	@yield('footer')
</body>
</html>
