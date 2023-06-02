<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
// $entityBody = file_get_contents('php://input');

 $con = mysqli_connect("localhost","root","","test");
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);

if($con){ 
    $sql = "INSERT INTO `test`(`name`, `email`) VALUES ('".$_POST['userid']."','".$_POST['password']."')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>