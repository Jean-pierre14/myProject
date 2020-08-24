<?php
    $con = mysqli_connect("localhost", "root", "", "erc_db") OR die("Cannot be connect to this DB");    
    // Varibles
    $errors = [];
    $output = '';
    $outMale = '';
    $outFemale = '';

    if(isset($_POST['action'])){
        if ( $_POST['action'] == 'online') {
            $query = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT 5");
            if(@mysqli_num_rows($query) > 0){
                $output .= '
                <ul class="list-group">
                    <li class="disabled text-danger description list-group-item">New Members</li>
                ';
                while($row = mysqli_fetch_array($query)){
                    
                    $output .= '
                        <a href="registration.php?member='.$row['id'].'" class="list-group-item d-flex justify-content-between list-group-item-action align-items-center list-group-item-success">
                            '.$row['name'].'
                            <span class="badge badge-pill">
                                <img class="ui image avatar" src="'.$row['profile_pic'].'">
                            </span>
                        </a>
                    ';
                }
                $output .= '</ul>';
            }else{
                $output .= '<p class="alert alert-danger ui meeage negative text-center small">There is no Member register</p>';
            }
            print $output;
        }
        if ( $_POST['action'] == 'member') {
            $query = mysqli_query($con, "SELECT * FROM user_account WHERE on_off ='online' ORDER BY `name` ASC");
            if(@mysqli_num_rows($query) > 0){
                $output .= '
                <ul class="list-group">
                    <li class="disable list-group-item d-flex justify-content-between text-danger">Online users</li>
                ';
                while($row = mysqli_fetch_array($query)){
                    
                    $output .= '
                        <a href="registration.php?member='.$row['id'].'" class="list-group-item d-flex justify-content-between list-group-item-action align-items-center list-group-item-success">
                            '.$row['name'].'
                            <span class="badge badge-pill">
                                <img class="ui image avatar" src="'.$row['profile_pic'].'">
                            </span>
                        </a>
                    ';
                }
                $output .= '</ul>';
            }else{
                $output .= '<p class="alert alert-danger ui meeage negative text-center small">There is no Member register</p>';
            }
            print $output;
        }
        if ( $_POST['action'] == 'member-list') {
            $query = mysqli_query($con, "SELECT * FROM user_account ORDER BY `name` ASC LIMIT 35");
            if(@mysqli_num_rows($query) > 0){
                $output .= '
                <div class="list-group mb-3">
                ';
                while($row = mysqli_fetch_array($query)){
                    
                    $output .= '
                        <a href="registration.php?member='.$row['id'].'" class="list-group-item d-flex justify-content-between list-group-item-action align-items-center list-group-item-success">
                            '.$row['name'].'
                            <span class="badge badge-pill">
                                <img class="ui image avatar" src="'.$row['profile_pic'].'">
                            </span>
                        </a>
                    ';
                }
                $output .= '</div>';
            }else{
                $output .= '<p class="alert alert-danger ui meeage negative text-center small">There is no Member register</p>';
            }
            print $output;
        }
        if( $_POST['action'] == 'search2' ){
            $txt = mysqli_real_escape_string($con, htmlentities(trim($_POST['txt'])));
            $output .= '
            <p class="text-center m-0 p-0 d-flex justify-content-between">
                Result found...
                <img src="../assets/images/loading.gif" class="ui image mini avatar" style="width: 15px;height: 15px">
            </p>';

            $sql = "SELECT `id`,`name`,`username`,`profile_pic` FROM user_account WHERE (`name` LIKE '%".$txt."%' OR `phone` LIKE '%".$txt."%')";
            $result = mysqli_query($con, $sql);

            if(@mysqli_num_rows($result) > 0) {
                $output .= '<div class="list-group">';
                while($row = mysqli_fetch_array($result)){
                    $output .= '
                    <a href="registration.php?member='.$row['id'].'" class="list-group-item d-flex align-items-center list-group-item-action list-group-item-primary justify-content-between">
                        '.$row['name'].'
                        <span class="badge badge-pill">
                            <img class="ui image avatar" src="'.$row['profile_pic'].'">
                        </span>
                    </a>';
                }
                $output .= '</div>';
            }else{
                $output .= '<p class="ui message negative">Result not found</p>';
            }
            print $output;
        }
        if( $_POST['action'] == 'search' ){
            $txt = mysqli_real_escape_string($con, htmlentities(trim($_POST['txt'])));
            $output .= '
            <p class="text-center m-0 p-0">
                <img src="../assets/images/loading.gif" class="ui image mini avatar" style="width: 15px;height: 15px">
            </p>';

            $sql = "SELECT `id`,`name`,`username`,`profile_pic` FROM user_account WHERE `name` LIKE '%".$txt."%'";
            $result = mysqli_query($con, $sql);

            if(@mysqli_num_rows($result) > 0) {
                $output .= '<div class="list-group">';
                while($row = mysqli_fetch_array($result)){
                    $output .= '
                    <a href="registration.php?member='.$row['id'].'" class="list-group-item d-flex align-items-center list-group-item-action list-group-item-primary justify-content-between">
                        '.$row['name'].'
                        <span class="badge badge-pill">
                            <img class="ui image avatar" src="'.$row['profile_pic'].'">
                        </span>
                    </a>';
                }
                $output .= '</div>';
            }else{
                $output .= '<p class="ui message negative">Result not found</p>';
            }
            print $output;
        }
        if ( $_POST['action'] == 'statistic') {
            $male = mysqli_query($con, "SELECT COUNT(id) AS male FROM user_account WHERE gender = 'Male'");
            $female = mysqli_query($con, "SELECT COUNT(*) AS female FROM user_account WHERE gender = 'Female'");
            
            $rowH = mysqli_fetch_array($male);
            $rowF = mysqli_fetch_array($female);
            $output .= '
                <table class="ui table table-hover">
                    <thead>
                        <tr>
                            <th class="bg-success"> Male </th>
                            <th class="bg-warning"> Female </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> '. $rowH['male'] .' </td>
                            <td class="text-center"> '. $rowF['female'] .' </td>
                        </tr>
                    </tbody>
                </table>
            ';
            print $output;
        }
        if ($_POST['action'] == 'listPastor') {
            $sql = mysqli_query($con, "SELECT * FROM pastor_tb");
            if(@mysqli_num_rows($sql) > 0) {
                $output .= '
                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm mb-2 btn-success btn-fill d-flex justify-content-between align-items-center">
                    Add New Pastor 
                    <i class="fa fa-arrow-circle-right"></i>
                </button>
                ';
                while($row = mysqli_fetch_array($sql)){
                    $output .= '
                    <div class="list-group">
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center">'.$row['pastor_name'].'</a>
                    </div>
                    ';
                }
            }else{
                $output .= '
                <div class="alert alert-danger ui message negative">
                    <p>There no data found!!!</p>
                </div>
                <div class="text-center">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-md btn-success d-flex justify-content-between align-items-center">
                        Add first Pastor 
                        <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>';
                ;
            }
            print $output;
        }
        if ($_POST['action'] == 'PastorNormal') {
            $sql = mysqli_query($con, "SELECT * FROM user_account WHERE (statu LIKE 'married') LIMIT 7");
            if(@mysqli_fetch_array($sql) > 0){
                $output .= '
                    <ul class="list-group mb-2">
                ';
                while($row = mysqli_fetch_array($sql)){
                    $output .= '
                        <li class="list-group-item hand-hover getPastor list-group-item-action list-group-item-success d-flex justify-content-between align-items-center">
                            '.$row['name'].'
                            <span>
                                <img src="'.$row['profile_pic'].'" class="ui image avatar">
                            </span>
                        </li>
                    ';
                }
                $output .= '
                    </ul>
                ';
            }else{
                $output .= '<p class="ui message negative">Result not found</p>';
            }
            print $output;
        }
        if ($_POST['action'] == 'RecordPastor') {
            $userId = mysqli_real_escape_string($con, htmlentities(trim($_POST['pastorId'])));
            $userName = mysqli_real_escape_string($con, htmlentities(trim($_POST['pastorName'])));

            if(empty($userId)){array_push($errors, "Empty identity");}
            if(empty($userId)){array_push($errors, "Empty identity");}

            if(count($errors) == 0){
                $sql = mysqli_query($con, "INSERT INTO pastor_tb(`user_Id`,`pastor_name`) VALUES('$userId','$userName')");
                if($sql){
                    print 'success';
                }else{
                    print 'failed';
                }
            }else{
                print 'failed';
            }
        }
        if ( $_POST['action'] == 'newsResult' ) {
            $query = "SELECT * FROM news_tb ORDER BY id DESC LIMIT 3";
            $result = mysqli_query($con, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $output .= '
                    <div class="media border p-3 m-2 border-4x">
                        <img src="'.$row['profile_pic'].'" alt="'.$row['title'].'" class="mr-3 mt-3 rounded-circle" style="width:60px;height: 60px;">
                        <div class="media-body">
                        <h4>'.$row['title'].'<small><i>Posted on '.$row['create_at'].'</i></small></h4>
                        <p>'.$row['content'].'</p>
                        </div>
                    </div>
                    ';
                }
            }else{
                $output .= '<p class="ui m-2 message positive">There is not data, come after</p>';
            }
            print $output;
        }
        if ( $_POST['action'] == 'aboutUpdate' ){

            $id = mysqli_real_escape_string($con, htmlentities(trim($_POST['id'])));
            $about = mysqli_real_escape_string($con, htmlentities(trim($_POST['about'])));
            
            if( empty($about) ){array_push( $errors, 'Empty field');}

            if ( count($errors) == 0 ){
                $sql = "UPDATE user_account SET about = '$about' WHERE id = '$id'";
                $result = mysqli_query($con, $sql);
                print 'success';
            }else{
                print 'Failed';
            }

        }
    }
    if(isset($_POST['subscribe'])){

        $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
        $message = mysqli_real_escape_string($con, htmlentities(trim($_POST['message'])));

        if(empty($email)){array_push($errors, "Email is invalid");}
        if(empty($message)){array_push($errors, "Message filed is empty");}

        if(count($errors) > 0){
            foreach($errors as $error){
                $output .= '<p class="alert alert-danger ui message negative">'.$error.'</p>';
            }
        }

        if(count($errors) == 0){
            $sql = "INSERT INTO suscribe_tb(email, context, read_unread) VALUES('$email', '$message', 'unread')";
            $result = mysqli_query($con, $sql);

            if($result){
                $output .= '<p class="alert alert-success ui message positive">Your message was Sended</p>';
            }
        }
    }

    