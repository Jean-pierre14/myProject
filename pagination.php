<?php
    include './config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>

<body>
    <div class="container">
        <div id="results"></div>


        </tbody>
        </table>
    </div>
    <script src="./public/js/jquery-3.4.0.min.js"></script>
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
            console.log(page)
        })
    })
    </script>
</body>

</html>