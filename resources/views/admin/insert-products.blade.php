<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
	
</head>
<body>
	
		<!-- Script -->
		<script type="text/javascript">

			function getSub () {
				let category = document.getElementById('category');
				if(category.value != "") {
					let subCategory =  @json($subcategories);
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

	<!-- Endscript -->

    @extends('admin.template.admintemplate')
        @section('insert-products')
        <div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Insert Product</h3>
							</div>
							<div class="module-body">

							
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	
									</div>




									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 
									</div>


									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="Post" enctype="multipart/form-data">
			@csrf
<div class="control-group">
<label class="control-label" for="basicinput">Tên danh mục</label>
<div class="controls">
<select  id="category" onchange="getSub()" name="category" class="span8 tip"   required>
<option value="">Select Category</option> 
@foreach ($categorys as $row)
<option value="{{$row->id}}">{{$row->categoryName}}</option>
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
<input type="text" minlength="8"    name="productName"  placeholder="Enter Product Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Tên công ty</label>
<div class="controls">
<input type="text"  minlength="8"    name="productCompany"  placeholder="Enter Product Comapny Name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Giá trước khi giảm</label>
<div class="controls">
<input type="number"  maxlength="10"  name="productpricebd"  placeholder="Enter Product Price" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Giá sau khi giảm</label>
<div class="controls">
<input type="number" maxlength="10" minlength="4"   name="productpricead"  placeholder="Enter Product Price" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Mô tả sản phẩm</label>
<div class="controls">
<textarea minlength="8"    name="productDescription"  placeholder="Enter Product Description" rows="6" class="span8 tip">
</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Phí vận chuyển</label>
<div class="controls">
<input type="number" maxlength="10"   name="productShippingcharge"  placeholder="Enter Product Shipping Charge" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Tồn hàng</label>
<div class="controls">
<select   name="productAvailability"  id="productAvailability" class="span8 tip" required>
<option value="">Select</option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Hình 1</label>
<div class="controls">
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Hình 2</label>
<div class="controls">
<input type="file" name="productimage2"  class="span8 tip" required>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Hình 3</label>
<div class="controls">
<input type="file" name="productimage3"  class="span8 tip">
</div>
</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Insert</button>
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




	<!-- End Section -->
    @endsection
</body>
</html>
