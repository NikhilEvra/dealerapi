<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');
include ('config.php');

$response= array();


if($con){ 
    $sql = "UPDATE `user_master` SET `password`='".$_POST['n_pass']."' WHERE id = '".$_POST['o_pass']."' ";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>