@extends('admin.template.admintemplate')
@section('today-orders')
<div class="content">

	<div class="module">
		<div class="module-head">
			<h3>Đơn hàng hôm nay - Đang chờ ({{count($orders)}})</h3>
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
						<th>Sản phẩm/ Số lượng/ Đơn giá</th>
						<th>Tổng cộng + Phí (VND)</th>
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
										<td>
											{{ $p->productName }}
										</td>
										<td>{{ $p->quantity }}</td>
										<td>{{ number_format($p->productPrice) }}</td>
									</tr>
								@endforeach
							</table>
						</td>
						<td>
							{{number_format(array_reduce($row->products, function($a, $b) {
								return $a + $b->quantity*($b->shippingCharge + $b->productPrice);
							}))}}
						</td>
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
