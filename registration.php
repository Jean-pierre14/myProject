<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERC</title>
    <link rel="shortcut icon" href="./assets/images/erc/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./public/css/all.min.css">
    <link rel="stylesheet" href="./public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.min.css">
    <script src="./public/bootstrap/bootstrap.min.js"></script>
    <script src="./public/js/all.min.js"></script>
</head>

<body>
    <div class="container-fluid py-5" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body shadow">
                    <h3 class="text-center text-success">Create an account</h3>
                    <?php require_once("./event/event.min.php");include("error.php");?>
                    <form action="" method="post">
                        <div class="form-row p-0">
                            <div class="form-group col-md-4">
                                <label for="username">Username</label>
                                <input type="text" value="<?php print $username; ?>" name="username" id="username"
                                    placeholder="Username" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">name</label>
                                <input type="text" value="<?php print $name; ?>" name="name" id="name"
                                    placeholder="name" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" value="<?php print $email; ?>" id="email" name="email"
                                    placeholder="Example@erc.com" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pass">Password</label>
                                <input type="password" value="<?php print $pass; ?>" name="pass" id="pass"
                                    placeholder="Password" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirm">Confirm Password</label>
                                <input type="password" value="<?php print $cpass; ?>" id="confrim" name="cpass"
                                    placeholder="confrim password" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="location">Location</label>
                                <input type="text" value="<?php print $location; ?>" id="location" name="location"
                                    placeholder="location" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phones">Phones</label>
                                <input type="tel" value="<?php print $phones; ?>" id="phones" name="phones"
                                    placeholder="Phones" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dob">Date of birth</label>
                                <input type="date" id="dob" name="dob" class="form-control transparent">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control transparent">
                                    <option value="">-- select --</option>
                                    <?php
                                                        include("./config/db.php");
                                                        $status = mysqli_query($con, "SELECT * FROM status_tb");
                                                        while($rowStatus = mysqli_fetch_array($status)){
                                                            $output .= '<option value="'.$rowStatus['name'].'">'.$rowStatus['name'].'</option>';
                                                        }
                                                        print $output;
                                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Gender">Gender</label>
                                <select name="gender" value="<?php print  $gender; ?>" id="Gender"
                                    class="form-control transparent">
                                    <option value="">-- select --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="about">About</label>
                                <textarea name="about" value="<?php print  $about; ?>" id="about"
                                    placeholder="About ..." class="form-control transparent"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" name="register" class="btn btn-sm btn-success">Register <i
                                        class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card card-body mt-3 shadow">
                    <p class="text-center">I have an <a href="login.php">account</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/jquery-3.4.0.min.js"></script>
</body>

</html>