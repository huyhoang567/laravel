@extends('Templates.mytemplate')
@section('product-details')
<div class="breadcrumb">

	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">

				<li><a href="index.php">Home</a></li>
				<li></a></li>
				<li></li>
				<li class='active'></li>
			</ul>

		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product outer-bottom-sm '>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">


					<!-- ==============================================CATEGORY============================================== -->
					<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
						<h3 class="section-title">Category</h3>
						<div class="sidebar-widget-body m-t-10">
							<div class="accordion">


								<div class="accordion-group">
									<div class="accordion-heading">
										<a href="category.php?cid=" class="accordion-toggle collapsed">

										</a>
									</div>

								</div>

							</div>
						</div>
					</div>
					<!-- ============================================== CATEGORY : END ============================================== -->
					<!-- ============================================== HOT DEALS ============================================== -->
					<div class="sidebar-widget hot-deals wow fadeInUp">
						<h3 class="section-title">Hot deals</h3>
						<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
							<div class="item">
								<div class="products">
									<div class="hot-deal-wrapper">
										<div class="image">
											<img src="resources/views/admin/productimages/"
												data-echo="resources/views/admin/productimages/" alt="">
										</div>
									</div><!-- /.hot-deal-wrapper -->

									<div class="product-info text-left m-t-20">
										<h3 class="name"><a href="product-details.php?pid=">
												{{$product->productName}}</a></h3>
										<div class="rating rateit-small"></div>

										<div class="product-price">
											<span class="price">
												{{ number_format($product->productPrice) }} VND
											</span>

											<span class="price-before-discount">Rs.</span>

										</div><!-- /.product-price -->

									</div><!-- /.product-info -->

									<div class="cart clearfix animate-effect">
										<div class="action">

											<div class="add-cart-button btn-group">
												<button class="btn btn-primary icon" data-toggle="dropdown"
													type="button">

													<button class="btn btn-primary icon" data-toggle="dropdown"
														type="button">
														<i class="fa fa-shopping-cart"></i>
													</button>
													<a href="category.php?page=product&action=add&id=">
														<button class="btn btn-primary" type="button">Add to
															cart</button></a>

													<div class="action" style="color:red">Out of Stock</div>


											</div>

										</div><!-- /.action -->
									</div><!-- /.cart -->
								</div>
							</div>



						</div><!-- /.sidebar-widget -->
					</div>

					<!-- ============================================== COLOR: END ============================================== -->
				</div>
			</div><!-- /.sidebar -->



			<div class='col-md-9'>
				<div class="row  wow fadeInUp">
					<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
						<div class="product-item-holder size-big single-product-gallery small-gallery">

							<div id="owl-single-product">

								<div class="single-product-gallery-item" id="slide">
									<a data-lightbox="image-1" data-title="" href="admin/productimages/">
										<img class="img-responsive" alt="" 
											src="assets/images/blank.gif"
											data-echo="resources/views/admin/productimages/{{$product->id}}/{{$product->productImage1}}" 
											width="370" height="350" />
									</a>
								</div>
								{{--  --}}
								<div class="single-product-gallery-item" id="slide1">
									<a data-lightbox="image-1" data-title="" href="admin/productimages//">
										<img class="img-responsive" alt="" 
											src="assets/images/blank.gif"
											data-echo="resources/views/admin/productimages/{{$product->id}}/{{$product->productImage1}}" 
											width="370" height="350" />
									</a>
								</div><!-- /.single-product-gallery-item -->

								<div class="single-product-gallery-item" id="slide2">
									<a data-lightbox="image-1" data-title="Gallery" href="admin/productimages//">
										<img class="img-responsive" alt="" src="assets/images/blank.gif"
											data-echo="resources/views/admin/productimages/{{$product->id}}/{{$product->productImage2}}" 
											width="370" height="350" />
									</a>
								</div><!-- /.single-product-gallery-item -->

								<div class="single-product-gallery-item" id="slide3">
									<a data-lightbox="image-1" data-title="Gallery" href="admin/productimages//">
										<img class="img-responsive" alt="" src="assets/images/blank.gif"
											data-echo="resources/views/admin/productimages/{{$product->id}}/{{$product->productImage3}}" 
											width="370" height="350" />
									</a>
								</div>

							</div><!-- /.single-product-slider -->


							<div class="single-product-gallery-thumbs gallery-thumbs">

								<div id="owl-single-product-thumbnails">
									<div class="item">
										<a class="horizontal-thumb active" data-target="#owl-single-product"
											data-slide="1" href="#slide1">
											<img class="img-responsive" alt="" 
												src="assets/images/blank.gif"
												data-echo="resources/views/admin/productimages/{{$product->id}}/{{$product->productImage1}}"
												height="85" />
										</a>
									</div>

									<div class="item">
										<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2"
											href="#slide2">
											<img class="img-responsive" width="85" alt="" src="assets/images/blank.gif"
												data-echo="resources/views/admin/productimages/{{$product->id}}/{{$product->productImage2}}" />
										</a>
									</div>
									<div class="item">

										<a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3"
											href="#slide3">
											<img class="img-responsive" width="85" alt="" src="assets/images/blank.gif"
												data-echo="resources/views/admin/productimages/{{$product->id}}/{{$product->productImage3}}" 
												height="85" />
										</a>
									</div>




								</div><!-- /#owl-single-product-thumbnails -->



							</div>

						</div>
					</div>




					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name"></h1>

							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">( Reviews)</a>
										</div>
									</div>
								</div><!-- /.row -->
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label">Availability :  {{ $product->productAvailability }}</span>
										</div>
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value"></span>
										</div>
									</div>
								</div><!-- /.row -->
							</div>



							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label">Product Brand :  {{ $product->productCompany }}</span>
										</div>
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value"></span>
										</div>
									</div>
								</div><!-- /.row -->
							</div>


							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label">Shipping Charge :  {{ $product->shippingCharge }}</span>
										</div>
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value"></span>
										</div>
									</div>
								</div><!-- /.row -->
							</div>

							<div class="price-container info-container m-t-20">
								<div class="row">


									<div class="col-sm-6">
										<div class="price-box">
											<span class="price">Rs. </span>
											<span class="price-strike">Rs.</span>
										</div>
									</div>




									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
												title="Wishlist" href="product-details.php?pid=&&action=wishlist">
												<i class="fa fa-heart"></i>
											</a>

											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->






							<div class="quantity-container info-container">
								<div class="row">

									<div class="col-sm-2">
										<span class="label">Qty :</span>
									</div>

									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
												<div class="arrows">
													<div class="arrow plus gradient"><span class="ir"><i
																class="icon fa fa-sort-asc"></i></span></div>
													<div class="arrow minus gradient"><span class="ir"><i
																class="icon fa fa-sort-desc"></i></span></div>
												</div>
												<input type="text" value="1">
											</div>
										</div>
									</div>

									<div class="col-sm-7">

										<a href="product-details.php?page=product&action=add&id="
											class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i>
											ADD TO CART</a>

										<div class="action" style="color:red">Out of Stock</div>

									</div>


								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							<div class="product-social-link m-t-20 text-right">
								<span class="social-label">Share :</span>
								<div class="social-icons">
									<ul class="list-inline">
										<li><a class="fa fa-facebook" href="http://facebook.com/transvelo"></a></li>
										<li><a class="fa fa-twitter" href="#"></a></li>
										<li><a class="fa fa-linkedin" href="#"></a></li>
										<li><a class="fa fa-rss" href="#"></a></li>
										<li><a class="fa fa-pinterest" href="#"></a></li>
									</ul><!-- /.social-icons -->
								</div>
							</div>




						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->


				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">

								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text">{{ $product->productDescription }}</p>
									</div>
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">

										<div class="product-reviews">
											<h4 class="title">Customer Reviews</h4>

											<div class="reviews" style="border: solid 1px #000; padding-left: 2% ">
												<div class="review">
													<div class="review-title"><span class="summary"></span><span
															class="date"><i
																class="fa fa-calendar"></i><span></span></span></div>

													<div class="text">""</div>
													<div class="text"><b>Quality :</b> Star</div>
													<div class="text"><b>Price :</b> Star</div>
													<div class="text"><b>value :</b> Star</div>
													<div class="author m-t-15"><i class="fa fa-pencil-square-o"></i>
														<span class="name"></span></div>
												</div>

											</div>
											<!-- /.reviews -->
										</div><!-- /.product-reviews -->
										<form role="form" class="cnt-form" name="review" method="post">


											<div class="product-add-review">
												<h4 class="title">Write your own review</h4>
												<div class="review-table">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th class="cell-label">&nbsp;</th>
																	<th>1 star</th>
																	<th>2 stars</th>
																	<th>3 stars</th>
																	<th>4 stars</th>
																	<th>5 stars</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="cell-label">Quality</td>
																	<td><input type="radio" name="quality" class="radio"
																			value="1"></td>
																	<td><input type="radio" name="quality" class="radio"
																			value="2"></td>
																	<td><input type="radio" name="quality" class="radio"
																			value="3"></td>
																	<td><input type="radio" name="quality" class="radio"
																			value="4"></td>
																	<td><input type="radio" name="quality" class="radio"
																			value="5"></td>
																</tr>
																<tr>
																	<td class="cell-label">Price</td>
																	<td><input type="radio" name="price" class="radio"
																			value="1"></td>
																	<td><input type="radio" name="price" class="radio"
																			value="2"></td>
																	<td><input type="radio" name="price" class="radio"
																			value="3"></td>
																	<td><input type="radio" name="price" class="radio"
																			value="4"></td>
																	<td><input type="radio" name="price" class="radio"
																			value="5"></td>
																</tr>
																<tr>
																	<td class="cell-label">Value</td>
																	<td><input type="radio" name="value" class="radio"
																			value="1"></td>
																	<td><input type="radio" name="value" class="radio"
																			value="2"></td>
																	<td><input type="radio" name="value" class="radio"
																			value="3"></td>
																	<td><input type="radio" name="value" class="radio"
																			value="4"></td>
																	<td><input type="radio" name="value" class="radio"
																			value="5"></td>
																</tr>
															</tbody>
														</table><!-- /.table .table-bordered -->
													</div><!-- /.table-responsive -->
												</div><!-- /.review-table -->

												<div class="review-form">
													<div class="form-container">


														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="exampleInputName">Your Name <span
																			class="astk">*</span></label>
																	<input type="text" class="form-control txt"
																		id="exampleInputName" placeholder="" name="name"
																		required="required">
																</div><!-- /.form-group -->
																<div class="form-group">
																	<label for="exampleInputSummary">Summary <span
																			class="astk">*</span></label>
																	<input type="text" class="form-control txt"
																		id="exampleInputSummary" placeholder=""
																		name="summary" required="required">
																</div><!-- /.form-group -->
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Review <span
																			class="astk">*</span></label>

																	<textarea class="form-control txt txt-review"
																		id="exampleInputReview" rows="4" placeholder=""
																		name="review" required="required"></textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->

														<div class="action text-right">
															<button name="submit"
																class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
														</div><!-- /.action -->

										</form><!-- /.cnt-form -->
									</div><!-- /.form-container -->
								</div><!-- /.review-form -->

							</div><!-- /.product-add-review -->

						</div><!-- /.product-tab -->
					</div><!-- /.tab-pane -->



				</div><!-- /.tab-content -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.product-tabs -->


	<!-- ============================================== UPSELL PRODUCTS ============================================== -->
	<section class="section featured-product wow fadeInUp">
		<h3 class="section-title">Realted Products </h3>
		<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
			<div class="item item-carousel">
				<div class="products">
					<div class="product">
						<div class="product-image">
							<div class="image">
								<a href="product-details.php?pid="><img src="assets/images/blank.gif"
										data-echo="admin/productimages/" width="150" height="240" alt=""></a>
							</div><!-- /.image -->


						</div><!-- /.product-image -->


						<div class="product-info text-left">
							<h3 class="name"><a href="product-details.php?pid="></a></h3>
							<div class="rating rateit-small"></div>
							<div class="description"></div>

							<div class="product-price">
								<span class="price">
									Rs. </span>
								<span class="price-before-discount">Rs.
								</span>

							</div><!-- /.product-price -->

						</div><!-- /.product-info -->
						<div class="cart clearfix animate-effect">
							<div class="action">
								<ul class="list-unstyled">
									<li class="add-cart-button btn-group">
										<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
											<i class="fa fa-shopping-cart"></i>
										</button>
										<a href="product-details.php?page=product&action=add&id="
											class="lnk btn btn-primary">Add to cart</a>

									</li>


								</ul>
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div><!-- /.product -->

				</div><!-- /.products -->
			</div><!-- /.item -->



		</div><!-- /.home-owl-carousel -->
	</section><!-- /.section -->


	<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

</div><!-- /.col -->
<div class="clearfix"></div>
<!-- </div> -->
@endsection