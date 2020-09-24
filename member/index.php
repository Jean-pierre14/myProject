<?php include("./lock.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERC</title>
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/sass/home.min.css">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
    <script src="../public/bootstrap/jquery.min.js"></script>
    <script src="../public/js/all.min.js"></script>
    <script src="../public/bootstrap/bootstrap.min.js"></script>
    <script src="../public/bootstrap/popper.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

        <a class="navbar-brand" href="#myPage" title="Eglise Restauration Church">ERC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#programme">Programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pastor">Pastors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#wedding">Weddings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron bg-warning text-center m-0">
        <h1>Eglise Restauration Church</h1>
        <p>Welcome, Join us</p>

    </div>


    <div class="container-fluid m-0 bg-img bg-home bg-warning" style="min-height: 100vh;" id="home">
        <div class="row justity-content-center bg-light-opacity-6 p-2">
            <div class="col-md-4 mt-4 text-center text-dark">
                <div class="box-design bg-white shadow">
                    <h3 class="display-4">Welcome</h3>
                    <p class="text-dark display-5">
                        This system help christians to know, and stay connected to the church news everywhere they are,
                        we need to worship God all the time, stay connected and see what happen
                    </p>
                    <a href="login.php" class="btn btn-sm shadow btn-success">
                        <i class="fa fa-chevron-right"></i>
                        Join Us
                    </a>
                </div>
            </div>
            <div class="col-md-8 pt-5 mt-4">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid m-0 p-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-secondary">
                                        <div class="box-home-design bg-white shadow">
                                            <div class="icon-top bg-hero shadow">
                                                <i class="fa fa-users fa-2x"></i>
                                            </div>
                                            <div class="grid-1-3 p-4">
                                                <div class="text-center">
                                                    <i class="fa fa-users fa-4x"></i>
                                                </div>
                                                <div class="text-dark">
                                                    <p class="display-5">
                                                        All members are connected, find them here <br><br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-home-design bg-white shadow">
                                            <div class="icon-top shadow">
                                                <i class="fa fa-users fa-2x"></i>
                                            </div>
                                            <div class="grid-1-3 p-4">
                                                <div class="text-center">
                                                    <i class="fa fa-user fa-4x"></i>
                                                </div>
                                                <div class="text-dark">
                                                    <p class="display-5">
                                                        Join us and you will have your own account, with all permission
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid m-0 p-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-secondary">
                                        <div class="box-home-design bg-white shadow">
                                            <div class="icon-top shadow bg-hero">
                                                <i class="fa fa-search fa-2x"></i>
                                            </div>
                                            <div class="grid-1-3 p-4">
                                                <div class="text-center">
                                                    <i class="fa fa-search fa-4x"></i>
                                                </div>
                                                <div class="text-dark">
                                                    <p class="display-5">
                                                        You are looking for someone, Stay calme and him or her
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-home-design bg-white shadow">
                                            <div class="icon-top bg-success">
                                                <i class="fa fa-users fa-2x"></i>
                                            </div>
                                            <div class="grid-1-3 p-4">
                                                <div class="text-center">
                                                    <i class="fa fa-user fa-4x"></i>
                                                </div>
                                                <div class="text-dark">
                                                    <p class="display-5">
                                                        Join us and you will have your own account, with all permission
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid m-0 p-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-secondary">
                                        <div class="box-home-design bg-white shadow">
                                            <div class="icon-top shadow bg-pink">
                                                <i class="fa fa-users fa-2x"></i>
                                            </div>
                                            <div class="grid-1-3 p-4">
                                                <div class="text-center">
                                                    <i class="fa fa-users fa-4x"></i>
                                                </div>
                                                <div class="text-dark">
                                                    <p class="display-5">
                                                        All members are connected, find them here
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-home-design bg-white shadow">
                                            <div class="icon-top bg-hero">
                                                <i class="fa fa-users fa-2x"></i>
                                            </div>
                                            <div class="grid-1-3 p-4">
                                                <div class="text-center">
                                                    <i class="fa fa-user fa-4x"></i>
                                                </div>
                                                <div class="text-dark">
                                                    <p class="display-5">
                                                        Join us and you will have your own account, with all permission
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid m-0 bg-secondary" style="min-height: 100vh;" id="services">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="container-fluid m-0">
                    <h3 class="text-center display-5 text-light text-uppercase">department</h3>
                    <div class="row">
                        <div class="col-md-4 p-2">
                            <div class="services bg-white">
                                <i class="fa fa-users fa-2x"></i>
                                <span>Members</span>
                            </div>
                        </div>
                        <div class="col-md-4 p-2">
                            <div class="services bg-white">
                                <i class="fa fa-home fa-2x"></i>
                                <span>Intercession</span>
                            </div>
                        </div>
                        <div class="col-md-4 p-2">
                            <div class="services bg-white">
                                <i class="fa fa-database fa-2x"></i>
                                <span>Media</span>
                            </div>
                        </div>
                        <div class="col-md-4 p-2">
                            <div class="services bg-white">
                                <i class="fa fa-chevron-right fa-2x"></i>
                                <span>Choral</span>
                            </div>
                        </div>
                        <div class="col-md-4 p-2">
                            <div class="services bg-white">
                                <i class="fa fa-chevron-left fa-2x"></i>
                                <span>security</span>
                            </div>
                        </div>
                        <div class="col-md-4 p-2">
                            <div class="services bg-white">
                                <i class="fa fa-chevron-left fa-2x"></i>
                                <span>Young</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid m-0" style="min-height: 100vh;" id="programme">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid m-0">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card">
                                            <img src="./assets/images/erc/hadassa.jpg" alt="name of the pastor"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h3>Hadassa</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card">
                                            <img src="./assets/images/erc/lombo6.jpg" alt="name of the pastor"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h3>Lombo</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid m-0">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card">
                                            <img src="./assets/images/erc/hadassa.jpg" alt="name of the pastor"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h3>Hadassa</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card">
                                            <img src="./assets/images/erc/lombo6.jpg" alt="name of the pastor"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h3>Lombo</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <h3 class="text-warning text-center">Today programmes</h3>
                <table class="table table-sm table-striped table-hover">
                    <thead>
                        <tr class="border-0">
                            <th>Preach</th>
                            <th>Moderator</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pastor Ndaye</td>
                            <td>Bahizi christian</td>
                            <td>09:30-11:00</td>
                        </tr>
                        <tr>
                            <td>Pastor Ndaye</td>
                            <td>Bahizi christian</td>
                            <td>09:30-11:00</td>
                        </tr>
                        <tr>
                            <td>Pastor Ndaye</td>
                            <td>Bahizi christian</td>
                            <td>09:30-11:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid m-0 bg-img bg-programme p-5" style="min-height: 100vh;" id="pastor">
        <div class="row bg-light-opacity-6 p-2">
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name of the pastor</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name of the pastor</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name of the pastor</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name of the pastor</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name of the pastor</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name of the pastor</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name of the pastor</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2 col-sm-12">
                <div class="card shadow">
                    <img src="./assets/images/erc/Lord-Lombo.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Name</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <a href="#" class="btn btn-sm btn-danger shadow"><i class="fa fa-chevron-right"></i> View more
                    pastors</a>
            </div>
        </div>
    </div>
    <div class="container-fluid m-0 bg-warning" style="min-height: 100vh;" id="wedding">
        <div class="row bg-white">
            <div class="col-md-7 col-sm-12">
                <h2>Weddings</h2>
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h2>Wedding carousel images</h2>
                        </div>
                        <div class="carousel-item">
                            <h2>Wedding carousel images22</h2>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quidem inventore soluta nobis
                    vero doloremque, in iusto molestias quod, dicta quis explicabo quaerat nihil nisi totam earum ex
                    quae iste.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid m-0" style="min-height: 100vh;" id="contact">
        <div class="row min-sm bg-warning shadow" style="border-radius: 10px;">
            <div class="col-md-12 col-sm-12">
                <h3 class="display-3 text-white text-center">Contact Us</h3>
            </div>
            <div class="col-md-5 col-sm-12">
                <?php require_once('./event/event.php');
                include('./error.php'); ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email" class="text-light">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email@exemple.rw"
                            class="form-control transparent border-light border-3 text-white">
                    </div>
                    <div class="form-group">
                        <label for="message" class="text-light">Message</label>
                        <textarea id="message" name="message"
                            class="form-control transparent border-light border-3 text-white"
                            placeholder="Typing..."></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="subscribe" class="btn btn-success"><i class="fa fa-database"></i>
                            Send request</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7">
                <h3>Image design share users</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, commodi quia, consequuntur quasi
                    illum, architecto necessitatibus accusantium facere incidunt magnam ipsum soluta. Voluptatibus quod
                    debitis, iure fuga sed sapiente hic.
                </p>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        alert('ITs works');
        $(".navbar a, footer a[href='#myPage']").on('click', function(e) {

            if (this.hash !== "") {
                e.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                    window.location.hash = hash;
                });
            }

        });

        $(window).scroll(function() {
            $(".slideanim").each(function() {
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });

    })
    </script>
</body>

</html>