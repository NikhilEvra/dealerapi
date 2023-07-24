<?php
header('Access-Control-Allow-Origin: *');  
include ('config.php');
// $d_id = '11';
if (isset($_GET['d_id'])){
    $d_id = $_GET['d_id'];
}

$response = array();
if($con){
    $sql = "select * from user_master where u_id = '$d_id' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $x = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['u_id'] = $row['u_id'];
            $response [$x]['name'] = $row['name'];
            $response [$x]['credit_limit'] = $row['credit_limit'];
            $response [$x]['s_deposit'] = $row['s_deposit'];
            $response [$x]['user_type'] = $row['user_type'];
           
            $x++;
        }
        
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

}
else{
    echo "error connecting database";
}


?>