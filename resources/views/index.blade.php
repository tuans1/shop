<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">

		<title>Final Project - Laptop Store Website - N4QPT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
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
									<span class="fa fa-search"></span>
								</button>
							</span>
							
						</div>
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">T??i kho???n</a></li>
							<li><a href="/cart">Gi??? h??ng</a></li>
							<li><a href="/checkout">Thanh to??n</a></li>					
							<li><a href="/register">????ng nh???p</a></li>		
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
							<li><a href="/products">H??ng s???n xu???t</a>					
								<ul>
									<li><a href="/products">Apple</a></li>									
									<li><a href="/products">Dell</a></li>
									<li><a href="/products">Asus</a></li>	
									<li><a href="/products">HP</a></li>									
									<li><a href="/products">Acer</a></li>
									<li><a href="/products">Lenovo</a></li>									
								</ul>
							</li>															
	
							<li><a href="/products">Lo???i s???n ph???m</a>
								<ul>									
									<li><a href="/products">Ch??i game</a></li>
									<li><a href="/products">H???c t???p-v??n ph??ng</a></li>
									<li><a href="/products">????? h???a-k??? thu???t</a></li>
									<li><a href="/products">Cao c???p sang tr???ng</a></li>
								</ul>
							</li>			
							<!-- <li><a href="/products">Man</a></li>						
							<li><a href="/products">Hangbag</a></li> -->
							<li><a href="/products">B??n ch???y nh???t</a></li>
							<li><a href="/products">S???n ph???m m???i</a></li>
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
							<p><span>Gi???m th??m ?????n 1.000.000??</span></p>
							<p><span>??p d???ng k??m theo khuy???n m??i tr??? th???ng kh??c</span></p> -->
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
				Website ch??ng t??i chuy??n cung c???p c??c s???n ph???m ch???t l?????ng c?? uy t??n v?? m???i nh???t tr??n th??? tr?????ng hi???n nay
				<br/>H??y gh?? th??m trang web c???a ch??ng t??i v?? ?????ng b??? l??? c??c s???n ph???m m???i nh??!
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="/product_detail"><strong>C??c s???n ph???m g???n ????y nh???t</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="/product_detail"><img src="themes/images/cloth/anh1.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Asus K45A-VX229 (K45A-3CVX)</a><br/>
														<a href="/products" class="category"><p class="price">11.000.000??</p></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh2.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Dell Vostro 2420 (V522412)</a><br/>
														<a href="/products" class="category"><p class="price">12.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh3.png" alt="" /></a></p>
														<a href="/product_detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="/products" class="category"><p class="price">15.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh4.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
														<a href="/products" class="category"><p class="price">16.500.000??</p></a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh16.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">18.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh11.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh17.png" alt="" /></a></p>
														<a href="/product_detail" class="title">You think water</a><br/>
														<a href="/products" class="category">World once</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh14.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Quis nostrud exerci</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>																																	
											</ul>
										</div>

										<!-- -->
											<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh18.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">28.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh9.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">19.500.000??</p>
													</div>
												</li>
																																	
											</ul>
										</div>
										<!-- -->

									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="/product_detail"><strong>C??c s???n ph???m b??n ch???y nh???t</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-3" data-slide="prev"></a><a class="right button" href="#myCarousel-3" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-3" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="/product_detail"><img src="themes/images/cloth/anh5.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Asus K45A-VX229 (K45A-3CVX)</a><br/>
														<a href="/products" class="category"><p class="price">11.000.000??</p></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh6.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Dell Vostro 2420 (V522412)</a><br/>
														<a href="/products" class="category"><p class="price">12.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh7.png" alt="" /></a></p>
														<a href="/product_detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="/products" class="category"><p class="price">15.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh8.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
														<a href="/products" class="category"><p class="price">16.500.000??</p></a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh10.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">18.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh9.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh11.png" alt="" /></a></p>
														<a href="/product_detail" class="title">You think water</a><br/>
														<a href="/products" class="category">World once</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh12.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Quis nostrud exerci</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>																																	
											</ul>
										</div>

										<!-- -->
											<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh13.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">28.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh14.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">19.500.000??</p>
													</div>
												</li>
																																	
											</ul>
										</div>
										<!-- -->

									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="/product_detail"><strong>C??c s???n ph???m ???????c xem nhi???u nh???t</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-4" data-slide="prev"></a><a class="right button" href="#myCarousel-4" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-4" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="/product_detail"><img src="themes/images/cloth/anh15.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Asus K45A-VX229 (K45A-3CVX)</a><br/>
														<a href="/products" class="category"><p class="price">11.000.000??</p></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh11.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Dell Vostro 2420 (V522412)</a><br/>
														<a href="/products" class="category"><p class="price">12.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh12.png" alt="" /></a></p>
														<a href="/product_detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="/products" class="category"><p class="price">15.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh13.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
														<a href="/products" class="category"><p class="price">16.500.000??</p></a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh6.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">18.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh9.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh7.png" alt="" /></a></p>
														<a href="/product_detail" class="title">You think water</a><br/>
														<a href="/products" class="category">World once</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh11.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Quis nostrud exerci</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>																																	
											</ul>
										</div>

										<!-- -->
											<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh10.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">28.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh13.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">19.500.000??</p>
													</div>
												</li>
																																	
											</ul>
										</div>
										<!-- -->

									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="/product_detail"><strong>C??c s???n ph???m kh??c</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-5" data-slide="prev"></a><a class="right button" href="#myCarousel-5" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-5" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="/product_detail"><img src="themes/images/cloth/anh24.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Asus K45A-VX229 (K45A-3CVX)</a><br/>
														<a href="/products" class="category"><p class="price">11.000.000??</p></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh23.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Dell Vostro 2420 (V522412)</a><br/>
														<a href="/products" class="category"><p class="price">12.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh22.png" alt="" /></a></p>
														<a href="/product_detail" class="title">HP Stream 14-ax000na 14-inch HD</a><br/>
														<a href="/products" class="category"><p class="price">15.679.000??</p></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh21.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Acer Chromebook R11 CB5-132T 11.6-Inch</a><br/>
														<a href="/products" class="category"><p class="price">16.500.000??</p></a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh20.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">18.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh13.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh14.png" alt="" /></a></p>
														<a href="/product_detail" class="title">You think water</a><br/>
														<a href="/products" class="category">World once</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/anh19.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Quis nostrud exerci</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">16.500.000??</p>
													</div>
												</li>																																	
											</ul>
										</div>

										<!-- -->
											<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/laptop4.png" alt="" /></a></p>
														<a href="/product_detail" class="title">Know exactly</a><br/>
														<a href="/products" class="category">Quis nostrud</a>
														<p class="price">28.500.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="/product_detail"><img src="themes/images/cloth/laptop2.jpg" alt="" /></a></p>
														<a href="/product_detail" class="title">Ut wisi enim ad</a><br/>
														<a href="/products" class="category">Commodo consequat</a>
														<p class="price">19.500.000??</p>
													</div>
												</li>
																																	
											</ul>
										</div>
										<!-- -->

									</div>							
								</div>
							</div>						
						</div>
					</div>		

				</div>	
			</section>
			<div class="row feature_box">						
				<div class="span4">
					<div class="service">
						<div class="responsive">	
							<img src="themes/images/feature_img_2.png" alt="" />
							<h4>THI???T K??? <strong>HI???N ?????I</strong></h4>
							<p>C??c s???n ph???m ???????c thi???t k??? theo m???u m?? hi???n ?????i, th???i th?????ng ph?? h???p v???i xu h?????ng ng?????i d??ng hi???n nay.</p>
						</div>
					</div>
				</div>
				<div class="span4">	
					<div class="service">
						<div class="customize">			
							<img src="themes/images/feature_img_1.png" alt="" />
							<h4>GIAO H??NG <strong>MI???N PH??</strong></h4>
							<p>S???n ph???m ???????c giao h??ng nhanh, g???n b???ng nhi???u h??nh th???c nh???m ????p ???ng t???t y??u c???u c???a kh??ch h??ng.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="support">	
							<img src="themes/images/feature_img_3.png" alt="" />
							<h4>PH???C V??? <strong>24/7</strong></h4>
							<p>Kh??ch h??ng lu??n l?? ??u ti??n h??ng ?????u v?? ???????c ph???c v??? 24/7.</p>
						</div>
					</div>
				</div>
			</div>
			
		
    </body>
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
		</script>
    </body>
</html>
</html>