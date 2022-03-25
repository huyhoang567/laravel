<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa danh mục</title>
</head>
<body>
    @extends('admin.template.admintemplate')
        @section('edit-category')
        <div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Danh mục</h3>
							</div>
							<div class="module-body">
								{{-- xuất thông báo cập nhật thành công --}}
								@if($update == true)
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	
									</div>
								@endif
									<br />
								@if($update == false)
									@foreach($category as $row)
									<form action="edit-category?id={{$row -> id}}" class="form-horizontal row-fluid" name="Category" method="post" >
									@csrf
									<input type="text" name="creationdate" value="{{$row -> creationDate}}" style="display: none"/>
										<div class="control-group">
											<label class="control-label" for="basicinput">Tên danh mục</label>
											<div class="controls">
												<input type="text" placeholder="Nhập tên danh mục"  name="category" value="{{$row -> categoryName}}" class="span8 tip" required>
											</div>
										</div>


										<div class="control-group">
											<label class="control-label" for="basicinput">Mô tả</label>
											<div class="controls">
												<textarea class="span8" name="description" rows="5">{{$row -> categoryDescription}}</textarea>
											</div>
										</div>
									

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Cập nhật</button>
											</div>
										</div>
									</form>
									@endforeach
								@else
								<form action="edit-category" class="form-horizontal row-fluid" name="Category" method="post" >
									@csrf
										<div class="control-group">
											<label class="control-label" for="basicinput">Tên danh mục</label>
											<div class="controls">
												<input type="text" placeholder="Nhập tên danh mục"  name="category" value="" class="span8 tip" required>
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
												<button type="submit" name="submit" class="btn">Cập nhật</button>
											</div>
										</div>
									</form>
								@endif
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
