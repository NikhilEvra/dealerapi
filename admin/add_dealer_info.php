<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);
$d_id = $_POST['d_id'];
$gst = $_POST['gst'];
$pan = $_POST['pan'];
$dealership = $_POST['dealership_name'];
$bank = $_POST['bank'];
$outlet_code = $_POST['outlet_code'];
$deposit = $_POST['deposit'];
$credit_amt = $_POST['credit_amt'];


if($con){ 
    $sql = "UPDATE `user_master` SET `dealership_name`='$dealership',`gst`='$gst',`pan`='$pan',`bank`='$bank',`outlet_code`='$outlet_code' ,`s_deposit`='$deposit',
    `credit_limit`='$credit_amt' 
    WHERE `u_id`='$d_id'";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>