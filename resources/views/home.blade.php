
@extends('Templates.mytemplate')
@section('home')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
<div class="container">
	<div class="furniture-container homepage-container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				@include('Includes.side-bar')
			</div>
		
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
			<!-- ========================================== SECTION – HERO ========================================= -->
			
				<div id="hero" class="homepage-slider3">
					<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
						<div class="full-width-slider">	
							<div class="item" style="background-image: url(resources/views/assets/images/sliders/slider1.png);">
								<!-- /.container-fluid -->
							</div><!-- /.item -->
						</div><!-- /.full-width-slider -->
						
						<div class="full-width-slider">
							<div class="item full-width-slider" style="background-image: url(resources/views/assets/images/sliders/slider2.png);">
							</div><!-- /.item -->
						</div><!-- /.full-width-slider -->

					</div><!-- /.owl-carousel -->
				</div>
			
<!-- ========================================= SECTION – HERO : END ========================================= -->	
				<!-- ============================================== INFO BOXES ============================================== -->
<div class="info-boxes wow fadeInUp">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
						     <i class="icon fa fa-dollar"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading green">money back</h4>
						</div>
					</div>	
					<h6 class="text">30 Day Money Back Guarantee.</h6>
				</div>
			</div><!-- .col -->

			<div class="hidden-md col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-truck"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading orange">free shipping</h4>
						</div>
					</div>
					<h6 class="text">free ship-on oder over Rs. 600.00</h6>	
				</div>
			</div><!-- .col -->

			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-gift"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading red">Special Sale</h4>
						</div>
					</div>
					<h6 class="text">All items-sale up to 20% off </h6>	
				</div>
			</div><!-- .col -->
		</div><!-- /.row -->
	</div><!-- /.info-boxes-inner -->
	
</div><!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->		
			</div><!-- /.homebanner-holder -->
			
		</div><!-- /.row -->

		<!-- ============================================== SCROLL TABS ============================================== -->
		<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
			<div class="more-info-tab clearfix">
			   <h3 class="new-product-title pull-left">Featured Products</h3>
				<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
					<li class="active"><a href="#all" data-toggle="tab">All</a></li>
					<li><a href="#books" data-toggle="tab">Books</a></li>
					<li><a href="#furniture" data-toggle="tab">Furniture</a></li>
				</ul><!-- /.nav-tabs -->
			</div>

			<div class="tab-content outer-top-xs">
				<div class="tab-pane in active" id="all">			
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">


						    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=">
				<img  src="admin/productimages//" data-echo="admin/productimages//"  width="180" height="300" alt=""></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid="></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs.			</span>
										     <span class="price-before-discount">Rs.	</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->

					<div class="action"><a href="index.php?page=product&action=add&id=" class="lnk btn btn-primary">Add to Cart</a></div>

						<div class="action" style="color:red">Out of Stock</div>
					
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->


			</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>




	<div class="tab-pane" id="books">
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

						    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=">
				<img  src="admin/productimages//" data-echo="admin/productimages//"  width="180" height="300" alt=""></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid="></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs. 			</span>
										     <span class="price-before-discount">Rs.</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->

					<div class="action"><a href="index.php?page=product&action=add&id=" class="lnk btn btn-primary">Add to Cart</a></div>

						<div class="action" style="color:red">Out of Stock</div>

			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
	
		
								</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>






		<div class="tab-pane" id="furniture">
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">


						    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=">
				<img  src="admin/productimages//" data-echo="admin/productimages//"  width="180" height="300" alt=""></a>
			</div>		

			                        		   
		</div>
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid="></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs.			</span>
										     <span class="price-before-discount">Rs.</span>
									
			</div>
			
		</div>
				
					<div class="action"><a href="index.php?page=product&action=add&id=" class="lnk btn btn-primary">Add to Cart</a></div>

						<div class="action" style="color:red">Out of Stock</div>
					
			</div>
      
			</div>
		</div>
	
	
		
								</div>
					</div>
				</div>
			</div>
		</div>
		    

         <!-- ============================================== TABS ============================================== -->
			<div class="sections prod-slider-small outer-top-small">
				<div class="row">
					<div class="col-md-6">
	                   <section class="section">
	                   	<h3 class="section-title">Smart Phones</h3>
	                   	<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">
	   




		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid="><img  src="admin/productimages//" data-echo="admin/productimages//"  width="180" height="300"></a>
			</div><!-- /.image -->			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid="></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs. 		</span>
										     <span class="price-before-discount">Rs.</span>
									
			</div>
			
		</div>
				
					<div class="action"><a href="index.php?page=product&action=add&id=" class="lnk btn btn-primary">Add to Cart</a></div>

						<div class="action" style="color:red">Out of Stock</div>

			</div>
			</div>
		</div>


	
			                   	</div>
	                   </section>
					</div>
					<div class="col-md-6">
						<section class="section">
							<h3 class="section-title">Laptops</h3>
		                   	<div class="owl-carousel homepage-owl-carousel custom-carousel outer-top-xs owl-theme" data-item="2">




		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid="><img  src="admin/productimages//" data-echo="admin/productimages/"  width="300" height="300"></a>
			</div><!-- /.image -->			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid="></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs .			</span>
										     <span class="price-before-discount">Rs.</span>
									
			</div>
			
		</div>
				
					<div class="action"><a href="index.php?page=product&action=add&id=" class="lnk btn btn-primary">Add to Cart</a></div>

						<div class="action" style="color:red">Out of Stock</div>

			</div>
			</div>
		</div>


		
	
				                   	</div>
	                   </section>

					</div>
				</div>
			</div>
		<!-- ============================================== TABS : END ============================================== -->

		

	<section class="section featured-product inner-xs wow fadeInUp">
		<h3 class="section-title">Fashion</h3>
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">

				<div class="item">
					<div class="products">




												<div class="product">
							<div class="product-micro">
								<div class="row product-micro-row">
									<div class="col col-xs-6">
										<div class="product-image">
											<div class="image">
												<a href="admin/productimages/" data-lightbox="image-1" data-title="">
													<img data-echo="admin/productimages/" width="170" height="174" alt="">
													<div class="zoom-overlay"></div>
												</a>					
											</div><!-- /.image -->

										</div><!-- /.product-image -->
									</div><!-- /.col -->
									<div class="col col-xs-6">
										<div class="product-info">
											<h3 class="name"><a href="product-details.php?pid="></a></h3>
											<div class="rating rateit-small"></div>
											<div class="product-price">	
												<span class="price">
													Rs. 
												</span>

											</div><!-- /.product-price -->

					<div class="action"><a href="index.php?page=product&action=add&id=" class="lnk btn btn-primary">Add to Cart</a></div>
				
						<div class="action" style="color:red">Out of Stock</div>
					
										</div>
									</div><!-- /.col -->
								</div><!-- /.product-micro-row -->
							</div><!-- /.product-micro -->
						</div>


											</div>
				</div>
							</div>
		</section>
    @endsection
