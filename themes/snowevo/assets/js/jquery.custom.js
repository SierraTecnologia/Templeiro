$(document).ready(function(){$(window).scroll(function(){var scrollTop=$(window).scrollTop();$(".section").each(function(){var elementTop=$(this).offset().top-$('#header').outerHeight();if(scrollTop>=elementTop){$(this).addClass('loaded');}});});$('#navigation').singlePageNav({offset:$('#navbar').outerHeight(),filter:':not(.external)',speed:750,currentClass:'active',beforeStart:function(){},onComplete:function(){}});$('#navbar').affix({offset:{top:$('#topbar').outerHeight(),}});$('.smooth-scroll').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html,body').animate({scrollTop:target.offset().top},1000);return false;}}});$('.nav a').on('click',function(){if($('.navbar-toggle').css('display')!='none'){$(".navbar-toggle").click();}});var $container=$('.portfolio-isotope');$container.imagesLoaded(function(){$container.isotope({itemSelector:'.portfolio-item',resizable:true,resizesContainer:true});});$('#filters a').click(function(){var selector=$(this).attr('data-filter');$container.isotope({filter:selector});return false;});var onClickFilter=function(event){var item=$(event.currentTarget);$('#filters li a').removeClass('active');item.toggleClass('active');updateFilters();}
$('#filters li a').click(onClickFilter);});$(document).ready(function(){$('[data-toggle=offcanvas]').click(function(){$('.row-offcanvas').toggleClass('active')});});$(window).bind('load',function(){parallaxInit();});function parallaxInit(){$('#twitter-parallax').parallax("30%",0.1);$('#quote-parallax').parallax("30%",0.1);$('#contact-parallax').parallax("30%",0.1);$('#home.parallax').parallax("30%",0.1);$('#project-header.parallax').parallax("30%",0.1);}$(document).ready(function(){$('.fancybox').fancybox();});$(window).on('load', function(){$('#main-slider').flexslider({animation:'fade',slideshow:true,slideshowSpeed:2000,animationSpeed:2000,controlsContainer:'.flex-container'});$('#main-slider2').flexslider({animation:'fade',slideshow:true,slideshowSpeed:4000,animationSpeed:600,controlsContainer:'.flex-container'});$('#secondary-slider').flexslider({animation:'slide',slideshow:true,slideshowSpeed:5000,animationSpeed:600,controlsContainer:'.flex-container'});$('#third-slider').flexslider({animation:'fade',direction:"vertical",smoothHeight:true,startAt:0,slideshowSpeed:2000,animationSpeed:500,controlsContainer:'.flex-container'});});$(document).ready(function(){var owl=$("#owl-demo1");owl.owlCarousel({navigation:true,autoPlay:true,slideSpeed:300,paginationSpeed:400,singleItem:false,items:4,itemsDesktop:[1140,3],itemsDesktopSmall:[1006,3],itemsTablet:[768,2],itemsTabletSmall:false,itemsMobile:[479,1],});$(".nextn").click(function(){owl.trigger('owl.next');})
$(".prevp").click(function(){owl.trigger('owl.prev');})});jQuery(function($){$('.timer').countTo({from:0,to:85555,speed:1000,refreshInterval:2,onComplete:function(value){console.debug(this);}});});jQuery(function($){$('.timer2').countTo({from:0,to:60000,speed:1000,refreshInterval:2,onComplete:function(value){console.debug(this);}});});jQuery(function($){$('.timer3').countTo({from:0,to:5000,speed:1000,refreshInterval:2,onComplete:function(value){console.debug(this);}});});jQuery(function($){$('.timer4').countTo({from:0,to:8000,speed:1000,refreshInterval:2,onComplete:function(value){console.debug(this);}});});$(document).ready(function(){$('#toggle-switcher').click(function(){if($(this).hasClass('open')){$(this).removeClass('open');$('#switch-style').animate({'left':'-220px'});}else{$(this).addClass('open');$('#switch-style').animate({'left':'0'});}});});$(document).ready(function(){$().UItoTop({easingType:'easeOutQuart'});});