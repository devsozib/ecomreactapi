<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bghaat</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Custom-Files -->
	<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.css') }}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<!-- pop-up-box -->
	<link href="{{ asset('frontend/css/menu.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<!-- //web fonts -->
</head>
     
<style>
div#_vdo_ads_player_ai_3944 {
    display: none !important;
}	
vdo#unitDivWrapper-0 {
    display: none;
}
</style>
<body>
<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='/js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
<!-- New toolbar-->



@include('layouts.include.frontendFiles.header')

@include('layouts.include.frontendFiles.banner')


<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
<div class="ads-grid py-5">
	@yield('content')
</div>

	

	
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
	<!-- footer -->
	@include('layouts.include.frontendFiles.footer')

	<!-- js-files -->
	<!-- common jquery plugin -->
	<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
	<!-- //common jquery plugin -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- js -->
	<script src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- scroll seller -->
	<script src="{{ asset('frontend/js/scroll.js') }}"></script>
	<!-- //scroll seller -->

	<!-- cart-js -->
	<script src="{{ asset('frontend/js/minicart.js') }}"></script>
	<script>
		paypals.minicarts
			.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- theme switch js (light and dark)-->
	<script src="{{ asset('frontend/js/theme-change.js') }}"></script>
	<script>
		function autoType(elementClass, typingSpeed) {
			var thhis = $(elementClass);
			thhis.css({
				"position": "relative",
				"display": "inline-block"
			});
			thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
			thhis = thhis.find(".text-js");
			var text = thhis.text().trim().split('');
			var amntOfChars = text.length;
			var newString = "";
			thhis.text("|");
			setTimeout(function () {
				thhis.css("opacity", 1);
				thhis.prev().removeAttr("style");
				thhis.text("");
				for (var i = 0; i < amntOfChars; i++) {
					(function (i, char) {
						setTimeout(function () {
							newString += char;
							thhis.text(newString);
						}, i * typingSpeed);
					})(i + 1, text[i]);
				}
			}, 1500);
		}

		$(document).ready(function () {
			// Now to start autoTyping just call the autoType function with the 
			// class of outer div
			// The second paramter is the speed between each letter is typed.   
			autoType(".type-js", 200);
		});
	</script>
	<!-- //theme switch js (light and dark)-->

	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function () {
			$('.navbar-toggler').click(function () {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- //disable body scroll which navbar is in active -->

	<!--bootstrap-->
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<!-- //bootstrap-->
	<!-- //Js scripts -->


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '//a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>

</html>