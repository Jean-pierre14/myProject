<!DOCTYPE html>
<html>

<head>
    <title>Slick Playground</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.theme.css">
    <link rel="stylesheet" href="./assets/css/slicknav.min.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> -->
    <style type="text/css">
    html,
    body {
        margin: 0;
        padding: 0;
    }

    * {
        box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }
    </style>
</head>

<body>

    <h3 class="text-center">Users</h3>
    <section class="regular slider d-flex">
        <?php
        include './config/db.php';

        $sql = mysqli_query($con, "SELECT * FROM user_account LIMIT 7");
        
        foreach($sql as $row){
          print '
          <div style="width: 300px">
            <img src="./'.$row['profile_pic'].'" style="width:100%">
          </div>';
        }
        ?>
        <!-- <div>
            <img src="http://placehold.it/350x300?text=1">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=2">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=3">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=4">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=5">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=6">
        </div> -->
    </section>

    <!-- <div id="results"></div> -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script>
    fetch('http://localhost:7000/users').then(res => res.json().then(data => {
        if (data.length > 0) {
            let outpout = ''
            outpout += '<div class="regular slider">'
            data.forEach(item => {
                outpout += `<div>${item.username}</div>`
            })
            outpout += '</div>'
            document.getElementById('results').innerHTML = outpout
        } else {
            console.log('there no data')
        }
    })).catch(err => console.log(err))
    </script>
    <script type="text/javascript">
    $(document).on('ready', function() {
        $(".vertical-center-4").slick({
            dots: true,
            vertical: true,
            centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 2
        });
        $(".vertical-center-3").slick({
            dots: true,
            vertical: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $(".vertical-center-2").slick({
            dots: true,
            vertical: true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 2
        });
        $(".vertical-center").slick({
            dots: true,
            vertical: true,
            centerMode: true,
        });
        $(".vertical").slick({
            dots: true,
            vertical: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 5,
            slidesToScroll: 3
        });
        $(".variable").slick({
            dots: true,
            infinite: true,
            variableWidth: true
        });
        $(".lazy").slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: true
        });
    });
    </script>

</body>

</html>