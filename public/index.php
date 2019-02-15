<!--START HEAD & HEADER.
------------------------------------------------------------>
	<!-- ALL PAGES -->
	<?php include "templates/head/head-part1.php"; ?>

	<!-- CUSTOM TITLE -->
	<title>Index</title>

	<!-- ALL PAGES -  -->
	<?php include "templates/head/head-part2.php"; ?>

	<!-- CUSTOM CSS - ABOUT & PROCUCTS -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
	<link rel="stylesheet" href="css/styleCustom.css" type="text/css" media="all"/>
	
	<!-- ALL PAGES -  -->
	<?php include "templates/head/head-part3.php"; ?>

<body>
<!--END HEAD & HEADER.
------------------------------------------------------------>


<!--START BODY.
------------------------------------------------------------>	
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						<p>Stretching outside your comfort zone starts here</p>

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
							<h1><a href="index.php">Are you a foodie?</a></h1>
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

				<div class="agileits_search">
					<form action="singleRecipe.php" method="post">
						<input name="Search" type="text" placeholder="Enter 1 ingredient" required="">
						<input type="submit" value="Search">
					</form>
				</div> 
			</div>
		</div>
	</div>


<!--END BODY.
------------------------------------------------------------>

<!--START FOOTER.
------------------------------------------------------------>
	<!-- ALL PAGES - scrolling shit -->
	<?php include("templates/footer/footer-part1.php"); ?>

	<!-- CUSTOM - ADDITIONAL shit for index & products -->
	<?php include("templates/footer/footer-part-custom1.php"); ?>

	<!-- CUSTOM - ADDITIONAL shit for products only -->
	<?php //include("templates/footer/footer-part-custom2.php"); ?>

	<!-- ALL PAGES - scrolling shit -->
	<?php include("templates/footer/footer-part2.php"); ?>

<!--END FOOTER.
------------------------------------------------------------>