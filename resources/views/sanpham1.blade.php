<!DOCTYPE HTML>
<html>

<head>
	<title>dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="laptop" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css" />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	<!-- <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

	<!-- tables -->
	<link rel="stylesheet" type="text/css" href="css/table-style.css" />
	<link rel="stylesheet" type="text/css" href="css/basictable.css" />
	<script type="text/javascript" src="js/jquery.basictable.min.js"></script>

</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<div class="header-main">



					<div class="profile_details w3l">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">
										<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span>
										<div class="user-name">
											<p>Thông tin</p>
											<span>Admin</span>
										</div>
										<i class="fa fa-angle-down"></i>
										<i class="fa fa-angle-up"></i>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Cài đặt</a> </li>
									<li> <a href="#"><i class="fa fa-user"></i> Thông tin</a> </li>
									<li> <a href="#"><i class="fa fa-sign-out"></i> Đăng xuất</a> </li>
								</ul>
							</li>
						</ul>
					</div>

					<div class="clearfix"> </div>
				</div>
				<!--heder end here-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index1">Trang chủ</a><i class="fa fa-angle-right"></i>Loại sản
						phẩm</li>
				</ol>

				<!-- grids -->
				<div class="grids">



					<div class="agile-calendar-grid">
						<div class="page">

							<div class="w3l-calendar-left">
								<div class="calendar-heading">
									<div class="agile-tables">
										<div class="w3l-table-info">
											<h2>Thêm loại sản phẩm</h2>
											<div class="row">
												<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

												</div>
												<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
													@if (\Session::has('success'))
													<div class="alert alert-success">
														<ul>
															<li>{!! \Session::get('success') !!}</li>
														</ul>
													</div>
													@endif
													<form action="/sanpham1/create" method="POST">
														@csrf
														<div class="form-group">
															<label for="ten">Tên loại sản phẩm:</label>
															<input type="text" class="form-control" name="category_name" id="ten">
														</div>
														<button type="submit" class="btn btn-default">Thêm loại sản
															phẩm</button>
													</form>
												</div>
												<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

												</div>
											</div>
											<h2>Cập nhật loại sản phẩm</h2>
											<table id="table">
												<thead>
													<tr>
														<th>STT</th>
														<th>Tên loại sản phẩm</th>
														<th>Chỉnh sửa</th>
													</tr>
												</thead>
												<tbody>
													@foreach($category as $item)
													<tr class="info" id="{{$item->id}}" data-item='<?php echo $item; ?>'>
														<td>{{ $loop->index+1 }}</td>
														<td>{{$item->category_name}}</td>
														<td style="text-align: center;">
															<span>
																<a class="agile-icon" id="edit" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></a>
															</span>
															<span>
																<a class="agile-icon" href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-times-circle"></i></a>
															</span>

														</td>
													</tr>
													@endforeach

												</tbody>
											</table>
										</div>
										<!-- Modal -->
										<div class="modal fade" id="myModal" role="dialog">
											<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Cập nhật thông tin loại sản phẩm</h4>
													</div>
													<div class="modal-body">
														<form action="/sanpham1/update" method="post">
															@csrf
															<div class="form-group">
																<label for="ten">Tên loại sản phẩm:</label>
																<input type="text" name="id" class="form-control" style="visibility: hidden;position:absolute ; left:-1000px" id="editId">
																<input type="text" name="category_name" class="form-control" id="editName">
															</div>
															<button type="submit" class="btn btn-default">Cập nhật loại</button>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div>
										<!-- end mymodal -->
										<!-- sanpham -->
										<!-- Modal -->
										<div class="modal fade" id="myModal1" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Bạn có chắc chắn muốn xóa hay không?
														</h4>
													</div>
													<div class="modal-body">

														<form action="">
															<button type="submit" class="btn btn-default" style="margin-left: 43%;">Xóa
															</button>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div>
										<!-- end modal sanpham -->
									</div>
								</div>
							</div>

							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //grids -->
				<!--photoday-section-->


				<div class="col-sm-4 wthree-crd">
					<div class="card">
						<div class="card-body">

						</div>
					</div>
				</div>

				<div class="clearfix"></div>

				<!--//photoday-section-->
				<!-- script-for sticky-nav -->
				<script>
					$(document).on('click', '#edit', function() {
						const value = $(this).closest('tr').data('item');
						$('#editId').val(value.id);
						$('#editName').val(value.category_name);
					})
					$(document).ready(function() {
						var navoffeset = $(".header-main").offset().top;
						$(window).scroll(function() {
							var scrollpos = $(window).scrollTop();
							if (scrollpos >= navoffeset) {
								$(".header-main").addClass("fixed");
							} else {
								$(".header-main").removeClass("fixed");
							}
						});

					});
				</script>
				<!-- /script-for sticky-nav -->
				<!--inner block start here-->
				<div class="inner-block">

				</div>
				<!--inner block end here-->
				<!--copy rights start here-->
				
				<!--COPY rights end here-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo1">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
			</header>
			<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
			<div class="menu">
				<ul id="menu">
					<li><a href="index1"><i class="fa fa-tachometer"></i> <span>Trang chủ</span>
							<div class="clearfix"></div>
						</a></li>


					<li id="menu-academico"><a href="donhang"><i class="fa fa-envelope nav_icon"></i><span>Đơn
								hàng</span>
							<div class="clearfix"></div>
						</a></li>
					<!-- <li><a href="gallery"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li> -->

					<li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Sản
								phẩm</span> <span class="fa fa-angle-right" style="float: right"></span>
							<div class="clearfix"></div>
						</a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-avaliacoes"><a href="sanpham">Quản lý sản phẩm</a></li>
							<li id="menu-academico-avaliacoes"><a href="sanpham1">Loại sản phẩm</a></li>
							<li id="menu-academico-avaliacoes"><a href="sanpham2">Nhà sản xuất</a></li>
						</ul>
					</li>


					<li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Khác</span> <span class="fa fa-angle-right" style="float: right"></span>
							<div class="clearfix"></div>
						</a>
						<ul id="menu-academico-sub">
							<li id="menu-academico-boletim"><a href="calendar">Lịch</a></li>
							<!-- <li id="menu-academico-avaliacoes" ><a href="signin">Đăng nhập</a></li>
           <li id="menu-academico-avaliacoes" ><a href="signup">Đăng ký</a></li> -->


						</ul>
					</li>

				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- /Bootstrap Core JavaScript -->
	<!-- morris JavaScript -->
	<script src="js/raphael-min.js"></script>

</body>

</html>