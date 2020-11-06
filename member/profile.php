<?php include("./lock.php"); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/images/erc/favicon.png" type="image/png">
    <meta name="author" content="jean-pierre14">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>ERC/<?php print $user_array[1] ;?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto:400,400i,500" rel="stylesheet">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/hexagons.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php">
                        <img src="../assets/images/erc/logo.png" alt="" title="" width="100" class="img-fluid" />
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li class="menu-active">
                            <a href="profile.php">Profile</a>
                        </li>
                        <li class="menu-has-children"><a href="">Blog</a>
                            <ul>
                                <li><a href="blog-home.html">Blog Home</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="shadow btn btn-danger"><a href="../logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="banner-area">
        <div class="container">
            <div class="row banner-content">
                <div class="col-lg-12 d-flex align-items-center justify-content-between">
                    <div class="left-part">
                        <h1>
                            Profile
                        </h1>
                        <p>
                            <?php print $user_array[4];?>
                        </p>
                    </div>
                    <div class="right-part">
                        <a href="index.html">home</a>
                        <span class="fa fa-caret-right"></span>
                        <a href="profile.php"><?php print $user_array[1];?></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="fact-area section-gap-top">
        <div class="container">
            <div class="fact-box">
                <div class="row align-items-center">
                    <div class="col single-fact">
                        <h2>100K+</h2>
                        <p>Total members</p>
                    </div>
                    <div class="col single-fact">
                        <h2>10K+</h2>
                        <p>Pastors</p>
                    </div>
                    <div class="col single-fact">
                        <h2>50K+</h2>
                        <p>Female</p>
                    </div>
                    <div class="col single-fact">
                        <h2>0.02%</h2>
                        <p>Male</p>
                    </div>
                    <div class="col single-fact">
                        <h2>15K+</h2>
                        <p>Weddings</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-area section-gap-top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Your status</h2>
                        <p>
                            <?php print $user_array[4];?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-user"></span>
                            <h3><?php print $user_array[2];?></h3>
                        </a>
                        <p class="d-flex justify-content-between align-items-center">
                            <span><?php print $user_array[1];?></span>
                            <button type="button" class="btn btn-sm shadow" id="<?php print $user_array[0];?>"><i
                                    class="fa fa-edit"></i></button>
                        </p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span><?php print $user_array[2];?></span>
                            <button type="button" class="btn btn-sm shadow" id="<?php print $user_array[0];?>"><i
                                    class="fa fa-edit"></i></button>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-location"></span>
                            <h3>Address</h3>
                        </a>
                        <p class="d-flex justify-content-between align-items-center">
                            <span><?php print $user_array[3];?></span>
                            <button type="button" class="btn btn-sm shadow" id="<?php print $user_array[0];?>"><i
                                    class="fa fa-edit"></i></button>
                        </p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span><?php print $user_array[5];?></span>
                            <button type="button" class="btn btn-sm shadow" id="<?php print $user_array[0];?>"><i
                                    class="fa fa-edit"></i></button>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-phone"></span>
                            <h3>Personne info</h3>
                        </a>
                        <p class="d-flex justify-content-between align-items-center">
                            <span><?php print $user_array[9];?></span>
                            <button type="button" class="btn btn-sm shadow" id="<?php print $user_array[0];?>"><i
                                    class="fa fa-edit"></i></button>
                        </p>
                        <input type="text" placeholder="New phone number" class="form-control mt-3">
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-book"></span>
                            <h3>Status</h3>
                        </a>
                        <p class="d-flex justify-content-between align-items-center">
                            <span><?php print $user_array[4];?></span>
                            <button type="button" class="btn btn-sm shadow" id="<?php print $user_array[0];?>"><i
                                    class="fa fa-edit"></i></button>
                        </p>
                        <input type="text" placeholder="Typing..." class="form-control mt-3">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <span class="lnr lnr-book"></span>
                            <h3>Weddings</h3>
                        </a>
                        <p class="d-flex justify-content-between align-items-center">
                            <span><?php print $user_array[4];?></span>
                            <button type="button" class="btn btn-sm shadow" id="<?php print $user_array[0];?>"><i
                                    class="fa fa-edit"></i></button>
                        </p>
                        <input type="text" placeholder="Typing..." class="form-control mt-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start about Area -->
    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 home-about-left">
                    <img class="img-fluid" src="../img/iphone.png" alt="">
                </div>
                <div class="offset-lg-1 col-lg-5 home-about-right">
                    <h1>
                        the Evangelical <br>
                        Restoration <br>
                        Church
                    </h1>
                    <p class="word-day">
                        Word of the day
                    </p>
                    <a class="primary-btn shadow text-uppercase" href="profile.php"><i class="fa fa-user"></i> Back</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-6 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-6 col-md-6 social-link">
                    <div class="download-button d-flex flex-row justify-content-end">
                        <div class="buttons gray flex-row d-flex">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="buttons gray flex-row d-flex">
                            <i class="fa fa-android" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/hexagons.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>