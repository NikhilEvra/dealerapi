<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

include ('config.php');

$response= array();

date_default_timezone_set("Asia/Calcutta");  
$d = date("Y/m/d");
$t = date("h:i:sa");

$id = $_POST['id'];
$po_id = $_POST['po_id'];

if($con){ 
    $sql = "UPDATE `notifications` SET `seen` = 'Seen' WHERE id = '$id' " ; 
    $sql2 = "INSERT INTO `notifications_entry`(`id`, `n_id`, `date`, `time`, `po_id`) VALUES (Null,'$id','$d','$t','$po_id')";
    $result = mysqli_query($con,$sql);
    $result2 = mysqli_query($con,$sql2);
    if($result && $result2){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}


?> 