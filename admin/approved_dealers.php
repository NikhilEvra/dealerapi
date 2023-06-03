<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

// $d_id = '11';

$response = array();
if($con){
    $sql = "select * from user_master where `status` = 'Active' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['u_id'] = $row['u_id'];
            $response [$x]['name'] = $row['name'];
            $response [$x]['user_type'] = $row['user_type'];
            $response [$x]['dealership'] = $row['dealership_name'];

           
            $x++;
          
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>