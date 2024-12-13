<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Location</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
		<link rel="stylesheet" href="{{ asset('css/touchTouch.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<script src="{{ asset('js/superfish.js') }}"></script>
		<script src="{{ asset('js/jquery.ui.totop.js') }}"></script>
		<script src="{{ asset('js/jquery.equalheights.js') }}"></script>
		<script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
		<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('js/touchTouch.jquery.js') }}"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				$('.gallery a.gal').touchTouch();
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="{{ url('/') }}">Home</a></li>
									<li><a href="{{ url('/about') }}">About</a></li>
									<li><a href="{{ url('/location') }}">Location</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							TITIK KEMACETAN KOTA PEKANBARU
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<div id="map" class="map"></div>
				<div id="layer-control">
					<label><input type="checkbox" id="toggle-pku" checked /> Tampilkan Poligon Pekanbaru</label>
					<br />
					<label><input type="checkbox" id="toggle-macet" checked /> Tampilkan Titik Macet</label>
				</div>
				
				<!-- Start Fitur Pop Up -->
				<div id="popup" class="ol-popup">
					<a href="#" id="popup-closer" class="ol-popup-closer">X</a>
					<div id="popup-content">

					</div>
				</div>

				<!-- Bootstrap JS -->
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
				<script type="module" src="{{ asset('Project_SIG_Kemacetan/main.js') }}"></script>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> + 1800 559 6580</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Tour<span class="color1">T</span>axi </div>
						&copy; 2014	| <a href="#">Privacy Policy</a> </div> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>