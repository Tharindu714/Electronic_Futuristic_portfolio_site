<?php
session_start();
require "connection.php";

if (isset($_SESSION["Aduser"])) {

?>
<!DOCTYPE html>
<html lang="en">
<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Admin | Add to Gallery</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="bg-dark">

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
		<header class="main-header header-style-one">
			<!--Header Top-->
			<div class="header-top">
				<div class="auto-container clearfix">
					<div class="top-left clearfix">
						<div class="text">
							<span class="icon flaticon-call-answer"></span> Need help? Call
							Us Now :
							<a href="tel:+94778200344" class="number">0778200344</a>
							&nbsp &nbsp	&nbsp &nbsp &nbsp
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							&nbsp &nbsp	&nbsp &nbsp &nbsp &nbsp	&nbsp &nbsp
							&nbsp &nbsp	&nbsp &nbsp &nbsp &nbsp	&nbsp &nbsp
							&nbsp &nbsp	&nbsp &nbsp &nbsp &nbsp
							<li class="top-right">
							<a href="#"><span class="fab fa-linkedin"></span></a>  &nbsp
							<a href="https://www.facebook.com/50Bandarawela?mibextid=2JQ9oc">
								<span class="fab fa-facebook-square"></span></a> &nbsp
							<a href="https://wa.me/message/CBYLNI2IKXKII1"><span class="fab fa-whatsapp"></span></a> &nbsp
							<a href="https://instagram.com/chanaka.sanjeewa?igshid=MzRlODBiNWFlZA==">
								<span class="fab fa-instagram"></span></a> &nbsp
							<a href="#"><span class="fab fa-youtube"></span></a> &nbsp
							</li>
						</div>
					</div>

				</div>
			</div>
			<!-- End Header Top -->

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="inner-container">
					<div class="auto-container clearfix">
						<!--Info-->
						<!--Nav Box-->
						<div class="nav-outer clearfix">
							<!--Mobile Navigation Toggler For Mobile-->
							<div class="mobile-nav-toggler">
								<span class="icon flaticon-menu-1"></span>
							</div>
							<nav class="main-menu navbar-expand-md navbar-light">
								<div class="navbar-header">
									<!-- Togg le Button -->
									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon flaticon-menu-1"></span>
									</button>
								</div>

								<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="current"><a href="adminpanel.php">Admin Panel</a></li>
										<li><a href="addAll.php">All photos</a></li>
										<li><a href="addAmp.php">Amplifier photos</a></li>
										<li><a href="addAud.php">Audio photos</a></li>
										<li><a href="addYT.php">Youtube photos</a></li>
										<li><a href="addLed.php">LED panel photos</a></li>
									</ul>
								</div>
							</nav>
							<!-- Main Menu End-->

							<!-- Outer Box -->
						</div>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn">
					<span class="icon flaticon-cancel"></span>
				</div>

				<nav class="menu-box">
					<div class="nav-logo">
						<a href="index.php"><img src="images/logo.png" alt="" title="" /></a>
					</div>
					<ul class="navigation clearfix">
						<!--Keep This Empty / Menu will come through Javascript-->
					</ul>
					<!--Social Links-->
					<div class="social-links">
						<ul class="clearfix">
							<li>
								<a href="#"><span class="fab fa-linkedin"></span></a>
							</li>
							<li>
								<a href="https://www.facebook.com/50Bandarawela?mibextid=2JQ9oc">
									<span class="fab fa-facebook-square"></span></a>
							</li>
							<li>
								<a href="https://wa.me/message/CBYLNI2IKXKII1">
									<span class="fab fa-whatsapp"></span></a>
							</li>
							<li>
								<a href="https://instagram.com/chanaka.sanjeewa?igshid=MzRlODBiNWFlZA==">
									<span class="fab fa-instagram"></span></a>
							</li>
							<li>
								<a href="#"><span class="fab fa-youtube"></span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- End Mobile Menu -->
		</header>
		<!-- End Main Header -->

		<!-- Main Slider -->
		<section class="main-slider">
			<div class="slider-box">
				<!-- Banner Carousel -->
				<div class="banner-carousel owl-theme owl-carousel">
					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image: url(images/main-slider/1.jpg)"></div>
						<div class="auto-container">
							<div class="content">
								<h4 class="text-light font-weight-bold">
									Welcome to</h4><br />
								<h2 class="font-weight-bold">
									Chanaka Electronics
								</h2>
								<div class="text font-weight-bold">
									Since 2007, We inspired fragments of your life stories with
									the avid skills of electronic repairing
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image: url(images/main-slider/2.jpg)"></div>
						<div class="auto-container">
							<div class="content">
								<h2>
									CRT | LCD | LED TV<br />
									Repairing
								</h2>
								<div class="text font-weight-bold">
									With 32 years of great experince we are doing all kinds of CRT, LCD, LED TV
									repairing
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image: url(images/main-slider/3.jpg)"></div>
						<div class="auto-container">
							<div class="content">
								<h2>
									Design your <br />
									LED panel With us
								</h2>
								<div class="text">
									With more than 10 years of experince we are designing LED Panel boards for your
									requirement
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image: url(images/main-slider/4.jpg)"></div>
						<div class="auto-container">
							<div class="content">
								<h2>
									LCD | LED Monitors<br />
									Repairing
								</h2>
								<div class="text font-weight-bold">
									With 32 years of great experince we are doing all kinds of LCD, LED Monitors
									repairing
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image: url(images/main-slider/5.jpg)"></div>
						<div class="auto-container">
							<div class="content">
								<h2>
									All kinds of Radio<br />
									Repairing
								</h2>
								<div class="text font-weight-bold">
									With 32 years of great experince we are doing all kinds
									of Radio, Cassatte, Amplifiers & car audio players repaiting
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image: url(images/main-slider/6.jpg)"></div>
						<div class="auto-container">
							<div class="content">
								<h2>Transformer Rewinding
								</h2>
								<div class="text font-weight-bold">
									With 25 years of great experince we are winding Transformers to any kind of
									requirement
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image: url(images/main-slider/7.jpg)"></div>
						<div class="auto-container">
							<div class="content">
								<h2>
									Amplifires & MP3 players<br />
									Manufacturing
								</h2>
								<div class="text font-weight-bold">
									According to your requirement, we manufacture very unique all kinds of
									amplifiers, Radios, mp3 players and car Audio.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Section -->


        <!--Scroll to top-->
        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/isotope.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/scrollbar.js"></script>
        <script src="js/script.js"></script>
        <!--Google Map APi Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
        <script src="js/map-script.js"></script>
        <!--End Google Map APi-->
</body>

</html>

<?php
} else {
  header("location:adminSign.php");
}
?>