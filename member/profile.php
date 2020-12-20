<?php include("./includes/header.php");?>
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
                    <li class="menu-has-children">
                        <a href="#">Blog</a>
                    </li>
                    <li class="shadow btn btn-danger"><a href="../logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php if(isset($_GET['profile'])):?>
<?php
            $getID = $_GET['profile'];
            $SQLGet = mysqli_query($con, "SELECT * FROM user_account WHERE id='$getID'");
            if(@mysqli_num_rows($SQLGet) == 1){
                while($data = mysqli_fetch_array($SQLGet)):
?>

<section class="banner-area">
    <div class="container">
        <div class="row banner-content">
            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                <div class="left-part bg-white p-3">
                    <h3>
                        Profile/<?php print $data['name'];?>
                        <?php if($data['on_off'] == 'online'):?>
                        <small><i class="fa fa-home text-success"></i></small>
                        <?php else:?>
                        <small><i class="fa fa-home text-danger"></i></small>
                        <?php endif;?>
                    </h3>
                </div>
                <div class="right-part">
                    <a href="index.php">home</a>
                    <span class="fa fa-caret-right"></span>
                    <a href="profile.php"><?php print $user_array[1];?></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <img src="../<?php print $data['profile_pic'];?>" alt="" class="img-fluid">
            <p>
                <?php print $data['about'];?>
            </p>
            <div class="box-50 shadow p-2 m-1">
                <p class="d-flex flex-wrap justify-content-between align-items-center p-0 m-0">
                    <span>Username:</span>
                    <span><?php print $data['username'];?></span>
                </p>
                <p class="d-flex flex-wrap justify-content-between align-items-center p-0 m-0">
                    <span>Full name:</span>
                    <span><?php print $data['name'];?></span>
                </p>
                <p class="d-flex flex-wrap justify-content-between align-items-center p-0 m-0">
                    <span>Email:</span>
                    <span><?php print $data['email'];?></span>
                </p>
                <p class="d-flex flex-wrap justify-content-between align-items-center p-0 m-0">
                    <span>Status</span>
                    <span class="badge badge-primary"><?php print $data['statu'];?></span>
                </p>
                <p class="d-flex flex-wrap justify-content-between align-items-center p-0 m-0">
                    <span>Date of birth:</span>
                    <span class="badge badge-primary"><?php print $data['dob'];?></span>
                </p>
                <p class="d-flex flex-wrap justify-content-between align-items-center p-0 m-0">
                    <span>Phone</span>
                    <span><?php print $data['phone'];?></span>
                </p>
            </div>
            <br>
            <div class="box-50 p-2 mb-5 bg-white shadow-sm">
                <p>Description</p>
                <p>
                    <?php print $data['about'];?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php
                endwhile;
            } else{
                $output .= '<p class="alert alert-danger">We are sorry but this persone doesn\'t exist</p>';
            }
        ?>
<?php else:?>
<section class="banner-area">
    <div class="container">
        <div class="row banner-content slideanim">
            <div class="col-lg-12 d-flex align-items-center justify-content-between">
                <div class="left-part">
                    <h1>
                        Profile/<?php print $user_array[2];?>
                    </h1>
                    <p>
                        <?php print $user_array[4];?>
                    </p>
                </div>
                <div class="right-part">
                    <a href="index.html">home</a>
                    <span class="fa fa-caret-right"></span>
                    <a href="../<?php print $user_array[10];?>" data-lightbox="mygallery">
                        <img src="../<?php print $user_array[10];?>" alt="" class="img-avatar">
                        <?php print $user_array[1];?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="fact-area section-gap-top">
    <div class="container py-5 profile-img" data-profile="../<?php print $user_array[10];?>">
        <div class="fact-box">
            <div class="row align-items-center">
                <div class="col single-fact">
                    <h2 id="userTotal">100K+</h2>
                    <p>Total members</p>
                </div>
                <div class="col single-fact">
                    <h2 id="userPastor">10K+</h2>
                    <p>Pastors</p>
                </div>
                <div class="col single-fact">
                    <h2 id="userFemale">50K+</h2>
                    <p>Female</p>
                </div>
                <div class="col single-fact">
                    <h2 id="userMale">0.02%</h2>
                    <p>Male</p>
                </div>
                <div class="col single-fact">
                    <h2 id="userWedding">15K+</h2>
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
                        <button type="button" class="btn btn-sm shadow" data-toggle="modal" data-target="#my-username"
                            id="<?php print $user_array[0];?>"><i class="fa fa-edit"></i></button>
                    </p>
                    <p class="d-flex justify-content-between align-items-center">
                        <span><?php print $user_array[2];?></span>
                        <button type="button" class="btn btn-sm shadow" data-toggle="modal" data-target="#my-name"
                            id="<?php print $user_array[0];?>"><i class="fa fa-edit"></i></button>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 slideanim">
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
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-feature">
                    <a href="../<?php print $user_array[10];?>" data-lightbox="mygallery">
                        <img src="../<?php print $user_array[10];?>" alt="" class="img-fluid">
                    </a>
                    <br>
                    <a href="edit.php" class="btn btn-sm btn-primary my-3">edit photo</a>
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
<?php endif;?>

<div class="modal fade" id="my-username">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title text-uppercase">
                    <?php print $user_array[1];?>
                </h4>
                <a href="profile.php" class="close">&times;</a>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="hidden" value="<?php print $user_array[0];?>" id="userId" class="form-control">
                        <label for="New-username">Username</label>
                        <input type="text" placeholder="<?php print $user_array[1];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-sm btn-primary" id="update-username">Update</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="profile.php" class="btn btn-sm btn-danger">Close</a>
            </div>
        </div>
    </div>
</div>
</div>

<?php include("./includes/footer.php");?>