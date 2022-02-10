<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
	<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<!-- global styles -->
	<link href="themes/css/flexslider.css" rel="stylesheet"/>
	<link href="themes/css/main.css" rel="stylesheet"/>

	<!-- scripts -->
	<script src="themes/js/jquery-1.7.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>				
	<script src="themes/js/superfish.js"></script>	
	<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<div class="input-group">
							<input type="text" class="search-query form-control input-group" Placeholder="My laptop.">
							<span class="input-group-btn">
								<button class="btn btn-primary rounded-circle btnpro" type="button" id="btn-search">
									<span class="fas fa-search"></span>
								</button>
							</span>
							
						</div>
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="cart">Giỏ hàng</a></li>
							<li><a href="checkout">Thanh toán</a></li>					
							<li><a href="customer">DPH</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index" class="logo pull-left"><h4 class="title">ILAPTOP </h4></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="/products">Hãng sản xuất</a>					
								<ul>
									<li><a href="/products">Apple</a></li>									
									<li><a href="/products">Dell</a></li>
									<li><a href="/products">Asus</a></li>	
									<li><a href="/products">HP</a></li>									
									<li><a href="/products">Acer</a></li>
									<li><a href="/products">Lenovo</a></li>									
								</ul>
							</li>															
							
							<li><a href="/products">Loại sản phẩm</a>
								<ul>									
									<li><a href="/products">Chơi game</a></li>
									<li><a href="/products">Học tập-văn phòng</a></li>
									<li><a href="/products">Đồ họa-kỹ thuật</a></li>
									<li><a href="/products">Cao cấp sang trọng</a></li>
								</ul>
							</li>			
							<!-- <li><a href="/products">Man</a></li>						
								<li><a href="/products">Hangbag</a></li> -->
								<li><a href="/products">Bán chạy nhất</a></li>
								<li><a href="/products">Sản phẩm mới</a></li>
							</ul>
						</nav>
					</div>
				</section>
				<section  class="homepage-slider" id="home-slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="themes/images/carousel/slider_1.jpg" alt="anh bia 1" />
								<div class="intro">
							<!--<h1>Laptop mua online</h1>
							<p><span>Giảm thêm đến 1.000.000đ</span></p>
							<p><span>Áp dụng kèm theo khuyến mãi trả thẳng khác</span></p> -->
						</div>
					</li>
					<li>
						<img src="themes/images/carousel/slider_4.png" alt="anh bia 2" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider_5.png" alt="anh bia 3" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider_6.png" alt="anh bia 4" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider_7.png" alt="anh bia 5" />
						
					</li>
				</ul>
			</div>			
		</section>
		<section class="header_text">
			Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay
			<br/>Hãy ghé thăm trang web của chúng tôi và đừng bỏ lỡ các sản phẩm mới nhé!

		</section>			
		<br/>
		<br/>
	</section>			
	<section class="main-content">		
		<div class="row">
			<div class="span5">					
				<h4 class="title"><span class="text"><strong>Thông tin</strong> cá nhân</span></h4>
				<form action="customer" method="post">
					<input type="hidden" name="next" value="/">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Họ tên</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" id="name" value="Đinh Hữu Phước">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Địa chỉ</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" id="address" value="TP Hồ Chí Minh" >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Số điện thoại</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" id="numberphone" value="01234567489">
							</div>
						</div>
						<div class="control-group">
							<input tabindex="3" class="btn btn-primary large" type="submit" id="submit" onclick="" value="Thay đổi thông tin">
							<hr>
						</div>
					</fieldset>
				</form>				
			</div>
			<div class="span7">					
				<h4 class="title"><span class="text"><strong>Lịch sử</strong> mua hàng</span></h4>
				<form action="newcustomer" method="post" class="form-stacked">
					<fieldset>
						<div class="control-group">
							<label class="control-label"><strong>Các sản phẩm đã mua</strong> </label>
						</div>
						<li class="span3">
							<div class="product-box">												
								<a href="product_detail"><img alt="" src="themes/images/cloth/laptop1.png"></a><br/>
								<a href="product_detail" class="title">ASUS VivoBook Swift SF315</a><br/>
								<a href="#" class="category">i5 8250U/4GB/1TB/Win10</a>
								<p class="price">16.990.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">
								<span class="sale_tag"></span>												
								<a href="product_detail"><img alt="" src="themes/images/cloth/laptop2.jpg"></a><br/>
								<a href="product_detail" class="title">ASUS Vivobook Max X441UA</a><br/>
								<a href="#" class="category">intel Core i3, RAM 4GB DDR4</a>
								<p class="price">9.790.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">												
								<span class="sale_tag"></span>
								<a href="product_detail"><img alt="" src="themes/images/cloth/anh4.png"></a><br/>
								<a href="product_detail" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
								<a href="#" class="category">i5 8250U/4GB/1TB/Win10</a>
								<p class="price">16.500.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">												
								<a href="product_detail"><img alt="" src="themes/images/cloth/anh8.png"></a><br/>
								<a href="product_detail" class="title">ROG ZENPHYRUS(GX501)</a><br/>
								<a href="#" class="category">Intel Core i7-7700HQ/24GB RAM/1TB SSD PCie</a>
								<p class="price">16.500.000 đ</p>
							</div>
						</li>
					</fieldset>
					
				</form>					
			</div>				
		</div>
	</section>			
	<section style="background-color: #857474;" id="footer-bar">
		<div class="row">
			<div class="span3">
				<h4>Điều Hướng</h4>
				<ul class="nav">
					<li><a href="/index">Trang chủ</a></li>  
					<li><a href="/about">Thông tin</a></li>
					<li><a href="/contact">Liên hệ</a></li>
					<li><a href="/cart">Giỏ hàng</a></li>
					<li><a href="/register">Đăng nhập</a></li>							
				</ul>					
			</div>
			<div class="span4">
				<h4>My Account</h4>
				<ul class="nav">
					<li><a href="customer">Tài khoản của tôi</a></li>
					<li><a href="#">Lịch sử đặt hàng</a></li>
					<li><a href="#">Danh sách yêu thích</a></li>
					<!-- <li><a href="#">Làm mới</a></li> -->
				</ul>
			</div>
			<div class="span5">
				<p class="logo"><!-- <img src="themes/images/logo.png" class="site_logo" alt=""> --><h4>ILAPTOP</h4></p>
				<p style="color: white;">Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay
					<br/>Hãy ghé thăm trang web của chúng tôi và đừng bỏ lỡ các sản phẩm mới nhé!</p>
					<div style="margin-left: 60px;">
						<a href="#" class="button">
							<i class="fab fa-facebook-f fa-lg"></i>
						</a>
						<a href="#" class="button">
							<i class="fab fa-twitter fa-lg"></i>
						</a>
						<a href="#" class="button">
							<i class="fab fa-instagram fa-lg"></i>
						</a>
					</div>
					
				</div>					
			</div>	
		</section>

		<section id="copyright">
			<span>Copyright 2013 bootstrappage template  All right reserved.</span>
		</section>
	</div>
	<script src="themes/js/common.js"></script>
	<script src="themes/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
		$(function() {
			$(document).ready(function() {
				$('.flexslider').flexslider({
					animation: "fade",
					slideshowSpeed: 4000,
					animationSpeed: 600,
					controlNav: false,
					directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
			});
		});
		$(document).ready(function() {
			$('#checkout').click(function (e) {
				document.location.href = "checkout";
			})
		});
		
	</script>
</body>
</html>	