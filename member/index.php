<?php include("./includes/header.php");?>

<section class="banner-area mb-5">
    <div class="container">
        <div class="row banner-content">
            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                <div class="left-part">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h1>
                                    Welcome to ERC
                                </h1>
                            </div>
                            <div class="carousel-item">
                                <h1>
                                    Dear, <span class="text-uppercase"><?php print $user_array[1];?></span>
                                </h1>
                            </div>
                        </div>
                    </div>
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
<div class="container-fluid bg-bible py-5">
    <div class="container">
        <p class="text-center shadow-lg" id="word_of_day">
            <!-- AJax -->
        </p>
    </div>
</div>
<?php 
    if(isset($_GET['readWedding'])):
        require('./includes/GetMeWedding.php');
    endif;  
?>

<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <!-- Programmes -->
                <div id="programmes"></div>
                <!-- End Programmes -->
                <!-- API to wedding -->
                <div id="weddingsFind" class="container-fluid p-0"></div>
                <!-- End API to wedding -->
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="../assets/images/erc/logo.png" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widgets hidden-sm">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget search-widget">
                        <form class="search-form" action="#">
                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Search Posts'">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="single-sidebar-widget user-info-widget">
                        <img src="../<?php print $user_array[10];?>" alt="" class="img-fluid"
                            style="border-radius: 50%">
                        <a href="#">
                            <h4><?php print $user_array[2];?></h4>
                        </a>
                        <p>
                            <?php if($user_array[5] == 'none'):?>
                            <span>
                                ERC/Goma
                            </span>
                            <?php else:?>
                            <?php print $user_array[5];?>
                            <?php endif;?>
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
                        <a href="#"><img class="img-fluid" src="../<?php print $user_array[10];?>" alt=""></a>
                    </div>
                    <div class="single-sidebar-widget post-category-widget">
                        <h4 class="category-title">Dashboard</h4>
                        <ul class="cat-list">
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Members</p>
                                    <p>37</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Pastors</p>
                                    <p>24</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Male</p>
                                    <p>59</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Female</p>
                                    <p>29</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Young Boys</p>
                                    <p>15</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Young girls</p>
                                    <p>09</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Weddings</p>
                                    <p>44</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget tag-cloud-widget">
                        <h4 class="tagcloud-title">View more</h4>
                        <ul>
                            <li><a href="#">Members</a></li>
                            <li><a href="#">Pastors</a></li>
                            <li><a href="#">weddings</a></li>
                            <li><a href="#">Preaching</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Young Boys</a></li>
                            <li><a href="#">Young Girls</a></li>
                            <li><a href="#">Programmes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="post-content-area" id="newsPage">
    <div class="container py-5">
        <h3 class="text-center text-white p-3 bg-primary">News</h3>
        <div id="newResults"></div>
    </div>
</section>


<div class="container-fluid py-5">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card m-2">
                    <img src="../assets/images/erc/hadassa.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p>Pastor <b>Hadassa Mbanza</b></p>
                        <p class="d-flex flex-wrap justify-content-between align-items-center">
                            <span>Phone:</span>
                            <span>+243976454543</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card m-2">
                    <img src="../assets/images/erc/hadassa.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p>Pastor <b>Hadassa Mbanza</b></p>
                        <p class="d-flex flex-wrap justify-content-between align-items-center">
                            <span>Phone:</span>
                            <span>+243976454543</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card m-2">
                    <img src="../assets/images/erc/hadassa.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p>Pastor <b>Ndagijimana Yoshua MASASU</b></p>
                        <p  class="d-flex flex-wrap justify-content-between align-items-center">
                            <span>Email</span>
                            <span></span>
                        </p>
                        <p class="d-flex flex-wrap justify-content-between align-items-center">
                            <span>Phone:</span>
                            <span>+250786454543</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card m-2">
                    <img src="../assets/images/erc/hadassa.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p>Pastor <b>Hadassa Mbanza</b></p>
                        <p class="d-flex flex-wrap justify-content-between align-items-center">
                            <span>Phone:</span>
                            <span>+243976454543</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card m-2">
                    <img src="../assets/images/erc/hadassa.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p>Pastor <b>Hadassa Mbanza</b></p>
                        <p class="d-flex flex-wrap justify-content-between align-items-center">
                            <span>Phone:</span>
                            <span>+243976454543</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card m-2">
                    <img src="../assets/images/erc/hadassa.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p>Pastor <b>Hadassa Mbanza</b></p>
                        <p class="d-flex flex-wrap justify-content-between align-items-center">
                            <span>Phone:</span>
                            <span>+243976454543</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="AllWeddings">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Weddings</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div id="moreWedding"></div>
                <!-- Get All wedding and i need to use placeholder -->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/scrollTop.php';?>

<?php include("./includes/footer.php");?>