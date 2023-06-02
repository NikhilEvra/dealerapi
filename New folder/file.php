<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$entityBody = file_get_contents('php://input');

include ('config.php');
// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);

 $img = $_FILES['photo']['name'];
$img_name = $_FILES['photo']['tmp_name'];
$target_path = "folder/";  
$target_path = $target_path.basename( $_FILES['photo']['name']);   
move_uploaded_file($img_name, $target_path);
    
if($con){ 
    $sql = "INSERT INTO `files`(`id`,`name`) VALUES ('null','$img')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}

?>