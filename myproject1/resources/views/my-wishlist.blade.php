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
        @section('my-wishlist')
        <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Wishlish</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="my-wishlist-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 my-wishlist">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th colspan="4">my wishlist</th>
				</tr>
			</thead>
			<tbody>


				<tr>
					<td class="col-md-2"><img src="admin/productimages//" alt="" width="60" height="100"></td>
					<td class="col-md-6">
						<div class="product-name"><a href="product-details.php?pid="></a></div>


						<div class="rating">
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star non-rate"></i>
							<span class="review">(  Reviews )</span>
						</div>
						
						<div class="price">Rs. 
							.00
							<span>$900.00</span>
						</div>
					</td>
					<td class="col-md-2">
						<a href="my-wishlist.php?page=product&action=add&id=" class="btn-upper btn btn-primary">Add to cart</a>
					</td>
					<td class="col-md-2 close-btn">
						<a href="my-wishlist.php?del=" onClick="return confirm('Are you sure you want to delete?')" class=""><i class="fa fa-times"></i></a>
					</td>
				</tr>
				
				<tr>
					<td style="font-size: 18px; font-weight:bold ">Your Wishlist is Empty</td>

				</tr>
				
			</tbody>
		</table>
	</div>
</div>			</div><!-- /.row -->
		<!-- </div>/.sigin-in -->
    @endsection
</body>
</html>
