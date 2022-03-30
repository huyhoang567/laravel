<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    @extends('Templates.mytemplate')
        @section('login')
        <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Đăng nhập bằng SĐT</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="sign-in-page inner-bottom-sm">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Đăng nhập - Nếu bạn chưa có tài khoản hãy đặt một đơn hàng. Tài khoản sẽ được luu tự động. </h4>
	<p class="">Đăng nhập đơn giản, chỉ với số điện thoại.</p>
	@if (session()->get('msg'))
		<div class="alert alert-danger">
			{{session()->get('msg')}}
		</div>
	@endif
	<form class="register-form outer-top-xs" method="post" action="submitlogin">
		@csrf
	<span style="color:red;" >

	</span>
		<div class="form-group">
		    <label class="info-title" for="contactno">Số điện thoại <span>*</span></label>
		    <input type="text" name="contactno" class="form-control unicase-form-control text-input" >
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="login">ĐI</button>
	</form>					
</div> <br><br>
<!-- Sign-in -->
<div style="height: 300px;"></div>
@endsection

