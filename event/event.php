<?php
    $con = mysqli_connect("localhost", "root", "", "erc_db") OR die("Cannot be connect to this DB");    
    // Varibles
    $errors = [];
    $output = '';
    $outMale = '';
    $outFemale = '';

    if(isset($_POST['action'])){
        if($_POST['action'] == "suscribe"){

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

        if($_POST['action'] == 'userTotal'){
            $sql = mysqli_query($con, "SELECT COUNT(id) AS countItem FROM user_account");

            if(@mysqli_num_rows($sql) === 0){
                print "zero user";
            }else{
                $data = mysqli_fetch_array($sql);
                print $data['countItem'];
            }
        }
        if($_POST['action'] == 'userPastor'){
            $sql = mysqli_query($con, "SELECT COUNT(id) AS countItem FROM pastor_tb");

            if(@mysqli_num_rows($sql) === 0){
                print "Zero Pastor";
            }else{
                $data = mysqli_fetch_array($sql);
                print $data['countItem'];
            }
        }
        if($_POST['action'] == 'userFemale'){
            $sql = mysqli_query($con, "SELECT COUNT(id) AS countItem FROM user_account WHERE gender = 'Female'");

            if(@mysqli_num_rows($sql) === 0){
                print "Zero Female";
            }else{
                $data = mysqli_fetch_array($sql);
                print $data['countItem'];
            }
        }
        if($_POST['action'] == 'userMale'){
            $sql = mysqli_query($con, "SELECT COUNT(id) AS countItem FROM user_account WHERE gender = 'Male'");

            if(@mysqli_num_rows($sql) === 0){
                print "Zero Male";
            }else{
                $data = mysqli_fetch_array($sql);
                print $data['countItem'];
            }
        }
        if($_POST['action'] == 'userWedding'){
            $sql = mysqli_query($con, "SELECT COUNT(id) AS countItem FROM wedding_tb");

            if(@mysqli_num_rows($sql) === 0){
                print "Zero Wedding";
            }else{
                $data = mysqli_fetch_array($sql);
                print $data['countItem'];
            }
        }

        if($_POST['action'] == 'word_of_day'){
            $sql = "SELECT user_account.id,user_account.name,user_account.profile_pic,words_tb.userId, words_tb.context, words_tb.created FROM user_account INNER JOIN words_tb WHERE user_account.id=words_tb.userId ORDER BY id LIMIT 1";

            $result = mysqli_query($con, $sql);
            if(@mysqli_num_rows($result) > 0){
                $data = mysqli_fetch_array($result);
                $output .= '
                <div class="bg-white p-3">
                    <div class="close">
                        <img src="../'.$data['profile_pic'].'" alt="'.$data['name'].'" class="img-avatar">
                    </div>
                    <h3>'.$data['name'].'</h3>
                    <div class="body-home">
                        <p class="">
                            '.$data['context'].'
                        </p>
                    </div>
                    <small class="">'.$data['created'].'</small>
                </div>';
            }else{
                $output .= '<p class="">We thank you to join our community <br> <b>jesus Christ</b> is our <b>Lord</b></p>';
            }
            print $output;
        }

        if($_POST['action'] == 'newUsers4'){
            $offset = $_POST['offset'];
            $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT 4");

            if(@mysqli_num_rows($sql) > 0){
                while($row = mysqli_fetch_array($sql)){
                    $output .= '
                    <div class="single-post-list d-flex flex-row align-items-center">
                        <div class="thumb">
                            <a href="../'.$row['profile_pic'].'">
                                <img src="../'.$row['profile_pic'].'" alt="'.$row['name'].'" style="width: 100px;height: 70px;object-fit:cover">
                            </a>
                        </div>
                        <div class="details">
                            <a href="profile.php?profile='.$row['id'].'">
                                <h6>'.$row['name'].'</h6>
                            </a>
                            <small>'.$row['email'].'</small>
                        </div>
                    </div>
                    ';
                }
            }else{
                $output .= '<p class="text-danger">We request you to tell people to join you</p>';
            }
            print $output;
        }
        if($_POST['action'] == 'weddingsFind'){
            $sql = mysqli_query($con, "SELECT user_account.id,wedding_tb.husband_id,user_account.username FROM user_account INNER JOIN wedding_tb WHERE user_account.id=wedding_tb.huband_id");
            if(@mysqli_num_rows($sql)> 0){
                while($row = mysqli_fetch_array($sql)):
                    $output .= '<p>'.$row['username'].'</p>';
                endwhile;
            }else{
                $output .= '<p class="alert alert-warning">Welcome to ERC goma</p>';
            }
            print $output;
        }
        if($_POST['action'] == 'programmes'){
            $sql = mysqli_query($con, "SELECT user_account.id, user_account.username, user_account.profile_pic, programmes_tb.userId, programmes_tb.context, programmes_tb.title, programmes_tb.created_at FROM user_account INNER JOIN programmes_tb WHERE user_account.id=programmes_tb.userId ORDER BY programmes_tb.id DESC LIMIT 4");
            if(@mysqli_num_rows($sql) > 0){
                $output .= '<h3 class="mb-4">Programmes</h3>';
                while($row = mysqli_fetch_assoc($sql)):
                    $output .= '
                    <div class="shadow-lg bg-white p-3 mb-3">
                        <div class="close">
                            <img src="../'.$row['profile_pic'].'" alt="username" class="img-avatar">
                        </div>
                        <h3 class="">'.$row['title'].'</h3>
                        <p class="p-0 m-0">
                            '.$row['context'].'
                        </p>
                    </div>';
                endwhile;
            }else{
                $output .= '<p class="alert alert-success">Our programmes is not yet ready</p>';
            }
            print $output;
        }
    }
    
    