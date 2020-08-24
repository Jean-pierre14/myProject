<?php
include("lock.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Registration</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/semantic/semantic.min.css">
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet">
    <link href="../assets/css/demo.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
    <link rel="stylesheet" href="../public/sass/style.css">
</head>

<body>
    <?php include('../includes/loading.php'); ?>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        ERC/GOMA
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Registration</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./wedding.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Wedding</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./users.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Members</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./pastor.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Pastors</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg bg-white p-0 m-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="wedding.php"> Wedding <i class="fa fa-user-plus"></i></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="user.php">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content m-0">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <!-- <h1 class="display-1">List of weddings</h1> -->
                            <?php if(isset($_GET['get'])):?>
                                
                                <?php $id_get = $_GET['get'];?>
                                <!-- Get the ID -->
                                <input type="hidden" value="<?php print $id_get;?>" id="id_wedding" class="form-control">
                                
                                <!-- <h1 class="display-4 text-danger">Get me</h1> -->
                                <div id="getMe">
                                    <!-- Url Api -->
                                </div>
                            <?php else: ?>
                                <div class="shadow box-dashboard bg-white">
                                    <span class="top-icon bg-primary">
                                        <i class="fa fa-user fa-2x"></i>
                                    </span>
                                    <h2 class="top-text-left">Weddings</h2>
                                    <div class="container-fluid m-0 p-0">
                                        <div id="demo" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <!-- PhotoShop -->
                                                <div class="carousel-item active">
                                                    <img src="../assets/images/use/user/happywedding.png" alt="" class="img-fluid"/>
                                                </div>
                                                <!-- PS -->
                                                <div class="carousel-item">
                                                    <img src="../assets/images/use/user/great.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="col-md-4 col-sm-0 pt-2">
                            <form action="" method="post">
                                <input type="search" name="search" id="search" placeholder="Search..." class="form-control">
                            </form>
                            <div id="wedding_list" class="mt-2" style="font-size: 12px;">
                                <!-- Url Api -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <?php print Date('Y'); ?>
                            <a href="#">
                                <?php print $team; ?>
                            </a>,
                            <?php print $devise; ?>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <div class="modal fade" id="hModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h4 class="modal-title text-info m-1 ml-1 mt-2">Edit <?php print $thisArr[2]?></h4>
                    <a href="wedding.php" class="btn btn-sm border-0 shadow text-danger close m-1"
                        style="outline: none;font-size: 20px;">
                        &times;
                    </a>
                </div>
                <div class="modal-body">
                    <form action="" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="about">Username</label>
                            <input type="hidden" value="<?php print $thisArr[0];?>" id="id_up" class="form-control">
                            <input type="text" id="username" placeholder="Example <?php print $thisArr[2];?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" id="btn-Edit-Username" class="btn btn-sm btn-warning btn-fill about_btn">
                                <i class="fa fa-arrow-circle-right"></i>
                                Update Username
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="wedding.php" class="btn btn-sm btn-fill btn-danger">Close</a>
                </div>

            </div>
        </div>
    </div>
</body>

<script src="../public/bootstrap/jquery.min.js"></script>
<script src="../public/bootstrap/popper.min.js"></script>
<script src="../public/bootstrap/bootstrap.min.js"></script>
<script src="../public/js/all.min.js"></script>
<script src="../public/semantic/semantic.min.js"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js" type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>
<script src="../public/js/myJquery.js"></script>

<script>
    $(document).ready(function(){
        $(document).on('#getMe', 'click', function(){
            alert("Clicked")
        })
        let flag = 0;
        let action = 'Weddings';
        $.ajax({
            url: './config.php',
            data: {
                action,
                limit: 3,
                offset: 0
            },
            method: 'post',
            success: function(data) {
                $('#wedding_list').html(data);
                flag += 5;
            }
        });
        $(window).scroll( function(){
            if($(window).scrollTop() >= $(document).height() - $(window).height()){
                let action = 'Weddings';
                let limit = 10;
                let offset = flag;
                $.ajax({
                    url: './config.php',
                    data: {
                        action,
                        limit,
                        offset
                    },
                    method: 'post',
                    success: function(data) {
                        $('#wedding_list').html(data);
                        flag += 3;
                    }
                })
            }
        })
        getWedding();
    });
    function getWedding(){
        let action = 'id_wedding';
        let id = $('#id_wedding').val();
        
        $.ajax({
            url: './config.php',
            data: {action, id},
            method: 'post',
            success: function(data){
                $('#getMe').html(data)
            }
        })
    }
</script>
</html>