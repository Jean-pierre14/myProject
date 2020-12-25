<?php
    include("../../config/db.php");
    $output = '';    

    if(isset($_POST['action'])){
        // $limit = $_POST['limit'];
        // $offset = $_POST['offset'];
        if($_POST['action'] == 'user'){
            $sql = mysqli_query($con, "SELECT * FROM user_account");

            if(mysqli_num_rows($sql) > 0){
                $output .= '<div class="list-group shadow mt-2">';
                while($data = mysqli_fetch_assoc($sql)){
                    $output .= '
                    <a href="users.php?user='.$data['id'].'" class="list-group-item d-flex justify-content-between text-uppercase">
                        <span class="">
                            '.$data['name'].'
                        </span>
                        <span class="">';
                        if($data['profile_pic'] == ''){
                            $output .= '<img src="../assets/images/use/user/face-0.jpg" alt="" class="ui avatar" style="width: 20px; border-radius: 50%">';
                        }else{
                            $output .= '<img src="../'.$data['profile_pic'].'" alt="" class="avatar" style="width: 20px; border-radius: 50%">';
                        }
                    $output .= '
                        </span>
                    </a>';
                }
                $output .= '</div>';
            }else{
                $output .= '<p class="alert alert-warning">there is no data register in your system</p>';
            }
            print $output;
        }
        if($_POST['action'] == 'requests_Api'){
            $sql = mysqli_query($con, "SELECT * FROM suscribe_tb ORDER BY id DESC");
            if(@mysqli_num_rows($sql) > 0){
                while($row = mysqli_fetch_array($sql)){
                    $output .= '
                    <div class="card mt-2 mr-2">
                        <div class="card-header p-1">
                            <div class="close">
                                <div class="btn-group">
                                    <a href="#view" class="btn btn-primary btn-sm"><i
                                            class="fa fa-flag-checkered"></i></a>
                                    <a href="#view" class="btn btn-danger btn-sm"><i
                                            class="fa fa-flag-checkered"></i></a>
                                </div>
                            </div>
                            <a href="#">
                                <small class="m-0 p-0">
                                    '.$row['email'].'
                                </small>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="p-0 m-0">
                                '.$row['context'].'
                            </p>
                            <small>'.$row['create_at'].'</small>
                        </div>
                    </div>
                    ';
                }
            }else{
                $output .= '<p class="alert alert-warning">There is not request send</p>';
            }
            print $output;
        }
        if($_POST['action'] == 'userTables'){
            $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT 13");
            if(@mysqli_num_rows($sql) > 0){
                $count = mysqli_num_rows($sql);
                $output .= '
                <table class="table table-sm table-striped m-0 p-0">
                    <thead style="border: none !important">
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                ';

                while($row = mysqli_fetch_array($sql)){
                    $output .= '
                    <tr class="p-0">
                        <td class="">'.$row['username'].'</td>
                        <td class=" ">'.$row['name'].'</td>
                        <td class="">'.$row['gender'].'</td>
                        <td class=" ">'.$row['statu'].'</td>
                        <td class="py-0 text-center">
                            <div class="btn-group hover-action">
                            
                            <a href="users.php?user='.$row['id'].'" class="btn p-1 btn-fill btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="" class="btn p-1 btn-fill btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                            </div>
                        </td>
                    </tr>
                    ';
                }

                $output .= '
                        </tbody>
                    </table>
                ';

            }else{
                $output .= '<tr class="text-danger">There no data registered</tr>';
            }
            print $output;
        }
    }