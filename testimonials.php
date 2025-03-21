<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/testimonials.html  30 Nov 2019 03:49:28 GMT -->
<head>
<meta charset="utf-8">
<title>Chanaka Electronics | Testimonials</title>
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
			<div class="header-top">
				<div class="auto-container clearfix">
					<div class="top-left clearfix">
						<div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a href="tel:+94778200344" class="number">0778200344</a></div>
						
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

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/1.jpg)">
    	<div class="auto-container">
        	<h2>Testimonials</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">home</a></li>
                <li>Testimonials</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Testimonials Page Section -->
	<section class="testimonials-page-section"style="background-image: url(images/main-slider/13.jpg); width: auto;">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title-two centered">
					<h2 class="text-light font-weight-bold">What our customers say</h2>
				</div>

				<div class="testimonial-carousel owl-carousel owl-theme">
					<!-- Testimonial Block -->
					<?php
					require "connection.php";
					$feedback_rs = Database::search("SELECT * FROM `feedback`");
					$feedback_num = $feedback_rs->num_rows;

					for ($x = 0; $x < $feedback_num; $x++) {
						$feedback_data = $feedback_rs->fetch_assoc();
						?>
						<div class="testimonial-block">
							<div class="inner-box">
								<div class="content">

									<h3>
										<?php echo $feedback_data["user_name"]; ?>
									</h3>
									<div class="title">
										<?php echo $feedback_data["email"]; ?>
									</div>
									<div class="text">
										<?php echo $feedback_data["feedback"]; ?>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
	</section>
</div>  

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
		<!-- End Call To Action Section -->
<!--End pagewrapper-->

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/testimonials.html  30 Nov 2019 03:49:30 GMT -->
</html>