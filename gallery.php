<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/contact.html  30 Nov 2019 03:46:40 GMT -->

<head>
	<meta charset="utf-8">
	<title>Chanaka Electronics | Gallery</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">
		<!-- Preloader -->
		<div class="preloader"></div>
		<header class="main-header header-style-one">
			<!--Header Top-->
			<header class="main-header header-style-one">
				<!--Header Top-->
				<div class="header-top">
					<div class="auto-container clearfix">
						<div class="top-left clearfix">
							<div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now :
								<a href="tel:+94778200344" class="number">0778200344</a>
							</div>

						</div>
						<div class="top-right clearfix">
							<!-- Info List -->
							<ul class="info-list">
								<li><a href="index.php">Back to Home</a></li>
								<li class="quote"><a href="mailto:chanakaelectro@gmail.com">Mail Us now</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Header Top -->
			</header>
			<!-- End Main Header -->

		</header>
		<!-- End Main Header -->

		<section class="page-title" style="background-image:url(images/background/3.jpg)">
			<div class="auto-container">
				<h2>Gallery</h2>
				<ul class="page-breadcrumb">
					<li><a href="index.php">home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
		</section>

		<!-- Portfolio Page Section -->
		<section class="portfolio-page-section">
			<div class="auto-container">
				<!--MixitUp Galery-->
				<div class="mixitup-gallery">

					<!--Filter-->
					<div class="filters clearfix">

						<ul class="filter-tabs filter-btns text-center clearfix">
							<li class="active filter" data-role="button" data-filter="all">All</li>
							<li class="filter" data-role="button" data-filter=".amp">Amplifiers</li>
							<li class="filter" data-role="button" data-filter=".audio">Audio Systems</li>
							<li class="filter" data-role="button" data-filter=".yt">Youtube Tutorials</li>
							<li class="filter" data-role="button" data-filter=".led">LED Panels</li>
						</ul>

					</div>

					<div class="filter-list row clearfix">
						<?php
						require "connection.php";

						$product_img_rs = Database::search("SELECT * FROM `other`");
						$product_img_num = $product_img_rs->num_rows;

						for ($x = 0; $x < $product_img_num; $x++) {

							$product_img_data = $product_img_rs->fetch_assoc();
							?>
							<!-- Gallery Item -->
							<div class="gallery-item mix all col-lg-4 col-md-6 col-sm-12">


								<div class="inner-box">
									<figure class="image-box">
										<img src="<?php echo $product_img_data["code"]; ?>" alt="">
										<!--Overlay Box-->
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="content">
													<h3><a>Our other works</a></h3>
													<a href="<?php echo $product_img_data["code"]; ?>"
														data-fancybox="gallery-4" data-caption="" class="link"><span
															class="icon flaticon-magnifying-glass-1"></span></a>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<?php
						}
						?>

						<?php

						$product_img_rs = Database::search("SELECT * FROM `amp_photo`");
						$product_img_num = $product_img_rs->num_rows;

						for ($x = 0; $x < $product_img_num; $x++) {

							$product_img_data = $product_img_rs->fetch_assoc();
							?>
							<!-- Gallery Item -->
							<div class="gallery-item mix amp col-lg-4 col-md-6 col-sm-12">


								<div class="inner-box">
									<figure class="image-box">
										<img src="<?php echo $product_img_data["code"]; ?>" alt="">
										<!--Overlay Box-->
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="content">
													<h3><a>Unique Amplifier Designs</a></h3>
													<a href="<?php echo $product_img_data["code"]; ?>"
														data-fancybox="gallery-4" data-caption="" class="link"><span
															class="icon flaticon-magnifying-glass-1"></span></a>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<?php
						}
						?>

						<?php

						$product_img_rs = Database::search("SELECT * FROM `audio`");
						$product_img_num = $product_img_rs->num_rows;

						for ($x = 0; $x < $product_img_num; $x++) {

							$product_img_data = $product_img_rs->fetch_assoc();
							?>
							<!-- Gallery Item -->
							<div class="gallery-item mix audio col-lg-4 col-md-6 col-sm-12">


								<div class="inner-box">
									<figure class="image-box">
										<img src="<?php echo $product_img_data["code"]; ?>" alt="">
										<!--Overlay Box-->
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="content">
													<h3><a>Our Audio System Designs</a></h3>
													<a href="<?php echo $product_img_data["code"]; ?>"
														data-fancybox="gallery-4" data-caption="" class="link"><span
															class="icon flaticon-magnifying-glass-1"></span></a>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<?php
						}
						?>

						<?php

						$product_img_rs = Database::search("SELECT * FROM `led`");
						$product_img_num = $product_img_rs->num_rows;

						for ($x = 0; $x < $product_img_num; $x++) {

							$product_img_data = $product_img_rs->fetch_assoc();
							?>
							<!-- Gallery Item -->
							<div class="gallery-item mix led col-lg-4 col-md-6 col-sm-12">


								<div class="inner-box">
									<figure class="image-box">
										<img src="<?php echo $product_img_data["code"]; ?>" alt="">
										<!--Overlay Box-->
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="content">
													<h3><a>Our LED Panel Designs</a></h3>
													<a href="<?php echo $product_img_data["code"]; ?>"
														data-fancybox="gallery-4" data-caption="" class="link"><span
															class="icon flaticon-magnifying-glass-1"></span></a>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<?php
						}
						?>

						<?php

						$product_img_rs = Database::search("SELECT * FROM `yt`");
						$product_img_num = $product_img_rs->num_rows;

						for ($x = 0; $x < $product_img_num; $x++) {

							$product_img_data = $product_img_rs->fetch_assoc();
							?>
							<!-- Gallery Item -->
							<div class="gallery-item mix yt col-lg-4 col-md-6 col-sm-12">


								<div class="inner-box">
									<figure class="image-box">
										<img src="<?php echo $product_img_data["code"]; ?>" alt="">
										<!--Overlay Box-->
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="content">
													<h3><a href="<?php echo $product_img_data["link"]; ?>">
															<?php echo $product_img_data["link"]; ?>
														</a></h3>
													<a href="<?php echo $product_img_data["code"]; ?>"
														data-fancybox="gallery-4" data-caption="" class="link"><span
															class="icon flaticon-magnifying-glass-1"></span></a>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<?php
						}
						?>

					</div>

				</div>
			</div>
		</section>
		<!-- End Story Section -->

		<!-- Call To Action Section -->
		<section class="call-to-action-section" style="background-image: url(images/background/3.jpg)">
			<div class="auto-container">
				<h2>Discover The Future with Us</h2>
				<div class="text">
					Chanaka Electronics<br>
					No. 50, Independent Trade Center. <br>
					Bandarawela. <br>
					Sri Lanka.
				</div>
				<a href="contact.php" class="theme-btn btn-style-two"><span class="txt font-weight-bold">contact
						us</span></a>
			</div>
		</section>
		<!-- End Call To Action Section-->

		<script src="js/jquery.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.js"></script>
		<script src="js/owl.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/mixitup.js"></script>
		<script src="js/appear.js"></script>
		<script src="js/scrollbar.js"></script>
		<script src="js/script.js"></script>
</body>

<!-- stella-orre/projects-classic.html  30 Nov 2019 03:51:15 GMT -->

</html>