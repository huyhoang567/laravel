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
        @section('update-image3')
        <div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Update Product Image 3</h3>
							</div>
							<div class="module-body">

	
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>
									</div>




									<br />

			<form class="form-horizontal row-fluid"  action="update-image3.php?id={{$products->id}}" name="insertproduct" method="post" enctype="multipart/form-data">
			@csrf
<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<input type="text"    name="productName"  readonly value="{{$products->productName}}" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Current Product Image 3</label>
<div class="controls">
<img src="../public/productimages/{{$products->id}}/{{$products->productImage3}}" width="200" height="100"> 
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">New Product Image 3</label>
<div class="controls">
<input type="file" name="productimage3" id="productimage3" value="" class="span8 tip" required>
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
