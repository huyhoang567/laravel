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
                    {{-- xuất thông báo cập nhật thành công --}}
                    @if ($update == true)
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Thành công!</strong>
                        </div>
                    @endif
                    <br />
                    @if ($update == false)
					@foreach($subcategory as $row)
                        <form action="edit-subcategory?id={{$row -> id}}" class="form-horizontal row-fluid" name="category" method="post">
							@csrf
							<input type="text" name="creationdate" value="{{$row -> creationDate}}" style="display: none">
					@endforeach
                            <div class="control-group">
                                <label class="control-label" for="basicinput">Danh mục</label>
                                <div class="controls">
                                    <select name="category" class="span8 tip">
										@foreach ($category as $row)
										<option value="{{$row -> id}}">{{$row -> categoryName}}</option>
										@endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="basicinput">Tên danh mục con</label>
                                <div class="controls">
									@foreach($subcategory as $row)
                                    <input type="text" placeholder="Nhập tên danh mục con" name="subcategory" value="{{$row -> subcategory}}"
                                        class="span8 tip" >
									@endforeach
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" name="submit" class="btn">Cập nhật</button>
                                </div>
                            </div>
                        </form>
					@else
						<form action="edit-subcategory" class="form-horizontal row-fluid" name="Category" method="post">


							<div class="control-group">
								<label class="control-label" for="basicinput">Category</label>
								<div class="controls">
									<select name="category" class="span8 tip" disabled>
										<option value=""></option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="basicinput">SubCategory Name</label>
								<div class="controls">
									<input type="text" placeholder="Enter category Name" name="subcategory" value=""
										class="span8 tip" disabled>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" name="submit" class="btn" disabled>Update</button>
								</div>
							</div>
						</form>
					@endif
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
</body>

</html>
