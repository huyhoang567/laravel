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

	    <title>My Account</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -</a></li>


					<li><a href="my-account.php"><i class="icon fa fa-user"></i>Tài khoản</a></li>
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Sản phẩm yêu thích</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li>

<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Đăng nhập</a></li>

	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Đăng xuất</a></li>
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" ><span class="key">Đơn hàng</b></a>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
					<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="index.php">
		
		<h2>Gas uy tín</h2>

	</a>
</div>		
</div>
<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
<div class="search-area">
    <form name="search" method="post" action="search-result.php">
        <div class="control-group">

            <input class="search-field" placeholder="Tìm sản phẩm..." name="product" required="required" />

            <button class="search-button" type="submit" name="search"></button>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

				<div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

	<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="total-price">
						<span class="value"></span>
						<span class="sign">VND</span>
					</span>
				</div>
				<div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count"></span></div>
			
		    </div>
		</a>
		<ul class="dropdown-menu">
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
							<div class="image">
								<a href="product-details.php?pid="><img  src="admin/productimages//" width="35" height="50" alt=""></a>
							</div>
						</div>
						<div class="col-xs-7">
							
							<h3 class="name"><a href="product-details.php?pid="></a></h3>
							<div class="price">Rs.*</div>
						</div>
						
					</div>
				</div><!-- /.cart-item -->
				<div class="clearfix"></div>
			<hr>
		
			<div class="clearfix cart-total">
				<div class="pull-right">
					
						<span class="text">Total :</span><span class='price'>Rs.</span>
						
				</div>
			
				<div class="clearfix"></div>
					
				<a href="my-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">My Cart</a>	
			</div><!-- /.cart-total-->
					
				
		</li>
		</ul><!-- /.dropdown-menu-->
	</div><!-- /.dropdown-cart -->

<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="total-price">
						<span class="value">00.00</span>
						<span class="sign">VND</span>
					</span>
				</div>
				<div class="basket">
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"><span class="count">0</span></div>
			
		    </div>
		</a>
		<ul class="dropdown-menu">
		
	
		
		
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-12">
							Your Shopping Cart is Empty.
						</div>
						
						
					</div>
				</div><!-- /.cart-item -->
			
				
			<hr>
		
			<div class="clearfix cart-total">
				
				<div class="clearfix"></div>
					
				<a href="index.php" class="btn btn-upper btn-primary btn-block m-t-20">Continue Shooping</a>	
			</div><!-- /.cart-total-->
					
				
		</li>
		</ul><!-- /.dropdown-menu-->
	</div>





<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
			</div><!-- /.row -->

		</div><!-- /.container -->

	</div>
	<!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
				
			</li>


			<li class="dropdown yamm">
				<a href="category.php?cid="> </a>
			
			</li>


			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div>
</div>


            </div>
        </div>
    </div>
</div>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->

<div>
@yield('home')
</div>
<div>
@yield('category')
</div>
<div>
@yield('forgot-password')
</div>
<div>
@yield('login')
</div>
<div>
@yield('my-account')
</div>
<div>
@yield('my-cart')
</div>
<div>
@yield('my-wishlist')
</div>
<div>
@yield('order-detail')
</div>
<div>
@yield('order-history')
</div>
<div>
@yield('payment-method')
</div>
<div>
@yield('pending-orders')
</div>
<div>
@yield('product-details')
</div>
<div>
@yield('search-result')
</div>
<div>
@yield('sub-category')
</div>
<div>
@yield('track-orders')
</div>

<div id="brands-carousel" class="logo-slider wow fadeInUp">
		<h3 class="section-title">Our Brands</h3>
		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/aoc.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/bajaj.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/blackberry.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/canon.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/compas.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/daikin.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/dell.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>
<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/samsung.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>
				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/hcl.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/sony.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/voltas.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/lg.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/lenovo.jpg" src="assets/images/blank.gif" alt="">
					</a>	
				</div>




		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->

</div>
</div>
<footer id="footer" class="footer color-bg">
	  <div class="links-social inner-top-sm">
        <div class="container">
            <div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= CONTACT INFO ============================================================= -->
<div class="contact-info">
    <div class="footer-logo">
        <div class="logo">
            <a href="index.php">
                
<h3>Shopping Portal</h3>
            </a>
        </div><!-- /.logo -->
    
    </div><!-- /.footer-logo -->

     <div class="module-body m-t-20">
        <p class="about-us"> Nam libero tempore, cum soluta nobis est ses  eligendi optio cumque cum soluta nobis est ses  eligendi optio cumque.</p>
    
        <div class="social-icons">
            
        <a href="http://facebook.com/transvelo" class='active'><i class="icon fa fa-facebook"></i></a>
        <a href="#"><i class="icon fa fa-twitter"></i></a>
        <a href="#"><i class="icon fa fa-linkedin"></i></a>
        <a href="#"><i class="icon fa fa-rss"></i></a>
        <a href="#"><i class="icon fa fa-pinterest"></i></a>

        </div><!-- /.social-icons -->
    </div><!-- /.module-body -->

</div><!-- /.contact-info -->
<!-- ============================================================= CONTACT INFO : END ============================================================= -->            	</div><!-- /.col -->

            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= CONTACT TIMING============================================================= -->
<div class="contact-timing">
	<div class="module-heading">
		<h4 class="module-title">opening time</h4>
	</div><!-- /.module-heading -->

	<div class="module-body outer-top-xs">
		<div class="table-responsive">
			<table class="table">
				<tbody>
					<tr><td>Monday-Friday:</td><td class="pull-right">08.00 To 18.00</td></tr>
					<tr><td>Saturday:</td><td class="pull-right">09.00 To 20.00</td></tr>
					<tr><td>Sunday:</td><td class="pull-right">10.00 To 20.00</td></tr>
				</tbody>
			</table>
		</div><!-- /.table-responsive -->
	</div><!-- /.module-body -->
</div><!-- /.contact-timing -->
<!-- ============================================================= CONTACT TIMING : END ============================================================= -->            	</div><!-- /.col -->

            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= INFORMATION============================================================= -->
<div class="contact-information">
	<div class="module-heading">
		<h4 class="module-title">information</h4>
	</div><!-- /.module-heading -->

	<div class="module-body outer-top-xs">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>New Delhi, Delhi</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>(011) 000000000000<br>(011) 000000000000</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#">info@phpgurukul.com</a></span>
                </div>
            </li>
              
            </ul>
    </div><!-- /.module-body -->
</div><!-- /.contact-timing -->
<!-- ============================================================= INFORMATION : END ============================================================= -->            	</div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.links-social -->

    
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

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