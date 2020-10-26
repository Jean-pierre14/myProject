<?php include("./lock.php"); ?>
<?php include("./includes/configBlog.php"); ?>
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
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">profil</a>
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
                <li class="nav-item bg-warning">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid bg-grey">
        <div class="container ">
            <div class="body-container" style="overflow-y: scroll;height: 80vh">
                <div id="phpResult">
                    <p><?php print $blogs; ?></p>
                </div>
            </div>
            <form action="" method="post" class="form-inline m-auto">
                <input type="text" name="text" placeholder="Typing..." class="form-control">
                <button type="submit" class="btn btn-warning">Send</button>
            </form>
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