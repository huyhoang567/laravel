<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Pending Orders</title>
	<link type="text/css" href="../resources/views/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="../resources/views/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="../resources/views/admin/css/theme.css" rel="stylesheet">
	<link type="text/css" href="../resources/views/admin/images/icons/css/font-awesome.css" rel="stylesheet">
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
						<li><a href="#">
							Admin
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../resources/views/admin/images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="admin/change-password">Change Password</a></li>
								<li class="divider"></li>
								<li><a href="admin/logout">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->


	<div class="wrapper">
		<div class="container">
			<div class="row">
            <div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Order Management
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="/admin/today-orders">
											<i class="icon-tasks"></i>
											Today's Orders
 
											<b class="label orange pull-right"></b>
											
										</a>
									</li>
									<li>
										<a href="/admin/pending-orders">
											<i class="icon-tasks"></i>
											Pending Orders
<b class="label orange pull-right"></b>

										</a>
									</li>
									<li>
										<a href="/admin/delivered-orders">
											<i class="icon-inbox"></i>
											Delivered Orders
<b class="label green pull-right"></b>


										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="/admin/manage-users">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
                                <li><a href="/admin/category"><i class="menu-icon icon-tasks"></i> Create Category </a></li>
                                <li><a href="/admin/subcategory"><i class="menu-icon icon-tasks"></i>Sub Category </a></li>
                                <li><a href="/admin/insert-products"><i class="menu-icon icon-paste"></i>Insert Product </a></li>
                                <li><a href="/admin/manage-products"><i class="menu-icon icon-table"></i>Manage Products </a></li>
                        
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li><a href="/admin/user-logs"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
							
							<li>
								<a href="/admin/logout">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
			
			<div class="span9">
            <!-- nội dung thay đổi -->
                <div>
                    @yield('category')
                </div>
                <div>
                    @yield('change-password')
                </div>
                <div>
                    @yield('delivered-orders')
                </div>
                <div>
                    @yield('edit-category')
                </div>
                <div>
                    @yield('edit-products')
                </div>
                <div>
                    @yield('edit-subcategory')
                </div>
                <div>
                    @yield('insert-products')
                </div>
                <div>
                    @yield('manage-products')
                </div>
                <div>
                    @yield('manage-users')
                </div>
                <div>
                    @yield('pending-orders')
                </div>
                <div>
                    @yield('subcategory')
                </div>
                <div>
                    @yield('today-orders')
                </div>
                <div>
                    @yield('update-image1')
                </div>
                <div>
                    @yield('update-image2')
                </div>
                <div>
                    @yield('update-image3')
                </div>
                <div>
                    @yield('user-logs')
                </div>




            <div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2017 Shopping Portal </b> All rights reserved.
		</div>
	</div>

	<script src="../resources/views/admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="../resources/views/admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="../resources/views/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../resources/views/admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="../resources/views/admin/scripts/datatables/jquery.dataTables.js"></script>
	<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>