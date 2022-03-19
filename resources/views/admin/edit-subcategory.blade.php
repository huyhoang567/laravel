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
        @section('edit-subcategory')
		<div class="content">

<div class="module">
	<div class="module-head">
		<h3>Edit SubCategory</h3>
	</div>
	<div class="module-body">


			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Well done!</strong>	
			</div>



			<br />

<form class="form-horizontal row-fluid" name="Category" method="post" >


<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" required>
<option value=""></option>

<option value=""></option>

</select>
</div>
</div>




<div class="control-group">
<label class="control-label" for="basicinput">SubCategory Name</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="subcategory" value="" class="span8 tip" required>
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
