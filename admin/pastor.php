<?php include("lock.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ERC/
        <?php print $UserData[1]; ?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport'>
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/light-bootstrap-dashboard.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/pe-icon-7-stroke.css">

    <link rel="stylesheet" href="../public/semantic/semantic.min.css">
    <link rel="stylesheet" href="../public/css/demo.css">
    <link rel="stylesheet" href="../public/css/style.min.css">
    <link href="../public/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
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
                    <li class="nav-item">
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
                    <li class="nav-item active">
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
                    <a class="navbar-brand" href="registration.php"> Pastors <i class="fa fa-users"></i></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link" data-toggle="dropdown">
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
                            <li class="nav-item">
                                <a class="nav-link" href="../logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content m-0">
                <div class="container-fluid p-0 m-0">
                    <div class="row justify-content-center">
                        <div class="col-md-8 p-2">
                            <div class="box-dashboard bg-white shadow-lg p-5">
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control" placeholder="Search" id="demo"
                                        name="email">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Search</span>
                                    </div>
                                </div>
                                <div class="min-height">
                                    <div id="Pastors">
                                        <!-- Ajax url -->
                                    </div>
                                </div>
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
let OutPut = ''
fetch('http://localhost:7000/pastors')
    .then(res => res.json().then(data => {
        if (data.length > 0) {
            data.forEach(item => {
                OutPut += `    
                    <div class="box-p shadow-sm my-1">
                            <span>${item.pastor_name}</span>
                            <img class="avatar" src="../${item.profile_pic}">
                            <span>
                                <div class="btn-group">
                                    <a href="pastor.php?get=${item.id}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </span>
                    </div>
                    `
            })
            document.getElementById('Pastors').innerHTML = OutPut
        } else {
            document.getElementById('Pastors').innerHTML = '<p>There is no Pastor registered</p>'
        }
    }))
    .catch(err => console.log(err))
</script>
<script>
$(document).ready(function() {

    $('[data-toggle="popover"]').popover();

    // Select a specified element
    $('#myPopover').popover();
    let flag = 0;
    let action = 'weddings';
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
            flag += 3;
        }
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() >= $(document).height() - $(window).height()) {
            let action = 'weddings';
            let limit = 10;
            let offset = flag;
            // alert(offset)
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

function getWedding() {
    let action = 'id_wedding';
    let id = $('#id_wedding').val();

    $.ajax({
        url: './config.php',
        data: {
            action,
            id
        },
        method: 'post',
        success: function(data) {
            $('#getMe').html(data)
        }
    })
}
</script>


</html>