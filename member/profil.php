<?php include("./lock.php"); ?>
<?php include("./includes/Configprofil.php"); ?>
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
    <nav class="navbar navbar-expand-md bg-dark py-0 navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php" title="Eglise Restauration Church">ERC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item bg-warning">
                    <a class="nav-link text-warning" href="profil.php">profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pastors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Weddings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About
                        us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="sidebar">
        sidebar
        <button type="button"><i class="fa fa-bars"></i></button>
    </div>
    <div class="jumbotron p-0 py-5 text-center m-0">
        <h2 class="display-2">Profil</h2>
    </div>

    <div class="container-fluid bg-grey">
        <div class="container">
            <div class="row" style="min-height: 50vh;">
                <div class="col-md-4 col-sm-12 slideanim">
                    <div class="profilDashboard bg-white shadow py-2">
                        <div class="Icon-left">
                            <i class="fa fa-user fa-2x text-hero"></i>
                        </div>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>Username:</span>
                            <span><?php print $profilArray[3]; ?></span>
                            <span>
                                <a href="edit" class="btn btn-sm shadow"><i class="fa fa-edit"></i></a>
                            </span>
                        </p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>Email:</span>
                            <span><?php print $profilArray[2]; ?></span>
                            <span>
                                <a href="edit" class="btn btn-sm shadow"><i class="fa fa-edit"></i></a>
                            </span>
                        </p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>Location:</span>
                            <span><?php print $profilArray[4]; ?></span>
                            <span>
                                <a href="edit" class="btn btn-sm shadow"><i class="fa fa-edit"></i></a>
                            </span>
                        </p>
                        <p class="d-flex justify-content-between align-items-center">
                            <span>Status:</span>
                            <span><?php print $profilArray[5]; ?></span>
                            <span>
                                <a href="edit" class="btn btn-sm shadow"><i class="fa fa-edit"></i></a>
                            </span>
                        </p>
                    </div>
                    <div class="text-center">
                        <h3>Jesus is the savior</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ea aliquid atque voluptas
                            fuga ad
                            enim deleniti nobis ratione laudantium sint, molestias fugit perferendis soluta. Quisquam
                            magnam
                            tempora qui nihil atque, inventore assumenda sint minus reprehenderit eligendi impedit
                            cupiditate
                            consequatur, dolorum soluta odio. Deserunt eligendi voluptates sint saepe facere iure
                            molestiae,
                            placeat velit, laboriosam expedita non harum earum ad, ab aliquid excepturi dolorem natus
                            hic esse
                            temporibus. Distinctio qui, cupiditate labore, veniam sapiente veritatis deserunt eos iusto
                            placeat
                            soluta, modi amet dolorem id odit blanditiis sed ipsum. Nisi facilis dolorem minima ipsa
                            saepe culpa
                            totam laudantium est veritatis, sapiente beatae.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 slideanim">
                    <div class="profilDashboard py-2 bg-white shadow">
                        <div class="Icon-top p-3">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <h1 class="display-1">Image</h1>
                        <a href="#" class="mt-3 btn btn-block btn-warning">Edit profile</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 hide-sm">
                    <form action="" method="post" autocomplete="off">
                        <input type="search" id="search" name="search" placeholder="Search...." class="form-control">
                    </form>
                    <div id="phpUsers">
                        <?php print $output; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        </div>
    </div>

    <script>
    $(document).ready(function() {
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