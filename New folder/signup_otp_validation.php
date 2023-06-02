<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); 
// $entityBody = file_get_contents('php://input');

if (isset($_GET['phone'])){
    $phone = $_GET['phone'];
}
if (isset($_GET['otp'])){
    $otp = $_GET['otp'];
}

include ('config.php');
$response = array();

if($con){
        $data=mysqli_query($con,"SELECT count(*) FROM `user_master` where `phone` = '$phone' AND `signup_otp` = '$otp' ");
        while ($arr=mysqli_fetch_array($data)) 
        {
        $t_user=$arr['count(*)']; 
        }

        if($t_user == 0){
            echo json_encode(['status'=>false,'message'=>'Invalid Otp!']);

        }
            else{
                echo json_encode(['status'=>true,'message'=>'success']);
            }

}
else{
    echo json_encode(['status'=>false,'message'=>'Error!']);
}
?>