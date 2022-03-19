<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    @extends('Templates.mytemplate')
        @section('order-detail')
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
					<th class="cart-romove item">#</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
			
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Price Per unit</th>
					<th class="cart-total item">Grandtotal</th>
					<th class="cart-total item">Payment Method</th>
					<th class="cart-description item">Order Date</th>
					<th class="cart-total last-item">Action</th>
				</tr>
			</thead><!-- /thead -->
			
			<tbody>

				<tr>
					<td></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src="admin/productimages//" alt="" width="84" height="146">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="product-details.php?pid=">
						</a></h4>
						
						
					</td>
					<td class="cart-product-quantity">
						   
		            </td>
					<td class="cart-product-sub-total">  </td>
					<td class="cart-product-grand-total"></td>
					<td class="cart-product-sub-total">  </td>
					<td class="cart-product-sub-total">  </td>
					
					<td>
 <a href="javascript:void(0);" onClick="popUpWindow('track-order.php?oid=');" title="Track order">
					Track</td>
				</tr>

				<tr><td colspan="8">Either order id or  Registered email id is invalid</td></tr>
				
			</tbody><!-- /tbody -->
		</table><!-- /table -->
		
	</div>
</div>

		</div><!-- /.shopping-cart -->
		<!-- </div> /.row -->
		</form>
    @endsection
</body>
</html>
