<!--START HEAD & HEADER.
------------------------------------------------------------>
	<!-- ALL PAGES -->
	<?php //include "templates/head-part1.php"; ?>

	<!-- CUSTOM TITLE -->
	<title>Staple Food a Restaurants Category Bootstrap Responsive website Template | Login :: w3layouts</title>

	<!-- ALL PAGES -  -->
	<?php //include "templates/head-part2.php"; ?>

	<!-- CUSTOM CSS - ABOUT & PROCUCTS -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> --> <!-- Owl-Carousel-CSS -->
	
	<!-- ALL PAGES -  -->
	<?php //include "templates/head-part3.php"; ?>

<body>
<!--END HEAD & HEADER.
------------------------------------------------------------>


<!--START BODY.
------------------------------------------------------------>
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						<p>Free home delivery at your doorstep For Above $30</p>
					</div>
					<div class="w3ls-header-right">
						<ul> 
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i> Call us: +01 222 33345 
							</li> 
							<li class="head-dpdn">
								<a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</li> 
							<li class="head-dpdn">
								<a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
							</li> 
							<li class="head-dpdn">
								<a href="offers.php"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
							</li> 
							<li class="head-dpdn">
								<a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.php">Staple<span>Best Food Collection</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Home</a></li>	
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Food type</h6>  
													<li><a href="menu.php">Breakfast</a></li> 
													<li><a href="menu.php">Lunch</a></li> 
													<li><a href="menu.php">Dinner</a></li> 
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Cuisine</h6> 
													<li><a href="menu.php">Indian Recipes</a></li> 
													<li><a href="menu.php">American Recipes</a></li> 
													<li><a href="menu.php">French Recipes</a></li> 
													<li><a href="menu.php">Italian Recipes</a></li> 
												</ul>
											</div>
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													<h6>Box type</h6> 
													<li><a href="menu.php">Diet</a></li> 
													<li><a href="menu.php">Mini</a></li> 
													<li><a href="menu.php">Regular</a></li> 
													<li><a href="menu.php">Special</a></li> 
												</ul>
											</div> 
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li><a href="about.php">About</a></li> 
								<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="icons.php">Web Icons</a></li>
										<li><a href="codes.php">Short Codes</a></li>     
									</ul>
								</li>  
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</div> 
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2> 
			</div>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Login</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- login-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-agileinfo"> 
				<form action="#" method="post"> 
					<input class="agile-ltext" type="text" name="Username" placeholder="Username" required="">
					<input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
					<div class="wthreelogin-text"> 
						<ul> 
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
									<span> Remember me ?</span> 
								</label> 
							</li>
							<li><a href="#">Forgot password?</a> </li>
						</ul>
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="signup.php"> Sign Up Now!</a></p> 
			</div>	 
		</div>
	</div>
	<!-- //login-page -->  



	<!-- ALL PAGES - subscription -->
	<?php include "templates/subscribe.php"; ?>

<!--END BODY.
------------------------------------------------------------>

<!--START FOOTER.
------------------------------------------------------------>
	<!-- ALL PAGES - scrolling shit -->
	<?php include("templates/footer/footer-part1.php"); ?>

	<!-- CUSTOM - ADDITIONAL shit for index & products -->
	<?php //include("templates/footer/footer-part-custom1.php"); ?>

	<!-- CUSTOM - ADDITIONAL shit for products only -->
	<?php //include("templates/footer/footer-part-custom2.php"); ?>

	<!-- ALL PAGES - scrolling shit -->
	<?php include("templates/footer/footer-part2.php"); ?>

<!--END FOOTER.
------------------------------------------------------------>