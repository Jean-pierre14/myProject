<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/sass/index.style.min.css">
</head>

<body>
    <div class="loading-page">
        <img src="../assets/images/loading.gif" alt="">
    </div>
</body>

<script src="../public/js/jquery-3.4.0.min.js"></script>
<script>
$(window).on('load', function() {
    $('.loading-page').fadeOut('slow');

    // $('.body-not').animate({
    //     scrollTop: 430
    // }, 10)

    // $('.body-not').scrollTop($('.body-not')[0].scrollHeight)

    // Other part
    // scrollTop = scrollHeight - clienHeight
    // $('.body-not').animate({
    //     scrollTop: $('.body-not')[0].scrollHeight - $('.body-not').clienHeight
    // }, 1000)
    // End
});
</script>

</html>