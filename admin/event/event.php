<?php
    include("../../config/db.php");
    $limit = $_POST['limit'];
    $offset = $_POST['offset'];

    if(isset($_POST['action'])){
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
                            $output .= '<img src="'.$data['profile_pic'].'" alt="" class="avatar" style="width: 20px; border-radius: 50%">';
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
    }