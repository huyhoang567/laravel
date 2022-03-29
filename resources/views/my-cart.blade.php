@extends('Templates.mytemplate')
@section('my-cart')
<div class="breadcrumb">
<div class="container">
<div class="breadcrumb-inner">
	<ul class="list-inline list-unstyled">
		<li><a href="#">Home</a></li>
		<li class='active'>Shopping Cart</li>
	</ul>
</div><!-- /.breadcrumb-inner -->
</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
<div class="container">
<div class="row inner-bottom-sm">
	<div class="shopping-cart">
		<div class="col-md-12 col-sm-12 shopping-cart-table ">
			<div class="table-responsive">
				<form name="cart" method="post">

					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="cart-romove item">Loại bỏ</th>
								<th class="cart-description item">Image</th>
								<th class="cart-product-name item">Tên sản phẩm</th>

								<th class="cart-qty item">Số lượng mua</th>
								<th class="cart-sub-total item">Đơn giá(VND)</th>
								<th class="cart-sub-total item">Phí giao hàng(VND)</th>
								<th class="cart-total last-item">Tổng dự kiến(VND)</th>
								<th>Hành động</th>
							</tr>
						</thead><!-- /thead -->
						<tfoot>
							<tr>
								<td colspan="7">
									<div class="shopping-cart-btn">
										<span class="">
											<a href="home"
												class="btn btn-upper btn-primary outer-left-xs">Continue
												Shopping</a>
											<input type="submit" name="submit" value="Update shopping cart"
												class="btn btn-upper btn-primary pull-right outer-right-xs">
										</span>
									</div><!-- /.shopping-cart-btn -->
								</td>
							</tr>
						</tfoot>
						<tbody>
							{{-- Do not delete --}}
							<form action="delete-mycart" method="POST" style="display: none;">
								@method('delete')
								@csrf
								{{-- <button class="btn-sm btn-danger" type="submit" name="id" value="null"></button> --}}
							</form>
							@foreach ($cart->getCart() as $each)
							<tr>
								<td class="romove-item">
									<form action="delete-mycart" method="POST">
										@method('delete')
										@csrf
										<button class="btn-sm btn-danger" type="submit" name="id" value="{{$each->id}}">Xóa</button>
									</form>
								</td>
								<td class="cart-image">
									<a class="entry-thumbnail" href="detail.html">
										<img src="public/productimages/{{$each->id}}/{{$each->productImage1}}" alt="" width="114" height="146">
									</a>
								</td>
								<td class="cart-product-name-info">
									<h4 class='cart-product-description'><a href="product-details.php?pid="></a>
									</h4>
									<div class="row">
										<div class="col-sm-4">
											<div class="rating rateit-small"></div>
										</div>
										<div class="col-sm-8">

											<div class="reviews">
												( Reviews )
											</div>

										</div>
									</div><!-- /.row -->

								</td>
							<form action="update-mycart" method="post">
								@csrf
								<td class="cart-product-quantity">
									<div class="quant-input">
										<div class="arrows">
											<div class="arrow plus gradient"><span class="ir"><i
														class="icon fa fa-sort-asc"></i></span></div>
											<div class="arrow minus gradient"><span class="ir"><i
														class="icon fa fa-sort-desc"></i></span></div>
										</div>
										<input type="text" value="{{$each->quantity}}" name="quantity">

									</div>
								</td>
								<td class="cart-product-sub-total">
									<span class="cart-sub-total-price">{{number_format($each->productPrice)}}</span>
								</td>
								<td class="cart-product-sub-total"><span class="cart-sub-total-price">{{number_format($each->shippingCharge)}}.00</span>
								</td>

								<td class="cart-product-grand-total"><span
										class="cart-grand-total-price">
											{{number_format($each->productPrice*$each->quantity + $each->quantity*$each->shippingCharge)}}
										</span>
								</td>
								<td>
									<button type="submit" class="btn-sm btn-secondary" name="id" value="{{$each->id}}">
										<i class="icon-edit"></i>Cập nhật
									</button>

								</td>
							</form>
							</tr>		
							@endforeach
						</tbody><!-- /tbody -->
					</table><!-- /table -->

			</div>
		</div><!-- /.shopping-cart-table -->
		<div class="col-md-4 col-sm-12 estimate-ship-tax">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							<span class="estimate-title">Shipping Address</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="form-group">
								<div class="form-group">
									<label class="info-title" for="Billing Address">Billing
										Address<span>*</span></label>
									<textarea class="form-control unicase-form-control text-input"
										name="billingaddress" required="required"></textarea>
								</div>
{{--  --}}
								<div class="form-group">
									<label class="info-title" for="Billing State ">Billing State
										<span>*</span></label>
									<input type="text" class="form-control unicase-form-control text-input"
										id="bilingstate" name="bilingstate" value="" required>
								</div>
								<div class="form-group">
									<label class="info-title" for="Billing City">Billing City
										<span>*</span></label>
									<input type="text" class="form-control unicase-form-control text-input"
										id="billingcity" name="billingcity" required="required" value="">
								</div>
								<div class="form-group">
									<label class="info-title" for="Billing Pincode">Billing Pincode
										<span>*</span></label>
									<input type="text" class="form-control unicase-form-control text-input"
										id="billingpincode" name="billingpincode" required="required" value="">
								</div>
{{--  --}}
								<button type="submit" name="update"
									class="btn-upper btn btn-primary checkout-page-button">Update</button>

							</div>

						</td>
					</tr>
				</tbody><!-- /tbody -->
			</table><!-- /table -->
		</div>
{{--  --}}
		<div class="col-md-4 col-sm-12 estimate-ship-tax">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>
							<span class="estimate-title">Billing Address</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="form-group">


								<div class="form-group">
									<label class="info-title" for="Shipping Address">Shipping
										Address<span>*</span></label>
									<textarea class="form-control unicase-form-control text-input"
										name="shippingaddress"
										required="required"></textarea>
								</div>



								<div class="form-group">
									<label class="info-title" for="Billing State ">Shipping State
										<span>*</span></label>
									<input type="text" class="form-control unicase-form-control text-input"
										id="shippingstate" name="shippingstate"
										value="" required>
								</div>
								<div class="form-group">
									<label class="info-title" for="Billing City">Shipping City
										<span>*</span></label>
									<input type="text" class="form-control unicase-form-control text-input"
										id="shippingcity" name="shippingcity" required="required"
										value="">
								</div>
								<div class="form-group">
									<label class="info-title" for="Billing Pincode">Shipping Pincode
										<span>*</span></label>
									<input type="text" class="form-control unicase-form-control text-input"
										id="shippingpincode" name="shippingpincode" required="required"
										value="">
								</div>


								<button type="submit" name="shipupdate"
									class="btn-upper btn btn-primary checkout-page-button">Update</button>



							</div>

						</td>
					</tr>
				</tbody><!-- /tbody -->
			</table><!-- /table -->
		</div>
		<div class="col-md-4 col-sm-12 cart-shopping-total">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>

							<div class="cart-grand-total">
								<span class="inner-left-md">{{
										number_format(array_reduce($cart->getCart(), function($a, $b) {
											return $a + $b->quantity*$b->productPrice + $b->quantity*$b->shippingCharge;
										}))
									}} VND</span>
							</div>
						</th>
					</tr>
				</thead><!-- /thead -->
				<tbody>
					<tr>
						<td>
							<div class="cart-checkout-btn pull-right">
								<button type="submit" name="ordersubmit" class="btn btn-primary">PROCCED TO
									CHEKOUT</button>

							</div>
						</td>
					</tr>
				</tbody><!-- /tbody -->
			</table>

		</div>
	</div>
</div>
</form>
@endsection