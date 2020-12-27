<?php

include './db.php';
$o = '';

if(isset($_POST['action'])){

    if($_POST['action'] == 'results'){
        $AllResult = mysqli_query($con, "SELECT * FROM user_account");
        $totalRows = mysqli_num_rows($AllResult);
        // $pages = $totalRows/6;

        // $page = 1;

        if(isset($_POST['page'])){
            $page = $_POST['page'];
        }else{
            $page = 1;
        }

        $data_per_page = 7;
        $startForm = ($page - 1) * $data_per_page;
        $totalPages = ceil($totalRows / $data_per_page );


        $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC LIMIT $startForm,$data_per_page");

        if(@mysqli_num_rows($sql) > 0){
            $o .= '
            <table class="table table-sm table-action table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>username</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
            ';
            while($row = mysqli_fetch_array($sql)){
                $o .= '
                    <tr>
                        <td width="30%">'.$row['name'].'</td>
                        <td>'.$row['username'].'</td>
                        <td>'.$row['locatio'].'</td>
                        <td>'.$row['phone'].'</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info">edit</button>
                                <button class="btn btn-sm btn-danger">delete</button>
                            </div>
                        </td>
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
            $o .= '<div class="pagination">
            ';
            for($i = 1; $i <= $totalPages; $i ++ ){
                
                $o .= '
                    <button type="button" class="page-link pagination-link shadow-sm pageBtn" id="'.$i.'">'.$i.'</button>
                ';

            }
            $o .= '
            
            </div>';
            
        }else{
            $o .= '<p>there no data record</p>';
        }
        print $o;
    }

}