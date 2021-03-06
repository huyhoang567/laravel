
{{--  --}}
{{--  --}}
@extends('Templates.mytemplate')
@section('category')
<div class="body-content outer-top-xs">
<div class='container'>
<div class='row outer-bottom-sm'>
	<div class='col-md-3 sidebar col-xs-12 col-sm-12'>
		<!-- ================================== TOP NAVIGATION ================================== -->
		<div class="side-menu animate-dropdown outer-bottom-xs">
			{{-- <div class="side-menu animate-dropdown outer-bottom-xs">
				<div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Sub Categories</div>
				<nav class="yamm megamenu-horizontal" role="navigation">

					<ul class="nav">

						<li class="dropdown menu-item">

							<a href="sub-category.php?scid=" class="dropdown-toggle"><i
									class="icon fa fa-desktop fa-fw"></i>SDF

							</a>
						</li>

					</ul>
				</nav>
			</div> --}}
			
			@include('Includes.side-bar')

		</div>
		<!-- ================================== TOP NAVIGATION : END ================================== -->
		<div class="sidebar-module-container">
			<h3 class="section-title"></h3>
			<div class="sidebar-filter">
				<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
				<div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
					<div class="widget-header m-t-20">
						<h4 class="widget-title">Category</h4>
					</div>
					<div class="sidebar-widget-body m-t-10">

						<div class="accordion">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="category.php?cid=" class="accordion-toggle collapsed">

									</a>
								</div>
							</div>
						</div>

					</div><!-- /.sidebar-widget-body -->
				</div><!-- /.sidebar-widget -->




				<!-- ============================================== COLOR: END ============================================== -->

			</div><!-- /.sidebar-filter -->
		</div><!-- /.sidebar-module-container -->
	</div><!-- /.sidebar -->
	<div class='col-md-9'>
		<!-- ========================================== SECTION ??? HERO ========================================= -->
{{-- 
		<div id="category" class="category-carousel hidden-xs">
			<div class="item">
				<div class="image">
					<img src="assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive">
				</div>
				<div class="container-fluid">
					<div class="caption vertical-top text-left">
						<div class="big-text">
							<br />
						</div>



						<div class="excerpt hidden-sm hidden-md">

						</div>


					</div><!-- /.caption -->
				</div><!-- /.container-fluid -->
			</div>
		</div> --}}

		<div class="search-result-container">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active " id="grid-container">
					<div class="category-product  inner-top-vs">
						<div class="row">
							@if (count($products) > 0)
							@foreach ($products as $p)
							<div class="col-sm-6 col-md-4 wow fadeInUp">
								<div class="products">
									<div class="product">
										<div class="product-image">
											<div class="image">
												<a href="product-details?productName={{$p->productName}}">
													<img
														src="assets/images/blank.gif"
														data-echo="public/productimages/{{$p->id}}/{{$p->productImage1}}" alt="" width="200"
														height="300">
													</a>
											</div><!-- /.image -->
										</div><!-- /.product-image -->


										<div class="product-info text-left">
											<h3 class="name"><a href="product-details?productName={{$p->productName}}">
												{{$p->productName}}
											</a></h3>
											<div class="rating rateit-small"></div>
											<div class="description"></div>

											<div class="product-price">
												<span class="price">
													{{number_format($p->productPrice)}} VND </span>
												<span class="price-before-discount">{{number_format($p->productPriceBeforeDiscount)}} VND </span>

											</div><!-- /.product-price -->

										</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
											<div class="action">
												<ul class="list-unstyled">
													<li class="add-cart-button btn-group">


														<button class="btn btn-primary icon"
															data-toggle="dropdown" type="button">
															<i class="fa fa-shopping-cart"></i>
														</button>
														<a href="addToCart/{{$p->id}}">
															<button class="btn btn-primary" type="button">Add to
																cart</button></a>

														<div class="action" style="color:red">Out of Stock</div>


													</li>

													<li class="lnk wishlist">
														<a class="add-to-cart"
															href="category.php?pid=&&action=wishlist"
															title="Wishlist">
															<i class="icon fa fa-heart"></i>
														</a>
													</li>


												</ul>
											</div><!-- /.action -->
										</div><!-- /.cart -->
									</div>
								</div>
							</div>
							@endforeach


							@else

							<div class="col-sm-6 col-md-4 wow fadeInUp">
								<h3>No Product Found</h3>
							</div>

							@endif




						</div><!-- /.row -->
					</div><!-- /.category-product -->

				</div><!-- /.tab-pane -->



			</div><!-- /.search-result-container -->

		</div><!-- /.col -->
	
	<!-- </div> -->
@endsection