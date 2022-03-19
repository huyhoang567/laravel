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

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">




<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value=""></option> 


<option value=""></option>

</select>
</div>
</div>

									
<div class="control-group">
<label class="control-label" for="basicinput">Sub Category</label>
<div class="controls">

<select   name="subcategory"  id="subcategory" class="span8 tip" required>
<option value=""></option>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<input type="text"    name="productName"  placeholder="Enter Product Name" value="" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Company</label>
<div class="controls">
<input type="text"    name="productCompany"  placeholder="Enter Product Comapny Name" value="" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Product Price Before Discount</label>
<div class="controls">
<input type="text"    name="productpricebd"  placeholder="Enter Product Price" value=""  class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Price</label>
<div class="controls">
<input type="text"    name="productprice"  placeholder="Enter Product Price" value="" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Description</label>
<div class="controls">
<textarea  name="productDescription"  placeholder="Enter Product Description" rows="6" class="span8 tip">

</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Shipping Charge</label>
<div class="controls">
<input type="text"    name="productShippingcharge"  placeholder="Enter Product Shipping Charge" value="" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Product Availability</label>
<div class="controls">
<select   name="productAvailability"  id="productAvailability" class="span8 tip" required>
<option value=""></option>
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Product Image1</label>
<div class="controls">
<img src="productimages/" width="200" height="100"> <a href="update-image1.php?id=">Change Image</a>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Product Image2</label>
<div class="controls">
<img src="productimages/" width="200" height="100"> <a href="update-image2.php?id=">Change Image</a>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Product Image3</label>
<div class="controls">
<img src="productimages/" width="200" height="100"> <a href="update-image3.php?id=">Change Image</a>
</div>
</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
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
</html>
