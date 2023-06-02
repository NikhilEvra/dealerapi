<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');
if (isset($_GET['c_id'])){
    $c_id = $_GET['c_id'];
}
include('config.php');
$response= array();

if($con){ 
    $sql = "UPDATE `complaints` SET `status`='Open' WHERE complaint_id = '$c_id'";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>