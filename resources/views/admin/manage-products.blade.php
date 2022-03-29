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
        @section('manage-products')
        <div class="content">
<?php 

?>

	<div class="module">
							<div class="module-head">
								<h3>Manage Products</h3>
							</div>
							<div class="module-body table">

									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	
									</div>


									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Product Name</th>
											<th>Category </th>
											<th>Subcategory</th>
											<th>Price</th>
											<th>Availability</th>
											<th>Company Name</th>
											<th>Product Creation Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

									@foreach($products as $row)
										<tr>
											<td>{{$row->id}} </td>
											<td>{{$row->productName}}</td>
											<td>{{$row->categoryName}}</td>
											<td>{{$row->subcategory}}</td>
											<td> {{$row->productPrice}}</td>
											<td> {{$row->productAvailability}}</td>
											<td>{{$row->productCompany}}</td>
											<td>{{$row->postingDate}}</td>
											<td>
											<a href="edit-products.php?id={{$row->id}}" ><i class="icon-edit"></i></a>
											<a href="manage-products.php?id={{$row->id}}&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
									@endforeach
										
								</table>
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
