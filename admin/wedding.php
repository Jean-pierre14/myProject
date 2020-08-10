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
                    <li>
                        <a class="nav-link" href="./icons.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
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
            <nav class="navbar navbar-expand-lg bg-light p-0 m-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="registration.php"> Wedding <i class="fa fa-user-plus"></i></a>
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
            <div class="content m-0 p-0">
                <h1 class="display-1">Weddings</h1>
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

    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>

            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Style</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Background Image</p>
                        <label class="switch">
                            <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary"
                                data-off-color="primary"><span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <p>Filters</p>
                        <div class="pull-right">
                            <span class="badge filter badge-black" data-color="black"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-purple active" data-color="purple"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Images</li>

                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="..//assets/img/sidebar-4.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-5.jpg" alt="" />
                    </a>
                </li>

                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank"
                            class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                    </div>
                </li>

                <li class="header-title pro-title text-center">Want more components?</li>

                <li class="button-container">
                    <div class="">
                        <a href="#" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                    </div>
                </li>

                <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i
                            class="fa fa-twitter"></i> · 256</button>
                    <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i
                            class="fa fa-facebook-square"></i> · 426</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-success">Add New Pastor</h4>
                    <button type="button" class="btn close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div id="successMsg"></div>
                    <form action="" method="post">
                        <div class="form-group">
                            <select name="pastorId" id="pastorId" class="custom-select">
                                <option value="">-- Select Pastor ---</option>
                                <?php
                                $item = '';
                                $recordPastor = mysqli_query($con, "SELECT * FROM user_account WHERE (statu = 'married' OR statu = 'divorce')");
                                if (@mysqli_num_rows($recordPastor) > 0) {
                                    while ($rowrecord = mysqli_fetch_array($recordPastor)) {
                                        $pastorId = $rowrecord['id'];
                                        $pastorname = $rowrecord['name'];
                                        print '<option value="' . $pastorId . '">' . $pastorname . '</option>';
                                    }
                                } else {
                                    $item .= '<option class="text-danger">There no data</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="pastorName" placeholder="Your Pastor">
                                <div class="input-group-append">
                                    <span class="input-group-text">Pastor name</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-fill btn-sm btn-success RecordPastor">Record <i
                                    class="fa fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
$().ready(() => {
    online();
    member();
    memberList();
    statistic();
    listPastor();
    PastorNormal();

    weddings();
});

function weddings() {
    let action = 'weddings';
    let limit = 10;
    let offset = 0;
    $.ajax({
        url: './config.php',
        data: {
            action,
            limit,
            offset
        },
        method: 'post',
        success: function(data) {
            $('#wedding_list').html(data)
        }
    })
}




function listPastor() {
    let action = 'listPastor';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#listPastor').html(data);
        }
    })
}

function online() {
    let action = 'online';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#online').html(data)
        }
    })
}

function member() {
    let action = 'member';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#member').html(data)
        }
    })
}

function memberList() {
    let action = 'member-list';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#member-list').html(data)
        }
    })
}

function statistic() {
    let action = 'statistic';
    $.ajax({
        url: '../event/event.php',
        method: 'post',
        data: {
            action: action
        },
        success: function(data) {
            $('#statistic').html(data)
        }
    })
}
</script>

</html>