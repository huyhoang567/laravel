@extends('admin.template.admintemplate')
@section('today-orders')
<div class="content">

	<div class="module">
		<div class="module-head">
			<h3>Đơn hàng hôm nay({{count($orders)}})</h3>
		</div>
		<div class="module-body table">
			@if(isset($_GET['del']))
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Oh snap!</strong>
			</div>
			@endif

			<br />


			<table id="table" cellpadding="0" cellspacing="0" border="0"
				class="datatable-1 table table-bordered table-striped	 display table-responsive">
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
					@foreach($orders as $row)
					<tr>
						<td>
							<?php echo $tt++;?>
						</td>
						<td>{{$row -> name}}</td>
						<td>{{$row -> email}}/{{$row -> contactno}}</td>

						<td>{{$row -> shippingAddress}}</td>
						<td>
							<table>
								@foreach ($row->products as $p)
									<tr>
										<td>{{ $p->productName }}</td>
										<td>{{ $p->quantity }}</td>
									</tr>
								@endforeach
							</table>
						</td>
						<td>
							<table>
								@foreach ($row->products as $p)
									<tr>
										<td>{{ $p->quantity }}</td>
									</tr>
								@endforeach
							</table>	
						</td>
						{{-- <td>{{($row -> quantity) * ($row -> productPrice) + ($row -> shippingCharge)}}</td> --}}
						<td>{{$row -> orderDate}}</td>
						<td> <a href="update-order?id={{$row -> id}}" title="Update order" target="_blank"><i
									class="icon-edit"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>



</div>
<!--/.content-->
</div>
<!--/.span9-->
</div>
</div>
<!--/.container-->
</div>
<!--/.wrapper-->
@endsection
