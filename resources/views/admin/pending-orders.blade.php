<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đang chờ xác nhận</title>
</head>
<body>
    @extends('admin.template.admintemplate')
        @section('pending-orders')
        <div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Đơn hàng đang chờ xác nhận({{count($pendingorder)}})</h3>
							</div>
							<div class="module-body table">
					<?php if(isset($_GET['del']))
					{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	
									</div>
					<?php } ?>

									<br />

							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" >
									<thead>
										<tr>
											<th>#</th>
											<th>Tên khách hàng</th>
											<th width="50">Email / Số điện thoại</th>
											<th>Địa chỉ nhận hàng</th>
											<th>Sản phẩm</th>
											<th>Số lượng</th>
											<th>Tổng cộng</th>
											<th>Ngày đặt hàng</th>
											<th>Hành động</th>
											
										
										</tr>
									</thead>
								
<tbody>
	<?php $tt = 1;?>
	@foreach($pendingorder as $row)									
										<tr>
											<td><?php echo $tt++;?></td>
											<td>{{$row -> username}}</td>
                                            <td>{{$row -> useremail}} / {{$row -> usercontact}}</td>
                                            <td>{{$row -> shippingaddress}}, {{$row -> shippingcity}}, {{$row -> shippingstate}}, {{$row -> shippingpincode}}</td>
											<td>{{$row -> productname}}</td>
											<td>{{$row -> quantity}}</td>
											<td>{{$row -> quantity * $row -> productprice + $row -> shippingcharge}}</td>
											<td>{{$row -> orderdate}}</td>
											<td>   <a href="update-order?id={{$row -> id}}" title="Update order" target="_blank"><i class="icon-edit"></i></a>
											</td>
											</tr>
	@endforeach
										</tbody>
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
