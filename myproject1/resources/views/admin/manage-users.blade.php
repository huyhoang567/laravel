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
        @section('manage-users')
        <div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Manage Users</h3>
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
											<th> Name</th>
											<th>Email </th>
											<th>Contact no</th>
											<th>Shippping Address/City/State/Pincode </th>
											<th>Billing Address/City/State/Pincode </th>
											<th>Reg. Date </th>
										
										</tr>
									</thead>
									<tbody>


										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											
										
										
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
