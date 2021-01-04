<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <h3>
        Hello world
    </h3>
    <p style="display: none;">Form display</p>
    <button>Click me</button>
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('button').click(function(){
                $('p').show()
            })
            setTimeout('p', 1000)
        })
    </script>
</body>

</html>