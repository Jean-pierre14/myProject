<?php include("./lock.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERC</title>
    <link rel="stylesheet" href="../public/css/all.min.css">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
    <script src="../public/bootstrap/jquery.min.js"></script>
    <script src="../public/js/all.min.js"></script>
    <script src="../public/bootstrap/bootstrap.min.js"></script>
    <script src="../public/bootstrap/popper.min.js"></script>
    <link rel="stylesheet" href="../public/sass/home.min.css">
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
                    <a class="nav-link" href="#home" data-toggle="collapse" data-target="#collapsibleNavbar">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#programme" data-toggle="collapse"
                        data-target="#collapsibleNavbar">Programmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pastor" data-toggle="collapse"
                        data-target="#collapsibleNavbar">Pastors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#wedding" data-toggle="collapse"
                        data-target="#collapsibleNavbar">Weddings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about" data-toggle="collapse" data-target="#collapsibleNavbar">About
                        us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron p-0 text-center m-0">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/erc/jumotron.png" alt="" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/erc/jumbotron2.png" alt="" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/erc/jumbotron3.png" alt="" class="img-fluid">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>

    <div class="container-fluid">
        <div class="scroll-right">

            <div class="element">
                <div class="cardElement">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas commodi vero. Ducimus porro
                        voluptas atque dolor quod at temporibus tenetur maiores ad facere sed provident, aliquid
                        voluptates impedit repudiandae?
                    </p>
                </div>
            </div>
            <div class="element">
                <div class="cardElement">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas commodi vero. Ducimus porro
                        voluptas atque dolor quod at temporibus tenetur maiores ad facere sed provident, aliquid
                        voluptates impedit repudiandae?
                    </p>
                </div>
            </div>
            <div class="element">
                <div class="cardElement">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas commodi vero. Ducimus porro
                        voluptas atque dolor quod at temporibus tenetur maiores ad facere sed provident, aliquid
                        voluptates impedit repudiandae?
                    </p>
                </div>
            </div>
            <div class="element">
                <div class="cardElement">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas commodi vero. Ducimus porro
                        voluptas atque dolor quod at temporibus tenetur maiores ad facere sed provident, aliquid
                        voluptates impedit repudiandae?
                    </p>
                </div>
            </div>
            <div class="element">
                <div class="cardElement">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas commodi vero. Ducimus porro
                        voluptas atque dolor quod at temporibus tenetur maiores ad facere sed provident, aliquid
                        voluptates impedit repudiandae?
                    </p>
                </div>
            </div>
            <div class="element">
                <div class="cardElement">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas commodi vero. Ducimus porro
                        voluptas atque dolor quod at temporibus tenetur maiores ad facere sed provident, aliquid
                        voluptates impedit repudiandae?
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-warning" id="programme">
        <div class="container py-5">
            <h1 class="display-1">Programmes</h1>
        </div>
    </div>
    <div class="container-fluid bg-light" id="pastor">
        <div class="container py-5">
            <h1 class="display-1">Pastors</h1>
        </div>
    </div>
    <div class="container-fluid" id="wedding">
        <div class="container py-5">
            <h1 class="display-1">Weddings</h1>
        </div>
    </div>

    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row text-grey">
                <div class="col-sm-12 col-md-4">
                    <h2>Partainers</h2>
                    <ul>
                        <li>CEPAC</li>
                        <li>CEPAC</li>
                        <li>CEPAC</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
    // APIs
    fetch('http://localhost:7000/programmes').then(
        res => {
            res.json().then(data => {
                // console.log(data)
                if (data.length > 0) {
                    var temp = ''
                    data.forEach((u) => {
                        temp += `
                    <div class="programmes text-white">
                        <div class="content-text">
                            <h3>${u.title}</h3>
                            <p>
                                ${u.context}
                            </p>
                        </div>
                        <div class="footer-content">
                            <p class="p-0 m-0 d-flex justify-content-between align-items-center">
                                <span>
                                    <span class="">
                                        <img src="./${u.profile_pic}" alt="userimage" width="45" class="img-fluid border-50">
                                    </span>
                                    <span>${u.username}</span>
                                </span>
                                <span>
                                    ${u.created_at}
                                </span>
                            </p>
                        </div>
                    </div>
                `
                    })
                    document.getElementById('programmes_APi').innerHTML = temp
                }
            })
        }).catch(err => {
        if (err) throw err
    })
    // APIs
    function check(e) {
        e.preventDefault()
        alert("Blog")
    }
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