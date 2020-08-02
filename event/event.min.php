<?php

// DB connection
$con = mysqli_connect("localhost", "root", "", "erc_db") OR die("Cannot be connect to this DB");

// Variables
$username = '';
$name = '';
$email = '';
$location = '';
$phones = '';
$status = '';
$gender = '';
$depart = '';
$dob = '';
$about = '';
$pass = '';
$cpass = '';

// Global variables
$errors = [];
$output = '';

$name = '';
$rand = rand(1, 2);

// Admin New user
if (isset($_POST['new-user'])) {
    $rand = rand(1, 2);
    $username = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $name = mysqli_real_escape_string($con, htmlentities(trim($_POST['name'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $location = mysqli_real_escape_string($con, htmlentities(trim($_POST['location'])));
    $status = mysqli_real_escape_string($con, htmlentities(trim($_POST['status'])));
    $gender = mysqli_real_escape_string($con, htmlentities(trim($_POST['gender'])));
    $phones = mysqli_real_escape_string($con, htmlentities(trim($_POST['phone'])));
    $depart = mysqli_real_escape_string($con, htmlentities(trim($_POST['depart'])));
    $dob = mysqli_real_escape_string($con, htmlentities(trim($_POST['dob'])));
    // $about = mysqli_real_escape_string($con, htmlentities(trim($_POST['about'])));

    // Check errors
    if ( empty($username) ) { array_push( $errors, "Username is empty" ); }
    if ( empty($name) ) { array_push( $errors, "Name is empty" ); }
    if ( empty($email) ) { array_push( $errors, "Email is empty" ); }
    if ( empty($location) ) { array_push( $errors, "Location is empty" ); }
    if ( empty($status) ) { array_push( $errors, "Status is empty" ); }
    if ( empty($gender) ) { array_push( $errors, "Gender is empty" ); }
    if ( empty($phones) ) { array_push( $errors, "Phone numbers is empty" ); }
    if ( empty($depart) ) { array_push( $errors, "Department is empty" ); }
    if ( empty($dob) ) { array_push( $errors, "Date of birth is empty" ); }
    // if ( empty($about) ) { array_push( $errors, "About is empty" ); }

    // Check if item is not match to one of DB
    $check = mysqli_query($con, "SELECT * FROM user_account");
    $row = mysqli_fetch_assoc($check);

    // Username
    if ($row['username'] == $username){ array_push( $errors, "This username is Already used" ); }
    // Email
    if ($row['email'] == $email){ array_push( $errors, "This email is already used" ); }

    // Zero error
    if( count($errors) == 0 ){
        $pass = 1234;
        if($rand == 1){
            $profile_pic = "../assets/images/use/user/face-0.jpg";
        } else if($rand == 2){
            $profile_pic = "../assets/images/use/user/face-1.jpg";
        }
        $about = 'My status!!! Who are you?';
        $password = md5($pass);
        $on_off = 'offline';
        $sql = "INSERT INTO user_account(`username`,`name`,`email`,`locatio`,`statu`,`gender`,`phone`,`department`,`dob`,`about`,`pass`,`profile_pic`,`on_off`)
            VALUES('$username','$name','$email','$location','$status','$gender','$phones','$depart','$dob','$about','$password','$profile_pic','$on_off')";
        $result = mysqli_query($con, $sql);

        if ( $result ) {
            print '<p class="alert alert-success ui message positive">'.$username.' His Recorded !</p>';
            $username = '';$name = '';$email = '';$location = '';$phones = '';$status = '';$gender = '';$depart = '';$dob = '';
        }else{
            print '<p class="ui message negative">Check your query</p>';
        }
    }
}

// Registration code

if(isset($_POST['register'])){

    $username = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $name = mysqli_real_escape_string($con, htmlentities(trim($_POST['name'])));
    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $pass = mysqli_real_escape_string($con, htmlentities(trim($_POST['pass'])));
    $cpass = mysqli_real_escape_string($con, htmlentities(trim($_POST['cpass'])));
    $location = mysqli_real_escape_string($con, htmlentities(trim($_POST['location'])));
    $phones = mysqli_real_escape_string($con, htmlentities(trim($_POST['phones'])));
    $status = mysqli_real_escape_string($con, htmlentities(trim($_POST['status'])));
    $gender = mysqli_real_escape_string($con, htmlentities(trim($_POST['gender'])));
    $depart = mysqli_real_escape_string($con, htmlentities(trim($_POST['depart'])));
    $dob = mysqli_real_escape_string($con, htmlentities(trim($_POST['dob'])));
    $about = mysqli_real_escape_string($con, htmlentities(trim($_POST['about'])));

    // Check if the fields are not empty
    if( empty($username) ) { array_push ( $errors, "Username is empty"); }
    if( empty($name) ) { array_push ( $errors, "Name is empty"); }
    if( empty($email) ) { array_push ( $errors, "Email is empty"); }
    if( empty($pass) ) { array_push ( $errors, "Password is empty"); }
    if( empty($cpass) ) { array_push ( $errors, "Confrim password is empty"); }
    if( empty($location) ) { array_push ( $errors, "Location is empty"); }
    if( empty($phones) ) { array_push ( $errors, "Phones number is empty"); }
    if( empty($status) ) { array_push ( $errors, "Status is required"); }
    if( empty($gender) ) { array_push ( $errors, "Gender is required"); }
    if( empty($about) ) { array_push ( $errors, "About you is required"); }

    // check if username already exist
    $check = mysqli_query($con, "SELECT * FROM user_account");

    $data = mysqli_fetch_assoc($check);
    
    if ($data['username'] == $username) { array_push( $errors, "Username already used" ); }
    if ($data['name'] == $name) { array_push( $errors, "Name already exist" ); }
    if ($data['email'] == $email) { array_push( $errors, "Email used !!!" ); }

    // check if passwords are match or not

    if( $pass != $cpass ){ array_push( $errors, "Password are not match"); }

    // Zero error
    if( count($errors) == 0 ) {

        // Criptage of our password
        $password = md5($pass);
        
        $sql = "INSERT INTO user_account(`username`,`name`,`email`,`pass`,`locatio`,`phone`,`dob`,`statu`,`gender`,`department`,`about`) 
        VALUES('$username','$name','$email','$password','$location','$phones','$dob','$status','$gender','$depart','$about')";

        $result = mysqli_query($con, $sql);

        if( $result ) {
            header("Location: login.php");            
        }else{
            print "<p class='alert alert-danger'>CHECK YOUR QUERY</p>";
        }
    }
}



// Login code
if(isset($_POST['login'])) {

    $username = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $pass = mysqli_real_escape_string($con, htmlentities(trim($_POST['pass'])));

    if( empty($username) ) { array_push($errors, "Username is empty"); }
    if( empty($pass) ) { array_push($errors, "Password is empty"); }
        
    
    if( count($errors) == 0){

        $password = md5($pass);
        
        $sql = "SELECT * FROM user_account WHERE ((username = '$username' OR email = '$username' AND pass = '$password'))";
        $result = mysqli_query($con, $sql);

        if(@mysqli_num_rows($result) == 1){
            
            session_start();
            $row = mysqli_fetch_array($result);
            $id = $row['id'];

            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['user_level'] = (int) $_SESSION['user_level'];
            
            
            $url = ($_SESSION['user_level'] === 1) ? './admin/' : './member/';

            header("Location : " . $url);
            exit();

            mysqli_free_result($result);
            mysqli_close($con);

        }else{
            $output .= '<p class="alert alert-danger">Username, email or Password invalid</p>';
        }
    }else{
        foreach($errors as $error){
            $output .= '<p class="alert alert-danger">'.$error.'</p>';
        }
    }
    print $output;             
}


if(isset($_POST['log'])){
    
    $user = mysqli_real_escape_string($con, htmlentities(trim($_POST['username'])));
    $pass = mysqli_real_escape_string($con, htmlentities(trim($_POST['pass'])));

    if(empty($user)){array_push($errors, "Empty username or Email");}
    if(empty($pass)){array_push($errors, "Empty Password");}

    if(count($errors) == 0){
        
        $password = md5($pass);
        $sql = "SELECT * FROM user_account WHERE (username = '$user' OR email = '$user') AND pass = '$password'";
        $result = mysqli_query($con, $sql);

        if(@mysqli_num_rows($result) == 1){

            session_start();

            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['user_level'] = (int)$_SESSION['user_level'];

            $url = ($_SESSION['user_level'] === 1) ? './admin' : './member';
            header("location: ". $url);
            exit();
            mysqli_free_result($result);
            mysqli_close($con);
        }else{
            print '<p class="alert alert-danger">Username, Email or Password invalid</p>';
        }        
    }
}
