
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

							
								<table cellpadding="0" cellspacing="0" border="0" id="table"
									class="datatable-1 table table-bordered table-striped display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Tên khách hàng</th>
											<th>Email liên hệ</th>
											<th>SĐT</th>
											<th>Shippping Address/City/State/Pincode </th>
											<th>Billing Address/City/State/Pincode </th>
											<th>Reg. Date </th>
										
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										@foreach ($users as $user)
										<tr>
											<td>{{ $i++ }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->contactno }}</td>
											<td>{{ $user->shippingAddress }}</td>
											<td></td>
											<td>{{ $user->regDate }}</td>
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

