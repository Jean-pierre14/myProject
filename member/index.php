<?php include("./lock.php"); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/images/erc/favicon.png" type="image/x-icon">
    <meta name="author" content="jean-pierre14">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>ERC/<?php print $user_array[1];?></title>
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
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="profile.php">Profile</a></li>

                        <li class="menu-has-children">
                            <a href="#">Blog</a>
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
                            Welcome <span class="text-uppercase"><?php print $user_array[1];?></span>
                        </h1>
                        <p id="word_of_day">
                            at this place we will display the word of the day, it can be the new of the or a word of
                            motivation, ... everything that is
                        </p>
                    </div>
                    <div class="right-part">
                        <a href="index.php">
                            home/
                            <span class="p-0 m-0">
                                <img src="../<?php print $user_array[10];?>" alt="" class="img-avatar">
                            </span>
                            <?php print $user_array[1];?></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3 meta-details">
                            <ul class="tags">
                                <li><a href="#">Preachers,</a></li>
                                <li><a href="#">Worship,</a></li>
                                <li><a href="#">Songs,</a></li>
                                <li><a href="#">Goma pour Christ</a></li>
                            </ul>
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                        class="lnr lnr-user"></span></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                        class="lnr lnr-calendar-full"></span></p>
                                <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                        class="lnr lnr-eye"></span></p>
                                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                        class="lnr lnr-bubble"></span></p>
                                <ul class="social-links col-lg-12 col-md-12 col-6">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <h3 class="mt-20 mb-20">Astronomy Binoculars A Great Alternative</h3>
                            <p class="excert">
                                MCSE boot camps have its supporters and its detractors. Some people do not
                                understand why you should have to
                                spend money
                                on boot camp when you can get the MCSE study materials yourself at a fraction.
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend
                                money on boot
                                camp when you can get the MCSE study materials yourself at a fraction of the camp
                                price. However, who has the
                                willpower
                                to actually sit through a self-imposed MCSE training. who has the willpower to
                                actually sit through a
                                self-imposed
                            </p>
                            <p>
                                Boot camps have its supporters and its detractors. Some people do not understand why
                                you should have to spend
                                money on boot
                                camp when you can get the MCSE study materials yourself at a fraction of the camp
                                price. However, who has the
                                willpower
                                to actually sit through a self-imposed MCSE training. who has the willpower to
                                actually sit through a
                                self-imposed
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                MCSE boot camps have its supporters and its detractors. Some people do not
                                understand why you should have to
                                spend money
                                on boot camp when you can get the MCSE study materials yourself at a fraction of the
                                camp price. However, who
                                has
                                the willpower to actually sit through a self-imposed MCSE training.
                            </div>
                            <div class="row mt-30 mb-30">
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mt-30">
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to
                                        spend money
                                        on boot camp when you can get the MCSE study materials yourself at a
                                        fraction of the camp price. However, who
                                        has
                                        the willpower.
                                    </p>
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to
                                        spend money
                                        on boot camp when you can get the MCSE study materials yourself at a
                                        fraction of the camp price. However, who
                                        has
                                        the willpower.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>Space The Final Frontier</h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4>Telescopes 101</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Comment</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-12 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-12 email">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter email address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                    required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn">Post Comment</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <img src="../<?php print $user_array[10];?>" alt="" style="border-radius: 50%">
                            <a href="#">
                                <h4><?php print $user_array[2];?></h4>
                            </a>
                            <p>
                                <?php print $user_array[5];?>
                            </p>

                            <p>
                                <?php print $user_array[4];?>
                            </p>
                        </div>
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">New members </h4>
                            <div class="popular-post-list" id="newUsers4">
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Space The Final Frontier</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>The Amazing Hubble</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Astronomy Or Astrology</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Asteroids telescope</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget ads-widget">
                            <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
                        </div>
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Post Catgories</h4>
                            <ul class="cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="newsletter-title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without giving
                                them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="col-autos">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Enter email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'">
                                    </div>
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">
                                You can unsubscribe at any time
                            </p>
                        </div>
                        <div class="single-sidebar-widget tag-cloud-widget">
                            <h4 class="tagcloud-title">Tag Clouds</h4>
                            <ul>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </div>
                    </div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
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
    <script src="../js/Api.js"></script>
</body>

</html>