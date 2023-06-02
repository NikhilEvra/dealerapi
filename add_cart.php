<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);
$dealerid = $_POST['dealerid'];
$model = $_POST['model'];
$varient = $_POST['color'];
$q_with_b = $_POST['quantity_with_batt'];
$q_without_b = $_POST['quantity_without_batt'];
$a_with_b = $_POST['amountWithBatt'];
$a_without_b = $_POST['amountWithOutBatt'];

$total = $a_with_b + $a_without_b;
$gst = $total * 5 / 100;
$grand_total = $total + $gst;
date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");
if($con){ 
    $sql = "INSERT INTO `cart`(`id`, `status`, `dealer_id`, `model`, `varient`, `quantity_with_batt`, `quantity_without_batt`, `amountWithOutBatt`, `amountWithBatt`, `total`, `add_time`, `add_date`) 
    VALUES ('null','Open','$dealerid','$model','$varient','$q_with_b','$q_without_b','$a_without_b','$a_with_b','$grand_total','$t','$d')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>