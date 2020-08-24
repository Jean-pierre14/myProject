<?php
    $getUser = '';
    $sql = mysqli_query($con, "SELECT * FROM user_account ");
    while($row = mysqli_fetch_assoc($sql)){
        $getUser .= '
            <div>
                <p class="">'.$row['name'].'</p>
            </div>
        ';
    }
    print $getUser;