<?php include("./includes/header.php");?>

<section class="banner-area mb-5">
    <div class="container">
        <div class="row banner-content">
            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                <div class="left-part">

                    <h1>
                        Welcome <span class="text-uppercase"><?php print $user_array[1];?></span>
                    </h1>
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
<div class="container-fluid bg-primary py-5">
    <div class="container">
        <p class="text-center shadow-lg" id="word_of_day">
            <!-- AJax -->
        </p>
    </div>
</div>
<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <!-- Programmes -->
                <div id="programmes"></div>
                <!-- End Programmes -->
                <!-- API to wedding -->
                <div id="weddingsFind"></div>
                <!-- End API to wedding -->
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="../assets/images/erc/logo.png" alt="Logo">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags departments">
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
                                    class="lnr lnr-eye"></span>
                            </p>
                            <p class="comments col-lg-12 col-md-12 col-6">
                                <a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <h3 class="mt-20 mb-20">Astronomy Binoculars A Great Alternative</h3>
                        <p class="excert word_of_day">
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
                                select male last profile pic
                                <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                            </div>
                            <div class="col-lg-12 mt-30">
                                <p class="words">
                                    ...
                                </p>
                                <p>
                                    ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments-area">

                    <div class="comment-list users-5">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="../<?php print $user_array[10];?>" alt="" width="50">
                                </div>
                                <div class="desc">
                                    <h5>
                                        <a
                                            href="profile.php?profile=<?php print $user_array[0];?>"><?php print $user_array[2];?></a>
                                    </h5>
                                    <p class="date"><?php print $user_array[11];?></p>
                                    <p class="comment">
                                        <?php print $user_array[4];?>
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="profile.php?profile=<?php print $user_array[0];?>"
                                    class="btn-reply text-uppercase">view more</a>
                            </div>
                        </div>
                    </div>
                    <h4>Members</h4>
                    <div class="comment-list left-padding">
                        <?php
                            $select = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT 5");
                            if(@mysqli_num_rows($select)>0):
                                while($data = mysqli_fetch_assoc($select)):
                        ?>

                        <div class="single-comment justify-content-between d-flex slideanim">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="../<?php print $data['profile_pic'];?>" alt="<?php print $data['name'];?>"
                                        width="60">
                                </div>
                                <div class="desc">
                                    <h5>
                                        <a href="profile.php?profile=<?php print $data['id'];?>">
                                            <?php print $data['name'];?>
                                        </a>
                                    </h5>
                                    <p class="date">
                                        <small>
                                            <?php print $data['create_at'];?>
                                        </small>
                                    </p>
                                    <p class="comment">
                                        <?php if(strlen($data['about']) > 20):?>
                                        <?php print $data['about'];?>
                                        <a href="profile.php?profile=<?php print $data['id'];?>"
                                            class="btn btn-sm btn-secondary">read
                                            more</a>
                                        <?php else:?>
                                        <?php print $data['about'];?>
                                        <?php endif;?>
                                    </p>
                                </div>
                            </div>
                            <div class="reply-btn">
                                <a href="profile.php?profile=<?php print $data['id'];?>"
                                    class="btn-reply text-uppercase">view</a>
                            </div>
                        </div>
                        <?php endwhile;?>
                    </div>
                    <?php else:?>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="../assets/images/erc/logoERC.jpg" alt="" width="100">
                                </div>
                                <div class="desc">
                                    <h5><a href="#">ERC/Goma</a></h5>
                                    <p class="comment">
                                        Jesus christ is the key of every windows
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                </div>

            </div>
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget search-widget">
                        <form class="search-form" action="#">
                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Search Posts'">
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

<?php include("./includes/footer.php");?>