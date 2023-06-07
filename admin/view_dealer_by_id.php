<?php
 header('Access-Control-Allow-Origin: *');  
include ('config.php');

// $d_id = '11';
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
$response = array();
if($con){
    $sql = "select * from user_master where `u_id` = '$id' ORDER BY id DESC  ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['u_id'] = $row['u_id'];
            $response [$x]['name'] = $row['name'];
            $response [$x]['user_type'] = $row['user_type'];
            $response [$x]['dealership'] = $row['dealership_name'];

            $response [$x]['gst'] = $row['gst'];
            $response [$x]['pan'] = $row['pan'];
            $response [$x]['bank'] = $row['bank'];
            $response [$x]['outlet_code'] = $row['outlet_code'];
            $response [$x]['status'] = $row['status'];
            $response [$x]['phone'] = $row['phone'];
            $response [$x]['email'] = $row['email'];

            $x++;
          
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "error connecting database";
}

?>