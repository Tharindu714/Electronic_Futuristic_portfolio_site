<!DOCTYPE html>
<html lang="en">
<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Chanaka Electronics | Admin Signin</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="mystyle.css">

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
        <!-- Model -->
        <div class="modal" tabindex="-1" id="veriFicationModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: black;">
                        <h5 class="modal-title text-info fw-bold text-uppercase">Admin Verification</h5>
                        <button type="button" class="btn-close bg-body border border-2 border-warning"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-image:url(images/main-slider/13.jpg)">
                        <label class="form-label text-light fw-bold"> Enter Your Verification Code</label>
                        <input type="text" class="form-control bg-dark border border-1 border-light text-light fw-bold"
                            id="vCode" placeholder="Enter Your Verification Code Here.......">
                    </div>
                    <div class="modal-footer" style="background-color: black;">
                        <button type="button"
                            class="btn bg-dark border border-2 border-danger fw-bold text-danger text-uppercase"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button"
                            class="btn bg-dark border border-2 border-primary fw-bold text-info text-uppercase"
                            onclick="verify();">Verify</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Model -->
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

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

                    </div>
                </div>
                <!-- End Header Top -->
            </header>



        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/main-slider/3.jpg)">
            <div class="auto-container">
                <h2>Admin Signin</h2>
                <ul class="page-breadcrumb">
                    <li><a href="adminSign.php">home</a></li>
                    <li>Admin</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Contact Form Section -->
        <section class="contact-form-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <h2 class="text-light">Administrator Sign In Portal</h2>
                </div>
                <div class="row clearfix">
                    <!-- Form Column -->
                    <div class="form-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Contact Form -->
                            <div class="contact-form">
                                <!--Contact Form-->
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                            <input type="email" name="email" id="e" placeholder="Enter Your Email address Here"
                                                required>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button class="theme-btn btn-style-one" onclick="adminVerification();"><span class="txt font-weight-bold">Get Verification
                                                    Code</span></button>
                                        </div>
                                    </div>
                           
                            </div>

                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Contact Info List -->
                            <ul class="contact-info-list">
                                <li><strong>Phone : </strong><a href="tel:+94778200344">0778200344</a></li>
                                <li><strong>Email : </strong><a
                                        href="mailto:chanakaelectro@gmail.com">chanakaelectro@gmail.com</a></li>
                            </ul>
                            <!-- Contact Info List -->

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Form Section -->

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


        <script src="bootstrap.bundle.js"></script>
        <script src="main.js"></script>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
        <script src="js/map-script.js"></script>
</body>

</html>