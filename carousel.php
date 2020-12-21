<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <link rel="stylesheet" href="./public/bootstrap/bootstrap.min.css">
    <script src="./public/bootstrap/jquery.min.js"></script>
    <script src="./public/bootstrap/bootstrap.min.js"></script>
    <script src="./public/bootstrap/popper.min.js"></script>
</head>

<body>

    <div class="container">
        <h2 class="p-2 mt-1 text-center bg-primary text-white">
            Carousel
        </h2>

        <?php
        include './config/db.php';
        $o = '';
        $select = mysqli_query($con, "SELECT * FROM user_account LIMIT 5");
        if(mysqli_num_rows($select) > 0):
            foreach($select as $row):
                $o .= '
                <div class="carousel-item">
                    <img src="./'.$row['profile_pic'].'" alt="Chicago"
                        width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>'.$row['username'].'</h3>
                        <p>'.$row['about'].'</p>
                    </div>
                </div>
                ';
            endforeach;
        else:
            $o .= '<p class="alert alert-danger">There is no data</p>';
        endif;
        ?>
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/erc/choir.jpg" alt="Los Angeles" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                    </div>
                </div>
                <?= $o; ?>
                <div class="carousel-item">
                    <img src="./assets/images/erc/cyberpunk_egypt_by_kerko_ddxalej-fullview.jpg" alt="Chicago"
                        width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/erc/yvan_profile.jpg" alt="New York" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</body>

</html>