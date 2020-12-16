<?php include("lock.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ERC/Notifications</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport'>
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/light-bootstrap-dashboard.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="../public/css/demo.css">
    <link rel="stylesheet" href="../public/css/style.min.css">
    <link href="../public/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
    <link rel="stylesheet" href="../public/semantic/semantic.min.css">
</head>

<body>
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
                    <li class="nav-item">
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
                    <li class="nav-item">
                        <a class="nav-link" href="./pastor.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Pastors</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg bg-white navbar-top p-0 m-0" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand color-hero" href="notifications.php">
                        <?php print $_SESSION['username'];?>/Notification <i class="fas fa-users"
                            aria-hidden="true"></i>
                    </a>
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
            <div class="content p-0 m-0">
                <div class="container-fluid">
                    <div class="content-not">
                        <div class="">
                            <span class="badge badge-danger small hidden-sm">
                                <?php print Date('d/'.'m/'.'Y');?>
                            </span>
                            <span>
                                <a href="notifications.php?event=programme" class="btn btn-primary">Programmes</a>
                            </span>
                            <span>
                                <a href="notifications.php" class="btn btn-primary">Blog</a>
                            </span>
                            <span>
                                <a href="notifications.php?event=request" class="btn btn-primary">Request</a>
                            </span>
                        </div>
                        <?php if(isset($_GET['event'])):?>
                        <?php if($_GET['event'] == 'programme'):?>
                        <h3>Programmes</h3>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5 prg">
                                    <div class="card card-body">
                                        <form action="" method="post">
                                            <div id="error"></div>
                                            <div class="form-group">
                                                <input type="hidden" name="userid" id="userId"
                                                    value="<?php print $UserData[0]?>">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" placeholder="Title..."
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="content">Message</label>
                                                <textarea name="content" id="content" placeholder="typing..."
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" id="programmeEvent"
                                                    class="btn btn-sm btn-primary">New
                                                    programme</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="CountProgrammes"></div>
                                </div>
                                <div class="col-md-7">
                                    <h4>Programmes</h4>
                                    <div class="hidden-lg">
                                        <p class="alert alert-warning">This can't open in smart phone</p>
                                    </div>
                                    <div id="programmes_APi" class="hidden-sm height-max"></div>
                                </div>
                            </div>
                        </div>
                        <?php elseif($_GET['event'] == 'request'):?>
                        <div class="row">
                            <div class="col-md-8 p-2">
                                <div id="requests">
                                    <div class="card card-body">
                                        <h3>Requests</h3>
                                    </div>
                                    <div id="requests_Api"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <a href="user.php">
                                        <img src="../<?php print $UserData[12];?>" alt="" class="card-img-top">
                                    </a>
                                    <h4 class="m-0 p-0 text-uppercase">
                                        <?php print $UserData[1];?>
                                    </h4>
                                    <a href="user.php" class="btn btn-block btn-primary">My profile</a>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                        <?php else:?>
                        <div class="body-not">
                            <div id="blog">
                                <div class="bg-danger p-3 shadow m-3">
                                    <p class="display-4 text-white">
                                        Server is switched off
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-not">
                            <form action="" method="post" class="" id="form">
                                <input type="hidden" id="user_id" value="<?php print $_SESSION['id'];?>"
                                    class="form-control">
                                <input name="message" autocomplete="off" autofocus id="ContextMsg"
                                    placeholder="Typing...." class="form-control">
                                <button type="button" id="Add-blog" class="btn btn-warning">
                                    <i class="fa fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                        <?php endif;?>

                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="index.php">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="user.php">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="registration.php">
                                    Registration
                                </a>
                            </li>
                            <li>
                                <a href="notifications.php">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                            <a href="github.com/Jean-pierre14">Genuis Team</a>, Put God first
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script> -->

<script src="../public/js/axios.js"></script>

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
<script src="../assets/js/api.js"></script>

<script>
fetch('http://localhost:7000/programmes/all').then(res => res.json().then(data => {
    if (data.length > 0) {
        var programmes = ''
        data.forEach(item => {
            let time = new Date(item.created_at)
            time =
                `${time.getDate()}/${time.getFullYear()} >> ${time.getHours() < 10 ? '0' : ''}${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`
            programmes += `
            <div class="bg-light p-1 m-3 border-3 border-left border-danger">
                <h3>${item.title}</h3>
                <p>${item.context}</p>
                <p class="p-0 m-0 d-flex justify-content-between flex-wrap align-items-center">
                    <span class="d-flex justify-content-between flex-wrap align-items-center">
                        <img class="img-avatar" src="../${item.profile_pic}">
                        <span>${item.username}</span>
                    </span>
                    <small>${time}</small>
                    </p>
            </div>`
        })
        document.getElementById('programmes_APi').innerHTML = programmes
    } else {
        document.getElementById('programmes_APi').innerHTML =
            '<p class="alert alert-warning">Programmes are not available right now</p>'
    }
}).catch(err => {
    if (err) throw err
}))
</script>
<script>
$(document).ready(function() {
    RequestAll()
})
// Request 
function RequestAll() {
    let action = 'requests_Api'
    $.ajax({
        url: './event/event.php',
        method: 'post',
        data: {
            action
        },
        success: function(data) {
            $('#requests_Api').html(data)
        }
    })
}
</script>

</html>