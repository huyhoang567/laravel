<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Pending Orders</title>
	<link type="text/css" href="resources/views/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="resources/views/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="resources/views/admin/css/theme.css" rel="stylesheet">
	<link type="text/css" href="resources/views/admin/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="admin">
			  		Shopping Portal | Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="http://localhost/shopping/">
						Back to Portal
						
						</a></li>

						

						
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form action="postLogin" class="form-vertical" method="post">
						@csrf
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<span style="color:red;" ></span>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" name="username" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
						<input class="span12" type="password" id="inputPassword" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="submit">Login</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2017 Shopping Portal </b> All rights reserved.
		</div>
	</div>
	<script src="resources/views/admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="resources/views/admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="resources/views/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>