<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$entityBody = file_get_contents('php://input');

include ('config.php');

$dealerid = $_POST['d_id'];
$advertisement = $_POST['advertisement'];
$amount = $_POST['amount'];


$q = "SELECT * FROM `dealer_adv` where `dealer_id` = '$dealerid' ";
$query = mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
    $bal = $row['left_amt'];
}

$bal2 = $bal - $amount;


// echo json_encode($_REQUEST);
$response= array();
// return json_encode($response);


$path = "https://evramedia.com/apifolder/folder/";
$img = $_FILES['file']['name'];
$img_n = $path.$img;
$img_name = $_FILES['file']['tmp_name'];
$target_path = "admin/folder/";  
$target_path = $target_path.basename( $_FILES['file']['name']);   
move_uploaded_file($img_name, $target_path);


if($con){ 
    $sql = "UPDATE `dealer_adv` SET
    `file`='$img_n',
    `reinburs_amt` = '$amount',
    `left_amt`='$bal2'
    WHERE `dealer_id` = '$dealerid' ";

    $result = mysqli_query($con,$sql);
    if($result){
        echo json_encode(['status'=>true,'message'=>'Success!']);
    }else{
        echo json_encode(['status'=>false,'message'=>'Something Went Wrong!']);
    }
}



?>
