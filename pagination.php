<?php
    include './config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <link rel="stylesheet" href="./public/bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card my-5">
            <div class="card-header p-1">
                <h3 class="m-0 p-0">Users pagination using PHP and ajax Jquery codes</h3>
            </div>
            <div class="card-body">
                <div id="results"></div>
            </div>
        </div>
    </div>
    <script src="./public/js/jquery-3.4.0.min.js"></script>
    
    <script src="./public/bootstrap/bootstrap.min.js"></script>
    <script src="./public/bootstrap/popper.min.js"></script>
    <script>
    $(document).ready(function() {
        Results();

        function Results(page) {
            let action = 'results'
            $.ajax({
                url: './config/pagination.php',
                method: 'post',
                data: {
                    action,
                    page
                },
                success: function(res) {
                    $('#results').html(res)
                }
            })
        }

        $(document).on('click', '.pageBtn', function() {
            let page = $(this).attr('id')
            // console.log(page)
            $(this).addClass('btn-primary')
            Results(page)
        })
    })
    </script>
</body>

</html>