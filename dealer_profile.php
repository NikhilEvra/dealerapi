<?php

 header('Access-Control-Allow-Origin: *');  
 
 include 'config.php';
 
 if(isset($_GET['u_id'])){
     $u_id = $_GET['u_id'];
 }
 
if($con){
    
    $response = array();    
    $sql = "SELECT * FROM user_master WHERE u_id = '$u_id'";
    $query = mysqli_query($con, $sql);
    $x = 0;
    while($fetch_user = mysqli_fetch_assoc($query)){
        
        $response [$x] ['id'] = $fetch_user['id'];
        $response [$x] ['status'] = $fetch_user['status'];
        $response [$x] ['u_id'] = $fetch_user['u_id'];
        $response [$x] ['name'] = $fetch_user['name'];
        $response [$x] ['email'] = $fetch_user['email'];
        $response [$x] ['phone'] = $fetch_user['phone'];
        $response [$x] ['address'] = $fetch_user['address'];
        $response [$x] ['user_type'] = $fetch_user['user_type'];
        $response [$x] ['dealership_name'] = $fetch_user['dealership_name'];
        $response [$x] ['gst'] = $fetch_user['gst'];
        $response [$x] ['pan'] = $fetch_user['pan'];
        $response [$x] ['bank'] = $fetch_user['bank'];
        $response [$x] ['outlet_code'] = $fetch_user['outlet_code'];
        $response [$x] ['credit_limit'] = $fetch_user['credit_limit'];
        $response [$x] ['s_deposit'] = $fetch_user['s_deposit'];
        $x++ ;
    }
    
    echo json_encode($response, JSON_PRETTY_PRINT);
    
}else {
    echo "error connecting database";
}


?> 