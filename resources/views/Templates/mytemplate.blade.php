<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="resources/views/assets/css/bootstrap.min.css">
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="resources/views/assets/css/main.css">
	    <link rel="stylesheet" href="resources/views/assets/css/green.css">
	    <link rel="stylesheet" href="resources/views/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="resources/views/assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="resources/views/assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="resources/views/assets/css/animate.min.css">
		<link rel="stylesheet" href="resources/views/assets/css/rateit.css">
		<link rel="stylesheet" href="resources/views/assets/css/bootstrap-select.min.css">
		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="resources/views/assets/css/config.css">
		<link href="resources/views/assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="resources/views/assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="resources/views/assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="resources/views/assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="resources/views/assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="resources/views/assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="resources/views/assets/images/favicon.ico">
		{{-- Tittle --}}
		<title>{{ $title }}</title>
	</head>
    <body class="cnt-home">
		<header class="header-style-1">
			<!-- ============================================== TOP MENU ============================================== -->
			@include('Includes.top-menu')
			<!-- ============================================== TOP-MENU : END ============================================== -->
			<!-- ============================================== CENTER-MENU ============================================== -->
			@include("Includes.center-menu")
			<!-- ============================================== CENTER-MENU : END ============================================== -->
			<!-- ============================================== BOTTOM-MENU ============================================== -->
			@include('Includes.bottom-menu')
			<!-- ============================================== BOTTOM-MENU : END ============================================== -->
		</header>
<!-- ============================================== HEADER : END ============================================== -->
						
							@yield('home')											
							@yield('category')				
							@yield('forgot-password')
							@yield('login')
							@yield('my-account')
							@yield('my-cart')
							@yield('my-wishlist')
							@yield('order-detail')
							@yield('order-history')
							@yield('payment-method')
							@yield('pending-orders')
							@yield('product-details')
							@yield('search-result')
							@yield('sub-category')
							@yield('track-orders')


<!-- ============================================== TOP-FOOTER ============================================== -->
@include("Includes.center-menu")
<!-- ============================================== TOP-FOOTER : END ============================================== -->
<!-- ============================================== BOTTOM_FOOTER ============================================== -->
@include('Includes.bottom-menu')
<!-- ============================================== BOTTOM_FOOTER : END ============================================== -->

    
	<script src="resources/views/assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="resources/views/assets/js/bootstrap.min.js"></script>
	
	<script src="resources/views/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="resources/views/assets/js/owl.carousel.min.js"></script>
	
	<script src="resources/views/assets/js/echo.min.js"></script>
	<script src="resources/views/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="resources/views/assets/js/bootstrap-slider.min.js"></script>
    <script src="resources/views/assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="resources/views/assets/js/lightbox.min.js"></script>
    <script src="resources/views/assets/js/bootstrap-select.min.js"></script>
    <script src="resources/views/assets/js/wow.min.js"></script>
	<script src="resources/views/assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
</body>
</html>