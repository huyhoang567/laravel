<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
	

    @extends('admin.template.admintemplate')
        @section('edit-products')
        <div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Cập nhật sản phẩm</h3>
							</div>
							<div class="module-body">
							<?php
						
							?>
							 @if(!empty($update)){
								@if($update == true)
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	
									</div>
						



							@else
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 
									</div>
							@endif
							 }
						@endif

									<br />

			<form class="form-horizontal row-fluid"  action="update-product?id={{$products->id}}"  name="insertproduct" method="post" enctype="multipart/form-data">
			@csrf
<div class="control-group">
<label class="control-label" for="basicinput">Danh mục</label>
<div class="controls">
<select name="category" id='category' class="span8 tip"  onchange="getSub()"  required>
@foreach ($categorys as $row)
<option {{ ($products->category)== $row->id ?'selected':''}} value="{{$row->id}}"> {{$row->categoryName}}</option>
@endforeach
</select>
</div>
</div>

									
<div class="control-group">
<label class="control-label" for="basicinput">Danh mục con</label>
<div class="controls">
<select   name="subcategory"  id="subcategory" class="span8 tip" required>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Tên sản phẩm</label>
<div class="controls">
<input type="text" minlength="8" name="productName"  placeholder="Enter Product Name" value="{{$products->productName}}" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Tên công ty</label>
<div class="controls">
<input type="text"  minlength="8"    name="productCompany"  placeholder="Enter Product Comapny Name" value="{{$products->productCompany}}" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label"  for="basicinput">Giảm giá</label>
<div class="controls">
<input type="number" maxlength="10" min="0"  name="productpricebd"  placeholder="Enter Product Price" value="{{$products->productPriceBeforeDiscount}}"  class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Giá cuối cùng </label>
<div class="controls">
<input type="number" maxlength="10" minlength="4"    name="productprice"  placeholder="Enter Product Price" value="{{$products->productPrice}}" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Mô tả sản phẩm</label>
<div class="controls">
<textarea  name="productDescription"   minlength="8"  placeholder="Enter Product Description" rows="6" class="span8 tip">
{{$products->productDescription}}
</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Phí vận chuyển</label>
<div class="controls">
<input type="number"  maxlength="10" min="0"  name="productShippingcharge"  placeholder="Enter Product Shipping Charge" value="{{$products->shippingCharge}}" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Tồn hàg</label>
<div class="controls">
<select   name="productAvailability"  id="productAvailability" class="span8 tip" required>
<option value=""></option>
<option {{($products->productAvailability) == 'In Stock' ?'selected':''}} value="In Stock">In Stock</option>
<option  {{($products->productAvailability) == 'Out of Stock' ?'selected':''}} value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Hình 1</label>
<div class="controls">
<img  src="../public/productimages/{{$products->id}}/{{$products->productImage1}}"  width="200" height="100"> 
 <a href="update-image1.php?id={{$products->id}}">Change Image</a>

</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Hình 2</label>
<div class="controls">
<img src="../public/productimages/{{$products->id}}/{{$products->productImage2}}" width="200" height="100"> <a href="update-image2.php?id={{$products->id}}">Change Image</a>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Hình 3</label>
<div class="controls">
<img src="../public/productimages/{{$products->id}}/{{$products->productImage3}}" width="200" height="100"> <a href="update-image3.php?id={{$products->id}}">Change Image</a>
</div>
</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Cập nhật</button>
											</div>
										</div>
									</form>
							</div>
						</div>
												
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

    @endsection
</body>
	<!-- Script -->
	<script type="text/javascript">
			let subCategory =  @json($subcategories);
			let products = @json($products);
			window.onload = ()=>{
			let subsDisplay = subCategory.filter(elem=>{
						return elem.categoryid == products.category
					})
					var option ='';
					subsDisplay.forEach(elem=>{
             	     option += `<option ${products.subCategory==elem.id ?'selected' :''} value='${elem.id}'> ${elem.subcategory} </option>`;
					})
					document.getElementById('subcategory').innerHTML = option
			}
			function getSub () {
				let category = document.getElementById('category');
				if(category.value != "") {
					let subsDisplay = subCategory.filter(elem=>{
						return elem.categoryid == category.value
					})
					var option ='';
					subsDisplay.forEach(elem=>{
             	     option += `<option value='${elem.id}'> ${elem.subcategory} </option>`;
					})
					
					document.getElementById('subcategory').innerHTML = option
				}
			}
        
	</script>
</html>
