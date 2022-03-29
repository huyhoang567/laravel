<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo danh mục</title>
</head>
<body>
    @extends('admin.template.admintemplate')
        @section('category')
        <div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Danh mục</h3>
							</div>
							<div class="module-body">
								{{-- xuất thông báo thêm thành công --}}
								@if($create == true)
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Thành công!</strong>	
									</div>
								@endif
								{{-- xuất thông báo đã xóa --}}
								@if($delete == true)
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Đã xóa!</strong>
									</div>
								@endif
								{{-- xuất lỗi validate --}}
								@if(count($errors) > 0)
								<div class="alert alert-error">
									<button type="button" class="close" data-dismiss="alert">×</button>
									@foreach($errors -> all() as $error)
										<strong>{{$error}}</strong><br>
									@endforeach
										</div>
								@endif
									<br />

		<form class="form-horizontal row-fluid" action="postcategory" name="Category" method="post" >
			@csrf
			<div class="control-group">
				<label class="control-label" for="basicinput">Tên danh mục</label>
				<div class="controls">
					<input type="text" placeholder="Nhập tên danh mục"  name="category" class="span8 tip">
				</div>
			</div>


			<div class="control-group">
				<label class="control-label" for="basicinput">Mô tả</label>
				<div class="controls">
					<textarea class="span8" name="description" rows="5"></textarea>
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" name="submit" class="btn">Tạo</button>
				</div>
			</div>
		</form>
	</div>
</div>


	<div class="module">
							<div class="module-head">
								<h3>Quản lý danh mục</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Danh mục</th>
											<th>Mô tả</th>
											<th>Ngày tạo</th>
											<th>Lần cuối cập nhật</th>
											<th>Hành động</th>
										</tr>
									</thead>
									<tbody>
								<?php $tt = 1;?>		
								@foreach($category as $row)
										<tr>
											<td><?php echo $tt++;?></td>
											<td>{{$row -> categoryName}}</td>
											<td>{{$row -> categoryDescription}}</td>
											<td>{{$row -> creationDate}}</td>
											<td>{{$row -> updationDate}}</td>
											<td>
											<a href="edit-category?id={{$row -> id}}" ><i class="icon-edit"></i></a>
											@method('get')
											@csrf
											<a href="del-category?id={{$row -> id}}" onClick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class="icon-remove-sign"></i></a></td>
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
