<?php include("./includes/header.php");?>
<?php include('../includes/loading.php'); ?>
<div class="wrapper">
    <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    ERC
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
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
                <li>
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
        <nav class="navbar navbar-expand-lg bg-white p-0" color-on-scroll="500">
            <div class="container-fluid">
                <a class="navbar-brand color-hero" href="index.php"> Dashboard <i class="fa fa-band-aid"
                        aria-hidden="true"></i></a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link color-hero" data-toggle="dropdown">
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

        <div class="content">
            <div class="container-fluid p-0">
                <div class="main-content">
                    <div class="dashboard">
                        <div class="row p-0 mt-3">
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between py-2 align-items-center">
                                        <span>
                                            <b>Requests</b>
                                        </span>
                                        <span>
                                            <span id="requestCount" class="btn btn-sm btn-info">23</span>
                                        </span>
                                    </p>
                                    <a href="./users.php" class="btn btn-sm bg-primary">View more</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>
                                            <b>Total of all Users</b>
                                        </span>
                                        <span>
                                            <small class="usersCount">3000</small>
                                        </span>
                                    </p>
                                    <a href="./users.php" class="btn btn-sm bg-primary">View more</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>
                                            <b>Pastors</b>
                                        </span>
                                        <span class="pastorCount">
                                            23
                                        </span>
                                    </p>
                                    <a href="./pastor.php" class="btn btn-sm bg-hero">View more</a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span>
                                            <b>Weddings</b>
                                        </span>
                                        <span class="weddingCount">
                                            200
                                        </span>
                                    </p>
                                    <a href="./wedding.php" class="btn btn-sm bg-pink">View more</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <div class="shadow box-dashboard">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 class="color-hero">Pastors</h2>
                                        <a href="./pastor.php" title="Pastor page" class="btn shadow border-0">
                                            <i class="fa fa-arrow-right color-hero"></i>
                                        </a>
                                    </div>
                                    <div id="tablePastor" class="table-responsive">
                                        <!-- URL API pastor -->
                                    </div>
                                    <a href="./registration.php?registration=pastor" class="btn btn-sm btn-danger">
                                        <i class="fa fa-database"></i>
                                        Add Pastor
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="shadow box-dashboard">
                                    <a href="./users.php" title="Users page" class="btn close shadow border-0">
                                        <i class="fa fa-arrow-right color-hero"></i>
                                    </a>
                                    <h2 class="color-hero">users</h2>
                                    <div class="users">
                                        <!-- API -->
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username
                                                </span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username
                                                </span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username
                                                </span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                <span>
                                                    <img src="../assets/images/gun.png" alt="" style="width: 20px;">
                                                </span>
                                                <span>
                                                    Username
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="./users.php" class="btn shadow btn-danger btn-sm mt-4">View more</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 p-0">
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span class="text-danger">
                                            <b>Fiance</b>
                                        </span>
                                        <span class="weddingCount"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span class="text-warning">
                                            <b>Divorce</b>
                                        </span>
                                        <span class="divorceCount"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span class="text-warning">
                                            <b>Single</b>
                                        </span>
                                        <span class="singleCount">23</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 p-1">
                                <div class="shadow box-dashboard">
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span class="text-danger">
                                            <b>Male</b>
                                        </span>
                                        <span class="maleCount">23</span>
                                    </p>
                                    <p class="d-flex justify-content-between align-items-center">
                                        <span class="text-success">
                                            <b>Female</b>
                                        </span>
                                        <span class="femaleCount">23</span>
                                    </p>
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
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        <a href="#">Genuis Team</a>, Put God first
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>

<?php
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $del = mysqli_query($con, "DELETE FROM pastor_tb WHERE user_id ='$id'");

}
?>

</body>
<script src="../public/bootstrap/jquery.min.js" type="text/javascript"></script>
<script src="../public/bootstrap/popper.min.js" type="text/javascript"></script>
<script src="../public/js/bootstrap-notify.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../public/js/all.min.js"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js " type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(() => {
    requestCount();
    pastorCount();
    usersCount();
    weddingsCount();
    fianceCount();
    singleCount();
    divorceCount();
    maleCount();
    femaleCount();
    tablePastor();
    users();
});

function users() {
    let action = 'users';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.users').html(data)
        }
    })
    setTimeout('users()', 2000)
}

function tablePastor() {
    let action = 'tablePastor';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('#tablePastor').html(data)
        }
    })
}

function requestCount() {
    let action = 'requestCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('#requestCount').html(data)
        }
    })
    setTimeout('requestCount()', 1000)
}

function pastorCount() {
    let action = 'pastorCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.pastorCount').html(data)
        }
    })
}

function weddingsCount() {
    let action = 'weddingCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.weddingCount').html(data)
        }
    })
}

function usersCount() {
    let action = 'usersCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.usersCount').html(data)
        }
    })
}

function singleCount() {
    let action = 'singleCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.singleCount').html(data)
        }
    })
}

function fianceCount() {
    let action = 'fianceCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.fianceCount').html(data)
        }
    })
}

function divorceCount() {
    let action = 'divorceCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.divorceCount').html(data)
        }
    })
}

function maleCount() {
    let action = 'maleCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.maleCount').html(data)
        }
    })
}

function femaleCount() {
    let action = 'femaleCount';
    $.ajax({
        url: './config.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('.femaleCount').html(data)
        }
    })
}
</script>

</html>