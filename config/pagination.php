<?php

include './db.php';
$o = '';

if(isset($_POST['action'])){

    if($_POST['action'] == 'results'){
        $AllResult = mysqli_query($con, "SELECT * FROM user_account");
        $totalRows = mysqli_num_rows($AllResult);
        // $pages = $totalRows/6;

        $page = 1;
        $data_per_page = 7;
        $startForm = ($page - 1) * $data_per_page;
        $totalPages = ceil($totalRows / $data_per_page );

        for($i = 1; $i <= $totalPages; $i ++ ){
            $o .= '
                <button type="button" class="pageBtn" id="'.$i.'">'.$i.'</button>
            ';
        }


        $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT 7");

        if(@mysqli_num_rows($sql) > 0){
            $o .= '
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>username</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
            ';
            while($row = mysqli_fetch_array($sql)){
                $o .= '
                    <tr>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['username'].'</td>
                        <td>'.$row['locatio'].'</td>
                        <td>'.$row['phone'].'</td>
                    </tr>
                ';
            }
            $o .= '
                </tbody>
            </table>
            ';
            // for($i=1;$i<=$pages;$i++){
            //     $o .= '<span> '.$i.' Page</span>';
            // }
            
        }else{
            $o .= '<p>there no data record</p>';
        }
        print $o;
    }

}