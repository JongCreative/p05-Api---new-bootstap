<!--START HEAD & HEADER.
------------------------------------------------------------>
	<!-- ALL PAGES -->
	<?php include "templates/head/head-part1.php"; ?>

	<!-- CUSTOM TITLE -->
	<title>Search result</title>

	<!-- ALL PAGES -  -->
	<?php include "templates/head/head-part2.php"; ?>

	<!-- CUSTOM CSS - ABOUT & PROCUCTS -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> --> <!-- Owl-Carousel-CSS -->
	<link rel="stylesheet" href="css/styleCustom.css" type="text/css" media="all"/>
	
	<!-- ALL PAGES -  -->
	<?php include "templates/head/head-part3.php"; ?>

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
							<h1><a href="index.php">Foodie</a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php" class="active">Home</a></li>	<!-- custom class for index.php -->
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
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
				<h2>Whats cookin' <br> <span>good lookin'</span></h2> 
			</div>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">seachresults</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- search output -->
	<div class="container-card1">
		<?php include('includes/searchFormHandler.php'); ?>
	</div>
	<!-- //search output -->
	
	<!-- ALL PAGES - subscription -->
	<?php //include "templates/subscribe.php";?>

	<!--END BODY.
	------------------------------------------------------------>
	
	<!--START FOOTER.
	------------------------------------------------------------>
		<!-- ALL PAGES - scrolling shit -->
		<?php include("templates/footer/footer-part1.php"); ?>
	
		<!-- CUSTOM - ADDITIONAL shit for index & products -->
		<?php //include("templates/footer/footer-part-custom1.php");?>
	
		<!-- CUSTOM - ADDITIONAL shit for products only -->
		<?php //include("templates/footer/footer-part-custom2.php");?>
	
		<!-- ALL PAGES - scrolling shit -->
		<?php include("templates/footer/footer-part2.php"); ?>
	
	<!--END FOOTER.
	------------------------------------------------------------>