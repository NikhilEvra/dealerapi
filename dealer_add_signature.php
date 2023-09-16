<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$entityBody = file_get_contents('php://input');

include ('config.php');

// echo json_encode($_REQUEST);

$dealerid = $_POST['d_id'];

$response= array();

$path = "https://evraconnect.com/apifolder/ap_api/folder/";
$img = $_FILES['file']['name'];
$img_n = $path.$img;
$img_name = $_FILES['file']['tmp_name'];
$target_path = "folder/";  
$target_path = $target_path.basename( $_FILES['file']['name']);   
move_uploaded_file($img_name, $target_path);

if($con){ 
    $sql = "UPDATE `user_master` SET `signature_upload`='$img_n' WHERE u_id = '$dealer_id' ";
    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}



?>
