<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERC</title>
    <link rel="stylesheet" href="./public/css/all.min.css">
    <link rel="stylesheet" href="./public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.min.css">
    <script src="./public/bootstrap/bootstrap.min.js"></script>
    <script src="./public/js/all.min.js"></script>
</head>
<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                
                <h2 class="text-center text-success">Log In</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <?php require_once("./event/event.min.php");?>
                        <?php include("error.php");?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username">Username or email</label>
                                <input type="text" name="username" value="<?php print $username;?>" id="username" placeholder="Username or email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" value="<?php print $pass;?>" id="pass" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="log" class="btn btn-sm btn-block btn-success" id="login_btn">Log in <i class="fa fa-arrow-circle-right"></i></button>
                                <span id="login_message"></span>
                                <img src="./assets/images/loading.gif" id="img" alt="" style="display:none;width: 20px;height: 20px;">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body p-2">
                    <p class="text-center pt-3">I don't have an <a href="registration.php" data-toggle="tooltip" rel="tooltip" title="Create an account" class="link text-success">account!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer bg-dark">
        <div class="row">
            <div class="col-md-3">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, maxime dicta? Cupiditate, commodi corporis. Tenetur iusto autem assumenda laborum voluptate modi in cumque, molestias rerum, deleniti exercitationem consectetur dolorem perferendis!
                </p>
            </div>
        </div>
    </div>
    
    <script src="./public/js/jquery-3.4.0.min.js"></script>
    <script>
        $().ready( function(){
            
        });
    </script>
</body>
</html>